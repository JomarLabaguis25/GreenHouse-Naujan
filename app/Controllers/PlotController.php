<?php

namespace App\Controllers;
use App\Models\PlotModel;


use App\Controllers\BaseController;

class PlotController extends BaseController
{
    public function GHPlot1()
    {
        return view('Plots/GHPlot1'); 
    }
    public function GHPlot2()
    {
        return view('Plots/GHPlot2'); 
    }
    public function GHPlot3()
    {
        return view('Plots/GHPlot3'); 
    }
    public function GHPlot4()
    {
        return view('Plots/GHPlot4'); 
    }
    public function GHPlot5()
    {
        return view('Plots/GHPlot5'); 
    }
    public function GHPlot6()
    {
        return view('Plots/GHPlot6'); 
    }
    public function GHPlot7()
    {
        return view('Plots/GHPlot7'); 
    }
    public function GHPlot8()
    {
        return view('Plots/GHPlot8'); 
    }

    public function nut_mot()
{
    $PlotModel = new PlotModel(); // Ensure proper case for the class name
    $plots = $PlotModel->findAll(); // This will return an empty array if no records are found

    // Pass the plots to the view directly
    return view('dashboard/plot_nutrients_monitoring', ['plots' => $plots]);
}
}
