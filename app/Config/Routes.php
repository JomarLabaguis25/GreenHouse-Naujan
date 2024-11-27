<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('service', 'Home::service');
$routes->get('project', 'Home::project');
$routes->get('contact', 'Home::contact');
$routes->get('feature', 'Home::feature');
$routes->get('quote', 'Home::quote');
$routes->get('team', 'Home::team');
$routes->get('testimonial', 'Home::testimonial');
$routes->get('404', 'Home::error');

$routes->get('register', 'UserController::registration');
$routes->get('login', 'UserController::login');

$routes->get('UserReg', 'UserController::UserReg'); // GET request for displaying registration form
$routes->post('UserReg', 'UserController::UserReg');
// $routes->get('UserLogin', 'UserController::UserLogin');
// $routes->match(['get', 'post'], 'UserLogin', 'UserController::UserLogin');

$routes->get('editprofile', 'UserController::editprofile');
$routes->get('UserLogin', 'UserController::UserLogin');
$routes->post('UserLogin', 'UserController::processLogin');

//security
$routes->post('auth/login', 'AdminController::login');
$routes->get('auth/logout', 'AdminController::logout');


$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->post('plants/fetchScientificName', 'AdminController::fetchScientificName');





    // admin side
    $routes->get('dash', 'AdminController::dash');
    $routes->get('charts', 'AdminController::charts');
    $routes->get('tables', 'AdminController::tables');
    $routes->get('cards', 'AdminController::cards');
    $routes->get('sensors', 'AdminController::sensors');
    $routes->get('nutrients', 'AdminController::nutrients');
    $routes->get('alerts', 'AdminController::alerts');
    $routes->get('History', 'AdminController::History');
    $routes->get('Reports', 'AdminController::Reports');
    $routes->get('plantinfo', 'AdminController::plantinfo');
    $routes->post('/plants/add', 'AdminController::addPlant');
    $routes->post('/plants/edit/(:num)', 'AdminController::editPlant/$1');

    $routes->get('MeasurementHistory', 'AdminController::MeasurementHistory');
    // $routes->post('insertFertilizer', 'PlantController::insertFertilizer');
    $routes->get('AppliedFertilizer', 'AdminController::AppliedFertilizer');

    //fertilizets
    $routes->post('addFertilizer', 'FertilizerController::addFertilizer');
    $routes->post('editFertilizer/(:num)', 'FertilizerController::editFertilizer/$1');
    $routes->post('deleteFertilizer', 'FertilizerController::deleteFertilizer');
    $routes->post('applyFertilizer', 'FertilizerController::applyFertilizer');
    $routes->post('deleteApplication', 'FertilizerController::deleteApplication');
    $routes->post('editApplication/(:num)', 'FertilizerController::editApplication/$1');


    // Plots
    // $routes->get('GHPlot1', 'PlotController::GHPlot1');
    // $routes->get('GHPlot2', 'PlotController::GHPlot2');
    // $routes->get('GHPlot3', 'PlotController::GHPlot3');
    // $routes->get('GHPlot4', 'PlotController::GHPlot4');
    // $routes->get('GHPlot5', 'PlotController::GHPlot5');
    // $routes->get('GHPlot6', 'PlotController::GHPlot6');
    // $routes->get('GHPlot7', 'PlotController::GHPlot7');
    // $routes->get('GHPlot8', 'PlotController::GHPlot8');
    $routes->get('plot/droughtMonitoring/(:num)', 'AdminController::viewPlotDroughtMonitoring/$1');
    $routes->get('plot/nutrientsMonitoring/(:num)', 'AdminController::viewPlotNutrientsMonitoring/$1');


    // Plot end

    // Plant nutrients
    $routes->get('PlantNuts1', 'NutrientsController::PlantNuts1');
    $routes->get('PlantNuts2', 'NutrientsController::PlantNuts2');
    $routes->get('PlantNuts3', 'NutrientsController::PlantNuts3');
    $routes->get('PlantNuts4', 'NutrientsController::PlantNuts4');
    $routes->get('PlantNuts5', 'NutrientsController::PlantNuts5');
    $routes->get('PlantNuts6', 'NutrientsController::PlantNuts6');
    $routes->get('PlantNuts7', 'NutrientsController::PlantNuts7');
    $routes->get('PlantNuts8', 'NutrientsController::PlantNuts8');
    // plant nutrients end

    $routes->post('plants/insertPlant', 'PlantController::insertPlant');
    $routes->post('plants/harvestPlant', 'PlantController::harvestPlant');
    $routes->post('plants/update', 'PlantController::updatePlant');

    $routes->get('list', 'PlantController::list');
    $routes->get('/fetch-plant-type-and-sort', [PlantController::class, 'fetchPlantTypeAndSort']);
    $routes->get('chart-data', 'ChartDataController::index');


    // CRUD
    $routes->get('tables/delete/(:num)', 'PlantController::delete/$1');
    $routes->get('plants/edit/(:num)', 'PlantController::edit/$1');
    $routes->post('update/(:num)', 'PlantController::update/$1');
    $routes->post('/updateHarvestStatus/(any:)', 'PlantController::updateHarvestStatus/$1');


    $routes->get('/open-edit-modal/(:any)/(:any)', 'PlantContoller::openEditModal/$1/$2');
    $routes->post('/save-changes', 'PlantContoller::saveChanges');


    //test

});
$routes->post('api/receive', 'ApiController::receiveData');
$routes->post('api/liveMeasurement', 'ApiController::store');
