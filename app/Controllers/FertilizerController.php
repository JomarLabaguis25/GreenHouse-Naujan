<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FertilizerApplicationModel;
use App\Models\FertilizerModel;
use App\Models\PlotModel;

class FertilizerController extends BaseController
{
    public function addFertilizer()
    {
        $fertilizerModel = new FertilizerModel();
        $data = [
            'fertilizer_name' => $this->request->getPost('fertilizerName'),
            'type' => $this->request->getPost('fertilizerType'),
            'frequency_of_application' => $this->request->getPost('frequencyOfApplication')
        ];

        $fertilizerModel->insert($data);

        return redirect()->to('/AppliedFertilizer');
    }

    public function editFertilizer($id)
    {
        $fertilizerModel = new FertilizerModel();

        $data = [
            'fertilizer_name' => $this->request->getPost('fertilizerName'),
            'type' => $this->request->getPost('fertilizerType'),
            'frequency_of_application' => $this->request->getPost('frequencyOfApplication')
        ];

        $fertilizerModel->update($id, $data);

        return redirect()->to('/AppliedFertilizer');
    }

    public function editApplication($id)
    {
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $plotModel = new PlotModel();
        $fertilizerModel = new FertilizerModel();

        // Fetch the plot ID based on the plot name from the plots table
        $plotName = $this->request->getPost('plotName');
        $plot = $plotModel->where('plot_name', $plotName)->first();

        if (!$plot) {
            return redirect()->back()->with('error', 'Invalid Plot Name.');
        }

        // Fetch the fertilizer ID based on the fertilizer name from the fertilizers table
        $fertilizerName = $this->request->getPost('appliedFertilizer');
        $fertilizer = $fertilizerModel->where('fertilizer_name', $fertilizerName)->first();

        if (!$fertilizer) {
            return redirect()->back()->with('error', 'Invalid Fertilizer Name.');
        }

        $data = [
            'plot_id' => $plot['id'],  // Use the plot ID obtained from the plots table
            'fertilizer_id' => $fertilizer['id'],  // Use the fertilizer ID obtained from the fertilizers table
            'date_applied' => $this->request->getPost('dateApplied'),
            'time_span' => $this->calculateTimeSpan($this->request->getPost('dateApplied')),

        ];

        $fertilizerApplicationModel->update($id, $data);

        return redirect()->to('/AppliedFertilizer');
    }

    private function calculateTimeSpan($dateApplied)
    {
        $dateApplied = new \DateTime($dateApplied);
        $currentDate = new \DateTime();
        $interval = $dateApplied->diff($currentDate);

        return $interval->format('%a days');
    }


    public function deleteFertilizer()
    {
        $id = $this->request->getPost('id');
        $fertilizerModel = new FertilizerModel();

        if ($fertilizerModel->delete($id)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }


    public function applyFertilizer()
    {
        $fertilizerApplicationModel = new FertilizerApplicationModel();
        $plotModel = new PlotModel();
        $fertilizerModel = new FertilizerModel();

        // Retrieve plot ID based on the plot name
        $plot = $plotModel->where('plot_name', $this->request->getPost('plotName'))->first();

        // Retrieve fertilizer ID based on the fertilizer name
        $fertilizer = $fertilizerModel->where('fertilizer_name', $this->request->getPost('appliedFertilizer'))->first();

        if ($plot && $fertilizer) {
            $data = [
                'plot_id' => $plot['id'], // Use the actual plot ID
                'fertilizer_id' => $fertilizer['id'], // Use the actual fertilizer ID
                'date_applied' => $this->request->getPost('dateApplied')
            ];

            $fertilizerApplicationModel->insert($data);

            return redirect()->to('/AppliedFertilizer');
        } else {
            // Handle the case where either the plot or fertilizer wasn't found
            return redirect()->back()->with('error', 'Invalid plot or fertilizer selection.');
        }
    }

    public function deleteApplication()
    {
        $id = $this->request->getPost('id');
        $fertilizerApplicationModel = new FertilizerApplicationModel();

        if ($fertilizerApplicationModel->delete($id)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }
}
