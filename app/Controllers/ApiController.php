<?php

namespace App\Controllers;

use App\Models\EnvironmentalMeasurementModel;
use CodeIgniter\RESTful\ResourceController;
use App\Services\PusherService;
use CodeIgniter\API\ResponseTrait;
use DateTime;
use DateTimeZone;

class ApiController extends ResourceController
{
    use ResponseTrait;
    public function receiveData()
    {
        $data = $this->request->getPost();
        log_message('info', 'Received data: ' . json_encode($data));

        return $this->respond(['status' =>  $data, 'message' => 'Data received!!!!']);
    }

    public function store()
    {
        // Load the model
        $measurementModel = new EnvironmentalMeasurementModel();

        // Get the JSON data from the request
        $input = $this->request->getJSON();

        // Validate the input data
        if (
            !$input || !isset($input->plot_id) || !isset($input->soil_moisture) || !isset($input->temperature) || !isset($input->humidity) ||
            !isset($input->nitrogen_level) || !isset($input->phosphorus_level) || !isset($input->potassium_level)
        ) {
            return $this->failValidationError('Invalid input data');
        }

        // Prepare the data for insertion
        $dateTime = new DateTime('now', new DateTimeZone('Asia/Manila')); // Set the timezone to your desired location
        $data = [
            'plot_id' => $input->plot_id,
            'measurement_date' => $dateTime->format('Y-m-d H:i:s'), // Format the date-time as needed
            'soil_moisture' => $input->soil_moisture,
            'temperature' => $input->temperature,
            'humidity' => $input->humidity,
            'nitrogen_level' => $input->nitrogen_level,  // Add Nitrogen
            'phosphorus_level' => $input->phosphorus_level,  // Add Phosphorus
            'potassium_level' => $input->potassium_level  // Add Potassium
        ];

        // Insert the data into the database
        if ($measurementModel->insert($data)) {
            // Attempt to send data to Pusher
            try {
                $pusher = new PusherService();
                $pusher->trigger('environmental-channel', 'new-measurement', $data); // Send the new data to Pusher
            } catch (\Exception $e) {
                // Log the error or handle it accordingly
                log_message('error', 'Pusher service failed: ' . $e->getMessage());
            }

            return $this->respondCreated(['status' => 'success']);
        } else {
            return $this->failServerError('Failed to save data');
        }
    }
}
