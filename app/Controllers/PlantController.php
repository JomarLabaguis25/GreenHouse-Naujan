<?php

namespace App\Controllers;

use App\Models\PlantModel;

use App\Controllers\BaseController;
use App\Models\HarvestedPlantModel;
use App\Models\PlantedPlantsModel;

class PlantController extends BaseController
{
    // public function insertFertilizer()
    // {
    //     // Get form data
    //     $plotName = $this->input->post('PlotName');
    //     $appliedFertilizer = $this->input->post('AppliedFertilizer');
    //     $dateApplied = $this->input->post('Date_Applied');
    //     $timeSpan = $this->input->post('Time_Span');
    //     $frequencyOfApplication = $this->input->post('Frequency_of_Application');

    //     // Log received data for debugging
    //     log_message('debug', 'Received data: ' . print_r($this->input->post(), true));

    //     // Check if all required form fields are set
    //     if ($plotName && $appliedFertilizer && $dateApplied && $timeSpan && $frequencyOfApplication) {
    //         // Load the model
    //         $this->load->model('PlantFertilizerModel');

    //         // Call the model method to insert data
    //         $result = $this->PlantFertilizerModel->insertFertilizerData($plotName, $appliedFertilizer, $dateApplied, $timeSpan, $frequencyOfApplication);

    //         // Check if insertion was successful
    //         if ($result) {
    //             // Return success response as JSON
    //             $response = array('success' => true, 'message' => 'Form submitted successfully');
    //         } else {
    //             // Log failure
    //             log_message('error', 'Database insertion failed');
    //             // Return error response as JSON
    //             $response = array('success' => false, 'message' => 'Failed to submit form');
    //         }
    //     } else {
    //         // Log missing fields
    //         log_message('error', 'Missing required form fields: ' . print_r($this->input->post(), true));
    //         // Return error response if required form fields are missing
    //         $response = array('success' => false, 'message' => 'Missing required form fields');
    //     }

    //     // Send JSON response
    //     $this->output
    //         ->set_content_type('application/json')
    //         ->set_output(json_encode($response));
    // }

    public function insertPlant()
    {
        $commonName = $this->request->getPost('common_name');
        $plantType = $this->request->getPost('plant_type');
        $plantDesc = $this->request->getPost('plant_desc');
        $waterCapacity = $this->request->getPost('water_capacity');
        $soilType = $this->request->getPost('soil_type');
        $daysToHarvest = $this->request->getPost('days_to_harvest');
        $quantity = (int) $this->request->getPost('quantity');

        // Extract the scientific name from the common name within parentheses
        preg_match('/\(([^)]+)\)/', $commonName, $matches);
        $scientificName = isset($matches[1]) ? $matches[1] : '';

        // Check if any of the required fields are missing
        if (empty($commonName) || empty($scientificName) || empty($plantType) || empty($plantDesc) || empty($waterCapacity) || empty($soilType) || empty($daysToHarvest) || $quantity <= 0) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'All fields are required'])->setStatusCode(400);
        }

        // Load the models
        $plantModel = new PlantModel();
        $plantedPlantModel = new PlantedPlantsModel();

        // Start a new transaction
        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // Check if the plant already exists in the plants table
            $existingPlant = $plantModel->where('scientific_name', $scientificName)->first();

            if (!$existingPlant) {
                // Insert into the plants table if it doesn't exist
                $plantModel->insert([
                    'common_name' => $commonName,
                    'scientific_name' => $scientificName,
                    'plant_type' => $plantType,
                    'plant_desc' => $plantDesc,
                    'water_capacity' => $waterCapacity,
                    'soil_type' => $soilType,
                    'days_to_harvest' => $daysToHarvest,
                    'harvest_status' => 'Not yet harvested',
                    'plant_age' => 0
                ]);
                $plantId = $plantModel->getInsertID();
            } else {
                $plantId = $existingPlant['id'];
            }

            // Always insert a new entry in the planted_plants table
            $plantedPlantModel->insert([
                'plant_id' => $plantId,
                'date_planted' => date('Y-m-d'),
                'quantity' => $quantity
            ]);

            // Commit the transaction
            $db->transComplete();

            // Return success response
            return redirect()->back()->with('status', 'Plant Inserted Successfully');
            // return $this->response->setJSON(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback transaction in case of an exception
            $db->transRollback();
            log_message('error', 'InsertPlant error: ' . $e->getMessage());
            // return $this->response->setJSON(['status' => 'error', 'message' => 'An error occurred'])->setStatusCode(500);
            return redirect()->back()->with('status', 'An error occurred');
        }
    }






    public function harvestPlant()
    {
        // Load the models
        $plantedPlantModel = new PlantedPlantsModel();
        $harvestedPlantModel = new HarvestedPlantModel();

        // Start a new transaction
        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // Get the form data
            $plantedPlantId = $this->request->getVar('planted_plant_id');
            $quantityHarvested = (int) $this->request->getVar('quantity_harvested');
            $quantityDestroyed = (int) $this->request->getVar('quantity_destroyed');

            // Validate the form data
            if (empty($plantedPlantId) || !is_numeric($quantityHarvested) || !is_numeric($quantityDestroyed)) {
                log_message('error', 'Invalid input data: ' . json_encode([
                    'planted_plant_id' => $plantedPlantId,
                    'quantity_harvested' => $quantityHarvested,
                    'quantity_destroyed' => $quantityDestroyed
                ]));
                return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid input data'])->setStatusCode(400);
            }

            // Find the planted plant by ID
            $plantedPlant = $plantedPlantModel->find($plantedPlantId);

            if (!$plantedPlant) {
                log_message('error', 'Planted plant not found: ' . $plantedPlantId);
                return $this->response->setJSON(['status' => 'error', 'message' => 'Planted plant not found'])->setStatusCode(404);
            }

            // Log the found planted plant data for debugging
            log_message('debug', 'Found planted plant data: ' . json_encode($plantedPlant));

            // Update the quantity in the planted plants table
            $newQuantity = $plantedPlant['quantity'] - ($quantityHarvested + $quantityDestroyed);
            if ($newQuantity < 0) {
                log_message('error', 'Not enough quantity to harvest for planted_plant_id: ' . $plantedPlantId);
                return $this->response->setJSON(['status' => 'error', 'message' => 'Not enough quantity to harvest'])->setStatusCode(400);
            }

            if ($newQuantity == 0) {
                // Delete the planted plant record if the new quantity is zero
                if (!$plantedPlantModel->delete($plantedPlantId)) {
                    $errors = $plantedPlantModel->errors();
                    log_message('error', 'Failed to delete planted plant data: ' . json_encode($errors));
                    throw new \Exception('Failed to delete planted plant data');
                }
            } else {
                $plantedPlantModel->update($plantedPlantId, ['quantity' => $newQuantity]);
            }

            // Prepare the data for insertion into the harvested plants table
            $harvestedPlantData = [
                'plant_id' => $plantedPlant['plant_id'],
                'date_harvested' => date('Y-m-d'),
                'quantity_harvested' => $quantityHarvested,
                'quantity_destroyed' => $quantityDestroyed
            ];

            // Log the data being inserted for debugging
            log_message('debug', 'Inserting harvested plant data: ' . json_encode($harvestedPlantData));

            // Insert into the harvested plants table
            if (!$harvestedPlantModel->insert($harvestedPlantData)) {
                $errors = $harvestedPlantModel->errors();
                log_message('error', 'Failed to insert harvested plant data: ' . json_encode($errors));
                throw new \Exception('Failed to insert harvested plant data');
            }

            // Commit the transaction
            $db->transComplete();

            // Return success response
            return $this->response->setJSON(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback transaction in case of an exception
            $db->transRollback();
            log_message('error', 'HarvestPlant error: ' . $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => 'An error occurred'])->setStatusCode(500);
        }
    }
    public function updatePlant()
    {
        // Load the models
        $plantedPlantModel = new PlantedPlantsModel();

        // Start a new transaction
        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // Get the form data
            $plantedPlantId = $this->request->getVar('planted_plant_id');
            $quantity = (int) $this->request->getVar('quantity');

            // Validate the form data
            if (empty($plantedPlantId) || !is_numeric($quantity)) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid input data'])->setStatusCode(400);
            }

            // Find the planted plant by ID
            $plantedPlant = $plantedPlantModel->find($plantedPlantId);

            if (!$plantedPlant) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Planted plant not found'])->setStatusCode(404);
            }

            // Update the quantity in the planted plants table
            $plantedPlantModel->update($plantedPlantId, ['quantity' => $quantity]);

            // Commit the transaction
            $db->transComplete();

            // Return success response
            return $this->response->setJSON(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback transaction in case of an exception
            $db->transRollback();
            log_message('error', 'UpdatePlant error: ' . $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => 'An error occurred'])->setStatusCode(500);
        }
    }








    public function list()
    {
        $plantModel = new PlantModel();
        $data['plants'] = $plantModel->findAll(); // Fetch all plants from the database
    }
    public function delete($id = null)
    {
        $plantModel = new PlantedPlantsModel();
        $plantModel->delete($id);
        return redirect()->back()->with('status', 'Plant Deleted Successfully');
    }
    // public function edit($id)
    // {
    //     // Assuming you have a model called "PlantModel" to handle database operations
    //     $this->load->model('PlantModel');

    //     // Fetch existing plant data by ID
    //     $plantData = $this->PlantModel->getPlantById($id);

    //     // Pass plant data to the view for editing
    //     $data['plant'] = $plantData;
    //     $this->load->view('edit_plant', $data); // Assuming you have an edit_plant view
    // }
    // public function update($plantId)
    // {
    //     // Assuming plantId is sent with the form data
    //     $id = $this->input->post('plantId');

    //     // Check if plantId is valid
    //     if (!$id) {
    //         $response = [
    //             'success' => false,
    //             'message' => 'Invalid plant ID'
    //         ];
    //         echo json_encode($response);
    //         return;
    //     }

    //     $data = [
    //         'PlantName' => $this->input->post('PlantName'),
    //         'PlantType' => $this->input->post('PlantType'),
    //         'PlantDesc' => $this->input->post('PlantDesc'),
    //         'WaterCapacity' => $this->input->post('WaterCapacity'),
    //         'SoilType' => $this->input->post('SoilType'),
    //         'DaysToHarvest' => $this->input->post('DaysToHarvest'),
    //         'HarvestStatus' => $this->input->post('HarvestStatus')
    //     ];

    //     // Load PlantModel
    //     $this->load->model('PlantModel');

    //     // Call the update method in the model
    //     $update_result = $this->PlantModel->updatePlant($id, $data);

    //     if ($update_result) {
    //         // Send success response
    //         $response = [
    //             'success' => true,
    //             'message' => 'Plant Updated Successfully'
    //         ];
    //         echo json_encode($response);
    //     } else {
    //         // Send error response
    //         $response = [
    //             'success' => false,
    //             'message' => 'Failed to update plant'
    //         ];
    //         echo json_encode($response);
    //     }
    // }


    // // Method to update the harvest status of a plant
    // public function updateHarvestStatus($plantId)
    // {
    //     // Ensure it's a POST request
    //     if ($this->request->getMethod() === 'post') {
    //         // Retrieve CSRF token from the request
    //         $csrfToken = $this->request->getPost('csrf_token');

    //         // Verify CSRF token
    //         if (!csrf_check($csrfToken)) {
    //             return $this->failUnauthorized('CSRF token validation failed');
    //         }

    //         // Get the plant ID from the request body
    //         $postData = $this->request->getJSON();
    //         if (!isset($postData->plantId) || $postData->plantId != $plantId) {
    //             return $this->fail('Invalid plant ID in request body');
    //         }

    //         // Update the harvest status in the database
    //         $plantModel = new PlantModel();
    //         $updated = $plantModel->updateHarvestStatus($plantId);

    //         if ($updated) {
    //             return $this->respond(['message' => 'Harvest status updated successfully']);
    //         } else {
    //             return $this->failServerError('Failed to update harvest status');
    //         }
    //     } else {
    //         return $this->fail('Only POST requests are allowed');
    //     }
    // }
    // // Constructor to load the model
    // public function __construct()
    // {
    //     $this->chemicalModel = new ChemicalModel();
    // }

    // public function saveChanges()
    // {
    //     // Get data from the POST request
    //     $fertilizerName = $this->request->getPost('fertilizerName');
    //     $timeSpan = $this->request->getPost('timeSpan');
    //     $frequency = $this->request->getPost('frequency');

    //     // Prepare data for insertion
    //     $data = [
    //         'fertilizer_name' => $fertilizerName,
    //         'Time_Span' => $timeSpan,
    //         'Frequency_of_Application' => $frequency
    //     ];

    //     // Insert data into the database using the model
    //     $inserted = $this->chemicalModel->insert($data);

    //     if ($inserted) {
    //         // Redirect back or show a success message
    //         return redirect()->to('/your-page')->with('success', 'Fertilizer added successfully!');
    //     } else {
    //         // Handle the case where insertion failed
    //         return redirect()->back()->withInput()->with('error', 'Failed to add fertilizer. Please try again.');
    //     }
    // }
}
