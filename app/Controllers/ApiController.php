<?php

namespace App\Controllers;

use App\Models\AdminPhone;
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
        $dateTime = new DateTime('now', new DateTimeZone('Asia/Manila')); // Set the timezone
        $data = [
            'plot_id' => $input->plot_id,
            'measurement_date' => $dateTime->format('Y-m-d H:i:s'),
            'soil_moisture' => $input->soil_moisture,
            'temperature' => $input->temperature,
            'humidity' => $input->humidity,
            'nitrogen_level' => $input->nitrogen_level,
            'phosphorus_level' => $input->phosphorus_level,
            'potassium_level' => $input->potassium_level
        ];

        // Insert the data into the database
        if ($measurementModel->insert($data)) {
            // Check soil moisture and send SMS
            $this->handleSMSNotifications($data);

            // Attempt to send data to Pusher
            try {
                $pusher = new PusherService();
                $pusher->trigger('environmental-channel', 'new-measurement', $data);
            } catch (\Exception $e) {
                log_message('error', 'Pusher service failed: ' . $e->getMessage());
            }

            return $this->respondCreated(['status' => 'success']);
        } else {
            return $this->failServerError('Failed to save data');
        }
    }
    protected function handleSMSNotifications($data)
    {
        $soilMoisture = $data['soil_moisture'];
        $plotId = $data['plot_id'];
        $currentHour = (int)(new DateTime('now', new DateTimeZone('Asia/Manila')))->format('H');

        // Check soil moisture levels and send appropriate SMS
        if ($soilMoisture > 3500) {
            $message = "Plot ID {$plotId}: Too dry. Watering now.";
            $this->sendBroadcastSMS($message);
        } elseif ($soilMoisture < 2500) {
            $message = "Plot ID {$plotId}: Watering done.";
            $this->sendBroadcastSMS($message);
        }

        // Send periodic notifications at 5 AM, 12 PM, and 6 PM
        if ($currentHour === 5) {
            $this->sendBroadcastSMS($this->formatBroadcastMessage("Morning", $data));
        } elseif ($currentHour === 12) {
            $this->sendBroadcastSMS($this->formatBroadcastMessage("Afternoon", $data));
        } elseif ($currentHour >= 20) {
            $this->sendBroadcastSMS($this->formatBroadcastMessage("Evening", $data));
        }
    }
    // Helper function to format the message
    protected function formatBroadcastMessage($timeOfDay, $data)
    {
        return "{$timeOfDay} data for Plot ID {$data['plot_id']}:
    - Soil Moisture: {$data['soil_moisture']}
    - Temperature: {$data['temperature']}°C
    - Humidity: {$data['humidity']}%
    - Nitrogen Level: {$data['nitrogen_level']}
    - Phosphorus Level: {$data['phosphorus_level']}
    - Potassium Level: {$data['potassium_level']}
    - Measurement Date: {$data['measurement_date']}";
    }



    public function sendBroadcastSMS($message)
    {
        // Load phone numbers from your database
        $phoneModel = new AdminPhone();
        $phoneNumbers = $phoneModel->where('receive_message', 1)->findAll();

        // Log if no phone numbers found
        if (empty($phoneNumbers)) {
            log_message('error', 'No phone numbers found to send SMS.');
            return $this->response->setJSON(['status' => 'error', 'message' => 'No phone numbers found.']);
        }

        log_message('info', 'Found ' . count($phoneNumbers) . ' phone numbers to send SMS.');

        // Iterate through all phone numbers and send SMS
        foreach ($phoneNumbers as $phone) {
            $this->sendSMSNotification($phone['phone_number'], $message);
        }

        log_message('info', 'SMS broadcast sent to all eligible numbers.');
        return $this->response->setJSON(['status' => 'success', 'message' => 'SMS broadcast sent']);
    }

    protected function sendSMSNotification($number, $message)
    {
        $ch = curl_init();

        // Prepare parameters for Semaphore API request
        $parameters = [
            'apikey' => 'ca65cee5e83152d3d7be7ac2332ff773',
            'number' => $number,
            'message' => $message,
            'sendername' => 'Thesis'
        ];

        // Log request parameters
        log_message('info', 'Sending SMS to number: ' . $number);

        curl_setopt($ch, CURLOPT_URL, 'https://semaphore.co/api/v4/messages');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the API request
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        // Log response and errors
        if ($response === false || $httpCode !== 200) {
            log_message('error', 'Semaphore API request failed for number ' . $number, [
                'http_code' => $httpCode,
                'response' => $response,
                'error' => $curlError
            ]);
            return false;
        }

        log_message('info', 'Semaphore API request succeeded for number ' . $number, ['response' => $response]);

        // Optionally, parse the response if needed
        $responseData = json_decode($response, true);
        if (isset($responseData['status']) && $responseData['status'] === 'success') {
            log_message('info', 'SMS successfully sent to number ' . $number);
            return true;
        }

        // Log failure if response status is not success
        // Log failure if response status is not success
        log_message('error', 'Failed to send SMS to number ' . $number . ', response was not successful', [
            'response' => $response,
            'http_code' => $httpCode,
            'error' => $curlError
        ]);
        return false;
    }
}
