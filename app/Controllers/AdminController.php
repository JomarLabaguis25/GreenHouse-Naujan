<?php

namespace App\Controllers;

use App\Models\HarvestedPlantModel;
use App\Models\UserModel;
use App\Models\PlantModel;
use App\Models\InfoModel;
use App\Models\SensorModel;
use App\Models\ScientificModel;
use App\Models\PlantFertilizerModel;
use App\Models\OrganicModel;
use App\Models\ChemicalModel;
use App\Controllers\BaseController;
use App\Models\AdminPhone;
use App\Models\EnvironmentalMeasurementModel;
use App\Models\FertilizerApplicationModel;
use App\Models\FertilizerModel;
use App\Models\PlantedPlantsModel;
use App\Models\PlotModel;
use App\Models\ServiceModel;
use CodeIgniter\API\ResponseTrait;
use DateInterval;
use DateTime;
use DateTimeZone;

class AdminController extends BaseController
{
    public $phoneModel;
    public function __construct()
    {
        $this->phoneModel = new AdminPhone();
    }
    use ResponseTrait;
    public function login()
    {
        $session = session();
        $username = $this->request->getVar('Username');
        $password = $this->request->getVar('password');

        // Log received data for debugging
        log_message('debug', 'Username: ' . $username);
        log_message('debug', 'Password: ' . $password);

        // Replace this with your actual authentication logic
        if ($username == 'DepartmentOfAgricultureNaujan' && $password == 'GreenHouseNaujan_2024') {
            $session->set('isLoggedIn', true);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Login successful']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Incorrect username or password']);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function dash()
    {
        $infoModel = new InfoModel();
        $userModel = new UserModel();
        $measurementModel = new EnvironmentalMeasurementModel();
        $plantedPlantModel = new PlantedPlantsModel();
        $harvestedPlantModel = new HarvestedPlantModel();
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $plantModel = new PlantModel();
        $phoneModel = new AdminPhone();

        // Fetch data
        $data['provinceInfo'] = $infoModel->findAll();
        $data['loggedInUser'] = $userModel->find(session()->get('id'));

        // Set date ranges for current, last week, last month, and yesterday
        $now = date('Y-m-d H:i:s');
        $oneDayAgo = date('Y-m-d H:i:s', strtotime('-1 day'));
        $oneWeekAgo = date('Y-m-d H:i:s', strtotime('-1 week'));
        $oneMonthAgo = date('Y-m-d H:i:s', strtotime('-1 month'));

        // Last week range (from 2 weeks ago to 1 week ago)
        $lastWeekStart = date('Y-m-d H:i:s', strtotime('-2 weeks'));
        $lastWeekEnd = $oneWeekAgo;

        // Last month range (from 2 months ago to 1 month ago)
        $lastMonthStart = date('Y-m-d H:i:s', strtotime('-2 months'));
        $lastMonthEnd = $oneMonthAgo;

        // Yesterday
        $yesterdayStart = date('Y-m-d H:i:s', strtotime('-2 days'));
        $yesterdayEnd = $oneDayAgo;

        // Fetch data for the last month
        $data['recentPlantedPlants'] = $plantedPlantModel->where('date_planted >=', $oneMonthAgo)->orderBy('date_planted', 'DESC')->findAll();
        $data['recentHarvestedPlants'] = $harvestedPlantModel->where('date_harvested >=', $oneMonthAgo)->orderBy('date_harvested', 'DESC')->findAll();
        $data['fertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $oneMonthAgo)->findAll();

        // Fetch distinct plot IDs from the measurements in the last month
        $distinctPlots = $measurementModel->select('plot_id')->distinct()->where('measurement_date >=', $oneMonthAgo)->findAll();
        $data['distinctPlots'] = $distinctPlots;
        // $distinctPlots = $measurementModel->select('plot_id')->distinct()->findAll();
        // $data['distinctPlots'] = $distinctPlots;
        // Fetch measurements for the last month and group them by plot_id
        $measurements = $measurementModel->where('measurement_date >=', $oneMonthAgo)->findAll();
        $groupedMeasurements = [];
        foreach ($measurements as $measurement) {
            $groupedMeasurements[$measurement['plot_id']][] = $measurement;
        }
        $data['groupedMeasurements'] = $groupedMeasurements;

        // Fetch plant details including the image URL
        foreach ($data['recentPlantedPlants'] as &$plant) {
            $plantDetails = $plantModel->find($plant['plant_id']);
            $plant['plant_info'] = $plantDetails;
            $plant['image_url'] = $plantDetails['image_url'] ?? 'https://via.placeholder.com/150?text=' . urlencode($plantDetails['common_name']);
        }

        // Calculate summaries
        $latestMeasurement = end($measurements);  // Assuming measurements are in chronological order
        if ($latestMeasurement) {
            $data['temperatureSummary'] = $latestMeasurement['temperature'];
            $data['humiditySummary'] = $latestMeasurement['humidity'];
            $data['soilMoistureSummary'] = $latestMeasurement['soil_moisture'];
            $data['nutrientLevelSummary'] = $latestMeasurement['nutrient_level'];
            $data['nitrogenSummary'] = $latestMeasurement['nitrogen_level'];
            $data['phosphorusSummary'] = $latestMeasurement['phosphorus_level'];
            $data['potassiumSummary'] = $latestMeasurement['potassium_level'];
        } else {
            $data['temperatureSummary'] = 'N/A';
            $data['humiditySummary'] = 'N/A';
            $data['soilMoistureSummary'] = 'N/A';
            $data['nutrientLevelSummary'] = 'N/A';
            $data['nitrogenSummary'] = 'N/A';
            $data['phosphorusSummary'] = 'N/A';
            $data['potassiumSummary'] = 'N/A';
        }

        // Calculate fertilizer applications summary
        $fertilizerApplications = $fertilizerApplicationModel->where('date_applied >=', $oneMonthAgo)->findAll();
        $data['fertilizerApplicationsSummary'] = count($fertilizerApplications);
        $latestFertilizerApplication = end($fertilizerApplications); // Assuming applications are in chronological order
        $data['latestFertilizerApplication'] = $latestFertilizerApplication['date_applied'] ?? 'N/A';

        // Fetch and calculate metrics for different time periods

        // Daily metrics
        $data['dailyPlantedTotal'] = $plantedPlantModel->where('date_planted >=', $oneDayAgo)->countAllResults();
        $data['dailyHarvestedTotal'] = $harvestedPlantModel->where('date_harvested >=', $oneDayAgo)->countAllResults();
        $data['dailyFertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $oneDayAgo)->countAllResults();

        // Weekly metrics
        $data['weeklyPlantedTotal'] = $plantedPlantModel->where('date_planted >=', $oneWeekAgo)->countAllResults();
        $data['weeklyHarvestedTotal'] = $harvestedPlantModel->where('date_harvested >=', $oneWeekAgo)->countAllResults();
        $data['weeklyFertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $oneWeekAgo)->countAllResults();

        // Monthly metrics
        $data['monthlyPlantedTotal'] = $plantedPlantModel->where('date_planted >=', $oneMonthAgo)->countAllResults();
        $data['monthlyHarvestedTotal'] = $harvestedPlantModel->where('date_harvested >=', $oneMonthAgo)->countAllResults();
        $data['monthlyFertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $oneMonthAgo)->countAllResults();

        // Last week metrics
        $data['lastWeekPlantedTotal'] = $plantedPlantModel->where('date_planted >=', $lastWeekStart)->where('date_planted <=', $lastWeekEnd)->countAllResults();
        $data['lastWeekHarvestedTotal'] = $harvestedPlantModel->where('date_harvested >=', $lastWeekStart)->where('date_harvested <=', $lastWeekEnd)->countAllResults();
        $data['lastWeekFertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $lastWeekStart)->where('date_applied <=', $lastWeekEnd)->countAllResults();

        // Last month metrics
        $data['lastMonthPlantedTotal'] = $plantedPlantModel->where('date_planted >=', $lastMonthStart)->where('date_planted <=', $lastMonthEnd)->countAllResults();
        $data['lastMonthHarvestedTotal'] = $harvestedPlantModel->where('date_harvested >=', $lastMonthStart)->where('date_harvested <=', $lastMonthEnd)->countAllResults();
        $data['lastMonthFertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $lastMonthStart)->where('date_applied <=', $lastMonthEnd)->countAllResults();

        // Yesterday metrics
        $data['yesterdayPlantedTotal'] = $plantedPlantModel->where('date_planted >=', $yesterdayStart)->where('date_planted <=', $yesterdayEnd)->countAllResults();
        $data['yesterdayHarvestedTotal'] = $harvestedPlantModel->where('date_harvested >=', $yesterdayStart)->where('date_harvested <=', $yesterdayEnd)->countAllResults();
        $data['yesterdayFertilizerApplications'] = $fertilizerApplicationModel->where('date_applied >=', $yesterdayStart)->where('date_applied <=', $yesterdayEnd)->countAllResults();

        // Fetch daily, weekly, monthly, last week, last month, and yesterday environmental measurements
        $dailyMeasurements = $measurementModel->where('measurement_date >=', $oneDayAgo)->findAll();
        $weeklyMeasurements = $measurementModel->where('measurement_date >=', $oneWeekAgo)->findAll();
        $monthlyMeasurements = $measurementModel->where('measurement_date >=', $oneMonthAgo)->findAll();

        $lastWeekMeasurements = $measurementModel->where('measurement_date >=', $lastWeekStart)->where('measurement_date <=', $lastWeekEnd)->findAll();
        $lastMonthMeasurements = $measurementModel->where('measurement_date >=', $lastMonthStart)->where('measurement_date <=', $lastMonthEnd)->findAll();
        $yesterdayMeasurements = $measurementModel->where('measurement_date >=', $yesterdayStart)->where('measurement_date <=', $yesterdayEnd)->findAll();

        // Calculate averages for daily, weekly, monthly, last week, last month, and yesterday environmental data
        $data['dailyAverageTemp'] = $this->calculateAverage($dailyMeasurements, 'temperature');
        $data['weeklyAverageTemp'] = $this->calculateAverage($weeklyMeasurements, 'temperature');
        $data['monthlyAverageTemp'] = $this->calculateAverage($monthlyMeasurements, 'temperature');
        $data['lastWeekAverageTemp'] = $this->calculateAverage($lastWeekMeasurements, 'temperature');
        $data['lastMonthAverageTemp'] = $this->calculateAverage($lastMonthMeasurements, 'temperature');
        $data['yesterdayAverageTemp'] = $this->calculateAverage($yesterdayMeasurements, 'temperature');

        $data['dailyAverageHumidity'] = $this->calculateAverage($dailyMeasurements, 'humidity');
        $data['weeklyAverageHumidity'] = $this->calculateAverage($weeklyMeasurements, 'humidity');
        $data['monthlyAverageHumidity'] = $this->calculateAverage($monthlyMeasurements, 'humidity');
        $data['lastWeekAverageHumidity'] = $this->calculateAverage($lastWeekMeasurements, 'humidity');
        $data['lastMonthAverageHumidity'] = $this->calculateAverage($lastMonthMeasurements, 'humidity');
        $data['yesterdayAverageHumidity'] = $this->calculateAverage($yesterdayMeasurements, 'humidity');

        $data['dailyAverageSoilMoisture'] = $this->calculateAverage($dailyMeasurements, 'soil_moisture');
        $data['weeklyAverageSoilMoisture'] = $this->calculateAverage($weeklyMeasurements, 'soil_moisture');
        $data['monthlyAverageSoilMoisture'] = $this->calculateAverage($monthlyMeasurements, 'soil_moisture');
        $data['lastWeekAverageSoilMoisture'] = $this->calculateAverage($lastWeekMeasurements, 'soil_moisture');
        $data['lastMonthAverageSoilMoisture'] = $this->calculateAverage($lastMonthMeasurements, 'soil_moisture');
        $data['yesterdayAverageSoilMoisture'] = $this->calculateAverage($yesterdayMeasurements, 'soil_moisture');

        $data['dailyAverageNitrogen'] = $this->calculateAverage($dailyMeasurements, 'nitrogen_level');
        $data['weeklyAverageNitrogen'] = $this->calculateAverage($weeklyMeasurements, 'nitrogen_level');
        $data['monthlyAverageNitrogen'] = $this->calculateAverage($monthlyMeasurements, 'nitrogen_level');
        $data['lastWeekAverageNitrogen'] = $this->calculateAverage($lastWeekMeasurements, 'nitrogen_level');
        $data['lastMonthAverageNitrogen'] = $this->calculateAverage($lastMonthMeasurements, 'nitrogen_level');
        $data['yesterdayAverageNitrogen'] = $this->calculateAverage($yesterdayMeasurements, 'nitrogen_level');

        $data['dailyAveragePhosphorus'] = $this->calculateAverage($dailyMeasurements, 'phosphorus_level');
        $data['weeklyAveragePhosphorus'] = $this->calculateAverage($weeklyMeasurements, 'phosphorus_level');
        $data['monthlyAveragePhosphorus'] = $this->calculateAverage($monthlyMeasurements, 'phosphorus_level');
        $data['lastWeekAveragePhosphorus'] = $this->calculateAverage($lastWeekMeasurements, 'phosphorus_level');
        $data['lastMonthAveragePhosphorus'] = $this->calculateAverage($lastMonthMeasurements, 'phosphorus_level');
        $data['yesterdayAveragePhosphorus'] = $this->calculateAverage($yesterdayMeasurements, 'phosphorus_level');

        $data['dailyAveragePotassium'] = $this->calculateAverage($dailyMeasurements, 'potassium_level');
        $data['weeklyAveragePotassium'] = $this->calculateAverage($weeklyMeasurements, 'potassium_level');
        $data['monthlyAveragePotassium'] = $this->calculateAverage($monthlyMeasurements, 'potassium_level');
        $data['lastWeekAveragePotassium'] = $this->calculateAverage($lastWeekMeasurements, 'potassium_level');
        $data['lastMonthAveragePotassium'] = $this->calculateAverage($lastMonthMeasurements, 'potassium_level');
        $data['yesterdayAveragePotassium'] = $this->calculateAverage($yesterdayMeasurements, 'potassium_level');

        $data['phone'] = $phoneModel->findAll();

        return view('dashboard/dash', $data);
    }

    private function calculateAverage($measurements, $key)
    {
        $total = 0;
        $count = count($measurements);
        if ($count > 0) {
            foreach ($measurements as $measurement) {
                $total += $measurement[$key];
            }
            return round($total / $count, 2);
        }
        return 'N/A';
    }


    public function add()
    {
        $name = $this->request->getPost('name');
        $phoneNumber = $this->request->getPost('phone_number');

        // Insert into database
        $data = [
            'name' => $name,
            'phone_number' => $phoneNumber,
            'receive_message' => 0, // Default to not receiving messages
        ];

        $id = $this->phoneModel->insert($data);

        if ($id) {
            return $this->response->setJSON(['success' => true, 'id' => $id]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to add phone number']);
        }
    }

    // Toggle the 'receive_message' status
    public function toggleReceive()
    {
        $id = (int) $this->request->getVar('id'); // Properly cast to integer
        $receiveMessage = (int) $this->request->getVar('receive_message'); // Properly cast to integer

        // Debug the input
        var_dump($receiveMessage); // Check if it's an integer
        var_dump($id); // Check if it's an integer

        // Validate input
        if (!is_numeric($id) || !in_array($receiveMessage, [0, 1], true)) { // Compare integers, not strings
            return $this->response->setStatusCode(400)->setJSON(['success' => false, 'message' => 'Invalid input data']);
        }

        // Attempt to update
        try {
            $update = $this->phoneModel->update($id, ['receive_message' => $receiveMessage]);
            if (!$update) {
                throw new \RuntimeException('Failed to update record in the database');
            }
            return $this->response->setJSON(['success' => true]);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage()); // Log the error
            return $this->response->setStatusCode(500)->setJSON(['success' => false, 'message' => 'An error occurred while updating']);
        }
    }



    // Delete a phone number
    public function delete()
    {
        $id = $this->request->getPost('id');

        $delete = $this->phoneModel->delete($id);

        if ($delete) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to delete phone number']);
        }
    }









    public function charts()
    {
        // Load the Measurement model
        $measurementModel = new EnvironmentalMeasurementModel();

        // Fetch the latest measurements for each plot, limiting to 30 records
        $latestMeasurementsQuery = $measurementModel
            ->select('environmental_measurements.plot_id, environmental_measurements.measurement_date, environmental_measurements.temperature, environmental_measurements.humidity, environmental_measurements.soil_moisture, environmental_measurements.nitrogen_level, environmental_measurements.phosphorus_level, environmental_measurements.potassium_level')
            ->join(
                '(SELECT plot_id, MAX(measurement_date) as latest_date FROM environmental_measurements GROUP BY plot_id) as latest_measurements',
                'environmental_measurements.plot_id = latest_measurements.plot_id AND environmental_measurements.measurement_date = latest_measurements.latest_date'
            )
            ->orderBy('environmental_measurements.measurement_date', 'DESC')
            ->limit(30); // Fetch only the latest 30 records
        $liveData = $latestMeasurementsQuery->findAll();

        // Fetch the last 30 soil measurement data ordered by date
        $soilMeasurementsData = $measurementModel
            ->select('environmental_measurements.plot_id, environmental_measurements.measurement_date, environmental_measurements.temperature, environmental_measurements.humidity, environmental_measurements.soil_moisture, environmental_measurements.nitrogen_level, environmental_measurements.phosphorus_level, environmental_measurements.potassium_level')
            ->orderBy('environmental_measurements.measurement_date', 'DESC')
            ->limit(30) // Fetch the last 30 measurements
            ->findAll();

        // Fetch distinct plot IDs for dropdown selection, limit the results for performance
        $distinctPlotsQuery = $measurementModel
            ->distinct()
            ->select('environmental_measurements.plot_id')
            ->orderBy('environmental_measurements.plot_id', 'ASC')
            ->limit(50); // Limit to reduce memory load
        $distinctPlots = $distinctPlotsQuery->findAll();

        // Fetch data for planted plants (limit results for performance)
        $db = \Config\Database::connect();
        $plantsQuery = $db->query("
        SELECT 
            plants.common_name AS PlantName, 
            COUNT(planted_plants.id) AS record_count,
            SUM(planted_plants.quantity) AS plant_count  
        FROM planted_plants
        JOIN plants ON planted_plants.plant_id = plants.id
        GROUP BY plants.common_name
        LIMIT 50
    ");
        $plantsData = $plantsQuery->getResultArray();



        // Fetch data for harvested plants (limit results for performance)
        $harvestedPlantsQuery = $db->query("
        SELECT 
            plants.common_name AS PlantName, 
            COUNT(harvested_plants.id) AS plant_count, 
            SUM(harvested_plants.quantity_harvested) AS total_quantity_harvested,
            SUM(harvested_plants.quantity_destroyed) AS total_quantity_destroyed
        FROM harvested_plants
        JOIN plants ON harvested_plants.plant_id = plants.id
        GROUP BY plants.common_name
        LIMIT 50
    ");
        $harvestedPlantsData = $harvestedPlantsQuery->getResultArray();


        // Pass the limited and optimized data to the view
        $data = [
            'liveData' => $liveData,
            'soilMeasurementsData' => $soilMeasurementsData,
            'distinctPlots' => $distinctPlots,
            'plantsData' => $plantsData,
            'harvestedPlantsData' => $harvestedPlantsData
        ];

        return view('dashboard/charts', $data);
    }













    public function tables()
    {
        // Load the models
        $infoModel = new InfoModel();
        $plantModel = new PlantModel();
        $sensorModel = new SensorModel();
        $serviceModel = new ServiceModel();
        $harvestedPlantModel = new HarvestedPlantModel();
        $plantedPlantModel = new PlantedPlantsModel();

        // Retrieve data from models
        $data['tableInfo'] = $infoModel->findAll();
        $data['sensors'] = $sensorModel->findAll();
        $data['services'] = $serviceModel->findAll();

        // Retrieve planted plants with plant details, sorted by date_planted in descending order
        $db = \Config\Database::connect();
        $builder = $db->table('planted_plants');
        $builder->select('planted_plants.*, plants.common_name, plants.scientific_name, plants.plant_type, plants.plant_desc, plants.water_capacity, plants.soil_type, plants.days_to_harvest, plants.harvest_status, plants.plant_age');
        $builder->join('plants', 'plants.id = planted_plants.plant_id');
        $builder->orderBy('planted_plants.date_planted', 'DESC');
        $query = $builder->get();
        $data['planted_plants'] = $query->getResultArray();

        // Retrieve harvested plants with plant details, sorted by date_harvested in descending order
        $builder = $db->table('harvested_plants');
        $builder->select('harvested_plants.*, plants.common_name, plants.scientific_name, plants.plant_type, plants.plant_desc, plants.water_capacity, plants.soil_type, plants.days_to_harvest, plants.harvest_status, plants.plant_age');
        $builder->join('plants', 'plants.id = harvested_plants.plant_id');
        $builder->orderBy('harvested_plants.date_harvested', 'DESC');
        $query = $builder->get();
        $data['harvested_plants'] = $query->getResultArray();

        // Pass data to the view
        return view('dashboard/tables', $data);
    }



    ///////chck
    public function AppliedFertilizer()
    {
        $fertilizerModel = new FertilizerModel();
        $fertilizerApplicationModel = new FertilizerApplicationModel();

        $data['org_fert'] = $fertilizerModel->where('type', 'organic')->findAll();
        $data['chem_fert'] = $fertilizerModel->where('type', 'chemical')->findAll();

        // Fetch all fertilizers for both management and application sections
        $data['fertilizers'] = $fertilizerModel->findAll();

        // Fetch all fertilizer applications and join with fertilizers to get the necessary details
        $data['fertilizerApplications'] = $fertilizerApplicationModel
            ->select('fertilizer_application.*, fertilizers.fertilizer_name, fertilizers.type, fertilizers.frequency_of_application')
            ->join('fertilizers', 'fertilizers.id = fertilizer_application.fertilizer_id')
            ->orderBy('fertilizer_application.date_applied', 'DESC')  // Sort by date_applied in descending order
            ->findAll();

        // Ensure plot_id exists in all fertilizerApplications and calculate time_span
        foreach ($data['fertilizerApplications'] as &$application) {
            if (!isset($application['plot_id'])) {
                $application['plot_id'] = 'Unknown'; // or any default value you prefer
            }

            // Calculate time_span as the difference between current date and date_applied
            $dateApplied = new \DateTime($application['date_applied']);
            $currentDate = new \DateTime();
            $interval = $currentDate->diff($dateApplied);

            // Format the time_span as needed
            $application['time_span'] = $interval->format('%a days');  // %a gives the total number of days
        }

        return view('dashboard/AppliedFertilizer', $data);
    }





    // CRUD operations for Fertilizer
    public function addFertilizer()
    {
        $fertilizerModel = new FertilizerModel();
        $data = [
            'fertilizer_name' => $this->request->getPost('fertilizer_name'),
            'type' => $this->request->getPost('type'),
            'time_span' => $this->request->getPost('time_span'),
            'frequency_of_application' => $this->request->getPost('frequency_of_application')
        ];

        $fertilizerModel->save($data);
        return redirect()->to('AppliedFertilizer');
    }

    public function editFertilizer($id)
    {
        $fertilizerModel = new FertilizerModel();
        $data = [
            'fertilizer_name' => $this->request->getPost('fertilizer_name'),
            'type' => $this->request->getPost('type'),
            'time_span' => $this->request->getPost('time_span'),
            'frequency_of_application' => $this->request->getPost('frequency_of_application')
        ];

        $fertilizerModel->update($id, $data);
        return redirect()->to('AppliedFertilizer');
    }

    public function deleteFertilizer($id)
    {
        $fertilizerModel = new FertilizerModel();
        $fertilizerModel->delete($id);
        return redirect()->to('AppliedFertilizer');
    }

    // CRUD operations for Fertilizer Application
    public function addFertilizerApplication()
    {
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $data = [
            'plot_id' => $this->request->getPost('plot_id'),
            'fertilizer_id' => $this->request->getPost('fertilizer_id'),
            'date_applied' => $this->request->getPost('date_applied'),
            'time_span' => $this->request->getPost('time_span'),
            'frequency_of_application' => $this->request->getPost('frequency_of_application')
        ];

        $fertilizerApplicationModel->save($data);
        return redirect()->to('AppliedFertilizer');
    }

    public function editFertilizerApplication($id)
    {
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $data = [
            'plot_id' => $this->request->getPost('plot_id'),
            'fertilizer_id' => $this->request->getPost('fertilizer_id'),
            'date_applied' => $this->request->getPost('date_applied'),
            'time_span' => $this->request->getPost('time_span'),
            'frequency_of_application' => $this->request->getPost('frequency_of_application')
        ];

        $fertilizerApplicationModel->update($id, $data);
        return redirect()->to('AppliedFertilizer');
    }

    public function deleteFertilizerApplication($id)
    {
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $fertilizerApplicationModel->delete($id);
        return redirect()->to('AppliedFertilizer');
    }
    //////chk
    public function History()
    {
        // Load models
        $plantModel = new PlantModel();
        $plantedModel = new PlantedPlantsModel();
        $harvestedModel = new HarvestedPlantModel();

        // Get all plants
        $plants = $plantModel->findAll();

        // Initialize plant summary
        $plant_summary = [];
        $daily_planting_summary = [];
        $daily_harvest_summary = [];

        // Loop through each plant and calculate the summary
        foreach ($plants as $plant) {
            // Calculate the total planted, harvested, and destroyed for each plant
            $currentlyPlanted = $plantedModel->where('plant_id', $plant['id'])->selectSum('quantity')->first()['quantity'] ?? 0;
            $quantityHarvested = $harvestedModel->where('plant_id', $plant['id'])->selectSum('quantity_harvested')->first()['quantity_harvested'] ?? 0;
            $quantityDestroyed = $harvestedModel->where('plant_id', $plant['id'])->selectSum('quantity_destroyed')->first()['quantity_destroyed'] ?? 0;

            $plant_summary[] = [
                'common_name' => $plant['common_name'],
                'scientific_name' => $plant['scientific_name'],
                'currently_planted' => $currentlyPlanted,
                'quantity_harvested' => $quantityHarvested,
                'quantity_destroyed' => $quantityDestroyed,
            ];
        }

        // Daily Planting Summary
        $planting_records = $plantedModel->select('date_planted, SUM(quantity) as total_quantity, GROUP_CONCAT(DISTINCT plant_id ORDER BY plant_id) as plants')
            ->groupBy('date_planted')
            ->findAll();

        foreach ($planting_records as $record) {
            $daily_planting_summary[] = [
                'date_planted' => $record['date_planted'],
                'total_quantity' => $record['total_quantity'],
                'plants' => implode(', ', array_map(function ($plantId) use ($plantModel) {
                    return $plantModel->find($plantId)['common_name'];
                }, explode(',', $record['plants'])))
            ];
        }

        // Daily Harvest Summary
        $harvest_records = $harvestedModel->select('date_harvested, SUM(quantity_harvested) as total_harvested, SUM(quantity_destroyed) as total_destroyed, GROUP_CONCAT(DISTINCT plant_id ORDER BY plant_id) as plants')
            ->groupBy('date_harvested')
            ->findAll();

        foreach ($harvest_records as $record) {
            $daily_harvest_summary[] = [
                'date_harvested' => $record['date_harvested'],
                'total_harvested' => $record['total_harvested'],
                'total_destroyed' => $record['total_destroyed'],
                'plants' => implode(', ', array_map(function ($plantId) use ($plantModel) {
                    return $plantModel->find($plantId)['common_name'];
                }, explode(',', $record['plants'])))
            ];
        }

        // Pass the data to the view
        return view('dashboard/History', [
            'plant_summary' => $plant_summary,
            'daily_planting_summary' => $daily_planting_summary,
            'daily_harvest_summary' => $daily_harvest_summary
        ]);
    }






    public function Reports()
    {
        $plantModel = new PlantModel();
        $plantedPlantsModel = new PlantedPlantsModel();  // This should be the correct model for the 'planted_plants' table
        $harvestedPlantsModel = new HarvestedPlantModel();
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $environmentalMeasurementsModel = new EnvironmentalMeasurementModel();

        // Fetch all plants
        $plants = $plantModel->findAll();

        // Summarize plant data
        $plantSummary = [];
        foreach ($plants as $plant) {
            $plantId = $plant['id'];
            $quantityPlanted = $plantedPlantsModel->where('plant_id', $plantId)->selectSum('quantity')->first()['quantity'] ?? 0;
            $quantityHarvested = $harvestedPlantsModel->where('plant_id', $plantId)->selectSum('quantity_harvested')->first()['quantity_harvested'] ?? 0;
            $quantityDestroyed = $harvestedPlantsModel->where('plant_id', $plantId)->selectSum('quantity_destroyed')->first()['quantity_destroyed'] ?? 0;

            $plantSummary[] = [
                'common_name' => $plant['common_name'],
                'scientific_name' => $plant['scientific_name'],
                'plant_type' => $plant['plant_type'],
                'quantity_planted' => $quantityPlanted,
                'quantity_harvested' => $quantityHarvested,
                'quantity_destroyed' => $quantityDestroyed,
                'quantity_currently_planted' => $quantityPlanted - $quantityHarvested - $quantityDestroyed,
            ];
        }

        // Fetch daily summary for planted and harvested plants
        $dailyPlantingSummary = $plantedPlantsModel
            ->select('date_planted, SUM(quantity) as total_planted, GROUP_CONCAT(plant_id) as plants_planted')
            ->groupBy('date_planted')
            ->orderBy('date_planted', 'DESC')
            ->findAll();

        $dailyHarvestingSummary = $harvestedPlantsModel
            ->select('date_harvested, SUM(quantity_harvested) as total_harvested, SUM(quantity_destroyed) as total_destroyed, GROUP_CONCAT(plant_id) as plants_harvested')
            ->groupBy('date_harvested')
            ->orderBy('date_harvested', 'DESC')
            ->findAll();

        // Fetch fertilizer application data
        $fertilizerApplications = $fertilizerApplicationModel
            ->select('fertilizer_application.*, fertilizers.fertilizer_name, plots.plot_name')
            ->join('fertilizers', 'fertilizer_application.fertilizer_id = fertilizers.id')
            ->join('plots', 'fertilizer_application.plot_id = plots.id')
            ->orderBy('fertilizer_application.date_applied', 'DESC')
            ->findAll();

        // Fetch environmental measurements
        $environmentalMeasurements = $environmentalMeasurementsModel
            ->select('environmental_measurements.*, plots.plot_name')
            ->join('plots', 'environmental_measurements.plot_id = plots.id')
            ->orderBy('environmental_measurements.measurement_date', 'DESC')
            ->findAll();

        // Prepare data for the view
        $data = [
            'plant_summary' => $plantSummary,
            'daily_planting_summary' => $dailyPlantingSummary,
            'daily_harvesting_summary' => $dailyHarvestingSummary,
            'fertilizer_applications' => $fertilizerApplications,
            'environmental_measurements' => $environmentalMeasurements,
        ];

        return view('dashboard/Reports', $data);
    }

    public function cards()
    {
        $plotModel = new PlotModel();
        $plots = $plotModel->findAll();

        return view('dashboard/cards', ['plots' => $plots]);
    }

    public function viewPlotDroughtMonitoring($plot_id)
    {
        $plotModel = new PlotModel();
        $measurementModel = new EnvironmentalMeasurementModel();

        // Set timezone to Asia/Manila
        $timezone = new DateTimeZone('Asia/Manila');
        $now = new DateTime('now', $timezone);
        $today = $now->format('Y-m-d');  // Get current date in 'YYYY-MM-DD' format

        // Fetch the plot details
        $plot = $plotModel->find($plot_id);

        // Check if the plot exists
        if (!$plot) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Plot not found');
        }

        // Fetch measurements for today
        $measurements = $measurementModel->where('plot_id', $plot_id)
            ->where('DATE(measurement_date)', $today)
            ->findAll();

        $morning_labels = [];
        $morning_too_wet = [];
        $morning_too_dry = [];
        $morning_average = [];

        $afternoon_labels = [];
        $afternoon_too_wet = [];
        $afternoon_too_dry = [];
        $afternoon_average = [];

        $watering_count = 0;

        foreach ($measurements as $measurement) {
            $measurementDate = new DateTime($measurement['measurement_date'], $timezone);
            $time = $measurementDate->format('H:i');
            $soil_moisture = $measurement['soil_moisture'];

            if ($measurementDate->format('H') < 12) {
                $morning_labels[] = $time;
                if ($soil_moisture > 3500) {
                    $morning_too_dry[] = $soil_moisture;
                    $morning_too_wet[] = null;
                    $morning_average[] = null;
                    $watering_count++;  // Increment watering count
                } elseif ($soil_moisture > 3000) {
                    $morning_too_dry[] = null;
                    $morning_too_wet[] = null;
                    $morning_average[] = $soil_moisture;
                } else {
                    $morning_too_dry[] = null;
                    $morning_too_wet[] = $soil_moisture;
                    $morning_average[] = null;
                }
            } else {
                $afternoon_labels[] = $time;
                if ($soil_moisture > 3500) {
                    $afternoon_too_dry[] = $soil_moisture;
                    $afternoon_too_wet[] = null;
                    $afternoon_average[] = null;
                    $watering_count++;  // Increment watering count
                } elseif ($soil_moisture > 3000) {
                    $afternoon_too_dry[] = null;
                    $afternoon_too_wet[] = null;
                    $afternoon_average[] = $soil_moisture;
                } else {
                    $afternoon_too_dry[] = null;
                    $afternoon_too_wet[] = $soil_moisture;
                    $afternoon_average[] = null;
                }
            }
        }

        $data = [
            'plot' => $plot,
            'morning_labels' => $morning_labels,
            'morning_too_wet' => $morning_too_wet,
            'morning_too_dry' => $morning_too_dry,
            'morning_average' => $morning_average,
            'afternoon_labels' => $afternoon_labels,
            'afternoon_too_wet' => $afternoon_too_wet,
            'afternoon_too_dry' => $afternoon_too_dry,
            'afternoon_average' => $afternoon_average,
            'watering_count' => $watering_count
        ];

        return view('dashboard/plot_drought_monitoring', $data);
    }


    public function nutrients()
    {
        $plotModel = new PlotModel();
        $plots = $plotModel->findAll();

        return view('dashboard/nutrients', ['plots' => $plots]);
    }
    public function viewPlotNutrientsMonitoring($plot_id)
    {
        $plotModel = new PlotModel();
        $measurementModel = new EnvironmentalMeasurementModel();

        // Fetch plot details
        $plot = $plotModel->find($plot_id);
        $measurements = $measurementModel->where('plot_id', $plot_id)->findAll();

        // Initialize arrays for storing data for Nitrogen, Phosphorus, and Potassium
        $morning_labels = [];
        $morning_nitrogen = [];
        $morning_phosphorus = [];
        $morning_potassium = [];

        $afternoon_labels = [];
        $afternoon_nitrogen = [];
        $afternoon_phosphorus = [];
        $afternoon_potassium = [];

        foreach ($measurements as $measurement) {
            // Extract time, nitrogen, phosphorus, and potassium levels
            $time = date('H:i', strtotime($measurement['measurement_date']));
            $nitrogen = $measurement['nitrogen_level'];
            $phosphorus = $measurement['phosphorus_level'];
            $potassium = $measurement['potassium_level'];
            $hour = date('H', strtotime($measurement['measurement_date']));

            if ($hour < 12) { // Morning data
                $morning_labels[] = $time;
                $morning_nitrogen[] = $nitrogen;
                $morning_phosphorus[] = $phosphorus;
                $morning_potassium[] = $potassium;
            } else { // Afternoon data
                $afternoon_labels[] = $time;
                $afternoon_nitrogen[] = $nitrogen;
                $afternoon_phosphorus[] = $phosphorus;
                $afternoon_potassium[] = $potassium;
            }
        }

        $data = [
            'plot' => $plot,
            'morning_labels' => $morning_labels,
            'morning_nitrogen' => $morning_nitrogen,
            'morning_phosphorus' => $morning_phosphorus,
            'morning_potassium' => $morning_potassium,
            'afternoon_labels' => $afternoon_labels,
            'afternoon_nitrogen' => $afternoon_nitrogen,
            'afternoon_phosphorus' => $afternoon_phosphorus,
            'afternoon_potassium' => $afternoon_potassium
        ];

        return view('dashboard/plot_nutrients_monitoring', $data);
    }



    public function sensors()
    {
        $sensor = new SensorModel();
        $data['sensors'] = $sensor->findAll();
        return view('dashboard/sensors', $data);
    }




    public function fetchScientificName()
    {
        try {
            // Load the database connection
            $db = \Config\Database::connect();

            // Get the plant name from the AJAX request
            $plantName = $this->request->getPost('plantName');

            // Query the database to fetch the scientific name based on the plant name
            $query = $db->table('plant_names') // Assuming 'plant_names' is the table containing common and scientific names
                ->select('scientific_name')
                ->where('common_name', $plantName)
                ->get();

            // Check if a row is returned
            if ($query->getNumRows() > 0) {
                // Fetch the result and send back the scientific name
                $row = $query->getRow();
                echo $row->scientific_name;
            } else {
                // If no matching plant is found, return an empty string
                echo "";
            }
        } catch (\Exception $e) {
            // Handle any exceptions
            echo $e->getMessage();
        }
    }

    public function handlePlantType()
    {
        // Load the Request class
        $request = \Config\Services::request();

        // Check if the request is a POST request
        if ($request->isAJAX() && $request->getMethod(true) === 'POST') {
            // Load database connection
            $db = \Config\Database::connect();

            // Fetch plant types from the database
            $builder = $db->table('plant_types');
            $query = $builder->get();

            // Check if query returned any rows
            if ($query->getNumRows() > 0) {
                // Fetch data and return as JSON
                $plantTypes = $query->getResultArray();
                return json_encode($plantTypes);
            } else {
                // No data found, return empty array
                return json_encode([]);
            }
        } else {
            // Handle case where the request is not a POST request or not an AJAX request
            return redirect()->to(site_url()); // Redirect to home page or any other appropriate action
        }
    }

    public function MeasurementHistory()
    {
        $measurementModel = new EnvironmentalMeasurementModel();
        $plotModel = new PlotModel();

        // Fetch all measurements and plot details, sorted by the latest measurements
        $measurements = $measurementModel->orderBy('measurement_date', 'DESC')->findAll();
        $plots = $plotModel->findAll();

        // Pass data to the view
        $data = [
            'measurements' => $measurements,
            'plots' => $plots
        ];

        return view('dashboard/measurement_history', $data);
    }
    public function plantinfo()
    {
        $plantid = $this->request->getPost('plantId');
        $plantModel = new PlantModel();
        $data['plant'] = $plantModel->find($plantid);
        return view('dashboard/plantinfo', $data);
    }

    public function addPlant()
    {
        $plantModel = new PlantModel();

        $data = [
            'common_name'      => $this->request->getPost('common_name'),
            'scientific_name'  => $this->request->getPost('scientific_name'),
            'plant_type'       => $this->request->getPost('plant_type'),
            'plant_desc'       => $this->request->getPost('plant_desc'),
            'water_capacity'   => $this->request->getPost('water_capacity'),
            'soil_type'        => $this->request->getPost('soil_type'),
            'days_to_harvest'  => $this->request->getPost('days_to_harvest'),

        ];

        if ($plantModel->insert($data)) {
            return redirect()->to('/plantinfo')->with('success', 'Plant added successfully');
        } else {
            return redirect()->to('/plantinfo')->with('error', 'Failed to add plant');
        }
    }

    public function editPlant($id)
    {
        $plantModel = new PlantModel();

        $data = [
            'common_name'      => $this->request->getPost('common_name'),
            'scientific_name'  => $this->request->getPost('scientific_name'),
            'plant_type'       => $this->request->getPost('plant_type'),
            'plant_desc'       => $this->request->getPost('plant_desc'),
            'water_capacity'   => $this->request->getPost('water_capacity'),
            'soil_type'        => $this->request->getPost('soil_type'),
            'days_to_harvest'  => $this->request->getPost('days_to_harvest'),

        ];

        if ($plantModel->update($id, $data)) {
            return redirect()->to('/plantinfo')->with('success', 'Plant added successfully');
        } else {
            return redirect()->to('/plantinfo')->with('error', 'Failed to add plant');
        }
    }
}
