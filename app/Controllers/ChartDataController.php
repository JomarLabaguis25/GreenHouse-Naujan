<?php

namespace App\Controllers;

use App\Models\EnvironmentalMeasurementModel;
use App\Models\UserModel;
use App\Models\TemperatureModel;
use CodeIgniter\API\ResponseTrait;

class ChartData extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        // Fetch data from the database
        $temperatureModel = new TemperatureModel();
        $data = $temperatureModel->select(['temperature', 'humidity', 'heatIndex'])
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->findAll();

        $chartData = $data[0] ?? null;

        if ($chartData) {
            // Fetch registered email addresses from the database
            $userModel = new UserModel();
            $emails = $userModel->select('email')
                ->findAll();

            // Send email notifications
            foreach ($emails as $email) {
                $this->sendEmail($email['email'], $chartData);
            }

            // Return the data as JSON
            return $this->respond($chartData);
        } else {
            // No data available
            return $this->failNotFound('No data available.');
        }
    }

    private function sendEmail($recipientEmail, $chartData)
    {
        // Load email library
        $email = \Config\Services::email();

        // Set email parameters
        $email->setFrom('feudomykopiolo22@gmail.com', 'Greenhouse');
        $email->setTo($recipientEmail);
        $email->setSubject('Temperature and Humidity Update');
        $email->setMessage('Here is your updated chart data:<br><br>Temperature: ' . $chartData['temperature'] . '<br>Humidity: ' . $chartData['humidity'] . '<br>Heat Index: ' . $chartData['heatIndex']);

        // Send the email
        if ($email->send()) {
            // Log success
            log_message('info', 'Email sent to ' . $recipientEmail);
        } else {
            // Log error
            log_message('error', 'Error sending email to ' . $recipientEmail . ': ' . $email->printDebugger());
        }
    }


    public function store()
    {
        $model = new EnvironmentalMeasurementModel();
        $data = [
            'plot_id' => $this->request->getVar('plot_id'),
            'measurement_date' => date('Y-m-d H:i:s'),
            'temperature' => $this->request->getVar('temperature'),
            'humidity' => $this->request->getVar('humidity'),
            'soil_moisture' => $this->request->getVar('soil_moisture')
        ];

        if ($model->insert($data)) {
            return $this->respond(['status' => 'success'], 200);
        } else {
            return $this->respond(['status' => 'fail'], 500);
        }
    }
}
