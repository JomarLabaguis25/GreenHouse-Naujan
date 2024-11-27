<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class Home extends BaseController
{
    public function index(): string
    {
        $service = new ServiceModel();
        $data['services'] = $service->findAll();
        return view('index', $data);
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        $service = new ServiceModel();
        $data['services'] = $service->findAll();
        return view('service', $data);
    }
    public function project()
    {
        $service = new ServiceModel();
        $data['services'] = $service->findAll();
        return view('project', $data);
    }
    public function contact()
    {
        return view('contact');
    }
    public function feature()
    {
        return view('feature');
    }
    public function quote()
    {
        return view('quote');
    }
    public function team()
    {
        return view('team');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function error()
    {
        return view('404');
    }
    // public function dash()
    // {
    //     return view('dashboard/dash'); 
    // }
}
