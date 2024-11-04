<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Naujan Greenhouse Dashboard">
  <meta name="keywords" content="greenhouse, dashboard, admin template, responsive dashboard">
  <meta name="author" content="ThemeSelect">


  <link rel="icon" type="image/x-icon" href="<?= base_url('naujanLogo.png') ?>">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
    rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/vendors.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/vendors/css/charts/chartist.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/app-lite.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/core/menu/menu-types/vertical-menu.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/core/colors/palette-gradient.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/pages/dashboard-ecommerce.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .card-title {
      font-size: 1.2rem;
    }

    .card-body h5 {
      font-size: 1rem;
    }

    .card-body h3 {
      font-size: 1.5rem;
    }

    .dropdown-toggle::after {
      margin-left: 0.255em;
    }

    .btn-primary {
      background-color: #5a67d8;
      border-color: #4c51bf;
    }

    .btn-primary:hover {
      background-color: #434190;
      border-color: #3c366b;
    }

    .btn-primary:focus {
      box-shadow: 0 0 0 0.2rem rgba(72, 94, 251, 0.5);
    }

    @media (max-width: 768px) {
      .card-title {
        font-size: 1rem;
      }

      .card-body h5 {
        font-size: 0.9rem;
      }

      .card-body h3 {
        font-size: 1.2rem;
      }
    }

    @media (max-width: 480px) {
      .card-title {
        font-size: 0.9rem;
      }

      .card-body h5 {
        font-size: 0.8rem;
      }

      .card-body h3 {
        font-size: 1rem;
      }
    }

    .carousel-caption {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 20px;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .carousel-caption .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .carousel-caption h5,
    .carousel-caption p {
      z-index: 2;
    }

    .weather-card {
      background-color: #f3f4f6;
      border: none;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .weather-card .card-body {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.5rem;
    }

    .weather-card h4 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .weather-icon {
      font-size: 4rem;
      color: #5a67d8;
    }

    .weekly-report {
      background-color: #edf2f7;
      border: none;
      border-radius: 8px;
      padding: 1.5rem;
    }

    .weekly-report h4 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .weekly-report .stat {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }

    .weekly-report .stat i {
      font-size: 1.5rem;
      margin-right: 0.5rem;
      color: #5a67d8;
    }

    .weekly-report .stat p {
      margin: 0;
    }

    .plot-select-card {
      background-color: #f9fafb;
      border: none;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 1rem;
      padding: 1rem 1.5rem;
    }

    .plot-select-card label {
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .plot-select-card select {
      width: 100%;
      padding: 0.5rem;
      border-radius: 4px;
      border: 1px solid #d1d5db;
    }
  </style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-ph"></i><span class="selected-language"></span></a>
            </li>
            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right"><a class="dropdown-item" href="alerts"><i class="ft-book"></i> Alerts</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read </a></div>
              </div>
            </li>
            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= base_url('naujanLogo.png'); ?>" alt="avatar"><i></i></span></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right">
                  <a class="dropdown-item" href="#">
                    <span class="avatar avatar-online">
                      <span class="user-name text-bold-700 ml-1"><?= $loggedInUser['fullName'] ?? 'Admin'; ?></span>
                    </span>
                  </a>

                  <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="ft-power"></i> Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="<?= base_url('admin/theme-assets/images/backgrounds/02.jpg'); ?>">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="dash"><img class="brand-logo" alt="Chameleon admin logo" src="<?= base_url('admin/theme-assets/images/logo/naujan.png'); ?>" />
            <h3 class="brand-text">Naujan GreenHouse</h3>
          </a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="active"><a href="/dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="nav-item" id="charts-dropdown" style="position: relative;"><a href="/charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
        </li>
        <li class="nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
        </li>
        <li class="nav-item"><a href="/cards"><i class="ft-layers"></i><span class="menu-title" data-i18n="">DM</span></a>
        </li>
        <li class="nav-item"><a href="/nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
        <li class="nav-item"><a href="/sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
        </li>
        <li class=" nav-item"><a href="/MeasurementHistory"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Measurement H</span></a>
        </li>
        </li>
        </li>
        <li class="nav-item"><a href="/History"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Plant History</span></a>
        </li>
        <li class="nav-item"><a href="/AppliedFertilizer"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Applied Fertilizer</span></a>
        </li>
        <li class="nav-item"><a href="/Reports"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Over All Reports</span></a>
        </li>
      </ul>
    </div>
    <div class="navigation-background"></div>
  </div>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
      </div>
      <div class="content-body">

        <!-- Dropdown for Plot Selection -->
        <div class="row">
          <div class="col-12">
            <div class="card plot-select-card">
              <label for="plot-select">Select Plot:</label>
              <select class="form-control" id="plot-select">
                <option value="all">All Plots</option>
                <?php foreach ($distinctPlots as $plot) : ?>
                  <option value="<?= $plot['plot_id']; ?>">Plot <?= $plot['plot_id']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>

        <!-- Weather Information -->
        <div class="row match-height">
          <div class="col-xl-12 col-lg-12">
            <div class="card weather-card">
              <div class="card-content">
                <div class="card-body">
                  <div class="weather-icon text-center">
                    <i class="fas fa-cloud-sun"></i>
                  </div>
                  <div class="text-center">
                    <h4 id="weather-location">Naujan, Oriental Mindoro</h4>
                    <div id="weather-info">
                      <p>Temperature: <span id="weather-temp">--°C</span></p>
                      <p>Humidity: <span id="weather-humidity">--%</span></p>
                      <p>Wind Speed: <span id="weather-wind">-- km/h</span></p>
                      <p>Condition: <span id="weather-condition">--</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Key Metrics and Summaries -->
        <div class="row match-height">
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white shadow-sm rounded">
              <div class="card-content ecom-card2 height-180 ">
                <h5 class="text-muted danger position-absolute p-1">Temperature Summary</h5>
                <div class="text-center pt-3">
                  <i class="ft-thermometer danger font-large-1 mb-3"></i>
                  <h3 id="temperature-summary" class="mt-1"><?= $temperatureSummary ?>°C</h3>
                  <p>Latest Temperature</p>
                  <a href="<?= base_url('charts?plot=1') ?>" class="btn btn-primary mt-3">View Detailed Charts</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white shadow-sm rounded">
              <div class="card-content ecom-card2 height-180 ">
                <h5 class="text-muted info position-absolute p-1">Humidity Summary</h5>
                <div class="text-center pt-3">
                  <i class="ft-droplet info font-large-1"></i>
                  <h3 id="humidity-summary" class="mt-1"><?= $humiditySummary ?>%</h3>
                  <p>Latest Humidity</p>
                  <a href="<?= base_url('charts?plot=1') ?>" class="btn btn-primary mt-3">View Detailed Charts</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white shadow-sm rounded">
              <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted success position-absolute p-1">NPK Levels Summary</h5>
                <div class="text-center pt-3">
                  <i class="fas fa-leaf success font-large-1"></i>
                  <h3 id="npk-summary" class="mt-1" style="font-size: 1rem;"> <!-- Smaller font size -->
                    Nitrogen: <?= $nitrogenSummary ?> <br>
                    Phosphorus: <?= $phosphorusSummary ?> <br>
                    Potassium: <?= $potassiumSummary ?>
                  </h3>
                  <p>Latest NPK Levels</p>
                  <a href="<?= base_url('nutrients') ?>" class="btn btn-primary mt-1">View Nutrient Details</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-12">
            <div class="card pull-up ecom-card-1 bg-white shadow-sm rounded">
              <div class="card-content ecom-card2 height-180 ">
                <h5 class="text-muted warning position-absolute p-1">Soil Moisture Summary</h5>
                <div class="text-center pt-3">
                  <i class="fas fa-tint warning font-large-1"></i>
                  <h3 id="soil-moisture-summary" class="mt-1"><?= $soilMoistureSummary ?></h3>
                  <p>Latest Soil Moisture</p>
                  <a href="<?= base_url('charts?plot=1') ?>" class="btn btn-primary mt-3">View Detailed Charts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Key Metrics and Summaries -->

        <!-- Plant Statistics -->
        <div class="row match-height mt-4">
          <div class="col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Environmental Measurements Summary</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content">
                <div class="card-body text-center">
                  <h5>Temperature: <span id="env-temp"><?= $temperatureSummary ?>°C</span></h5>
                  <h5>Humidity: <span id="env-humidity"><?= $humiditySummary ?>%</span></h5>
                  <h5>Soil Moisture: <span id="env-soil"><?= $soilMoistureSummary ?></span></h5>
                  <h5>Nutrient Level: <span id="env-nutrient"><?= $nutrientLevelSummary ?></span></h5>
                  <a href="<?= base_url('charts') ?>" class="btn btn-primary mt-3">View Detailed Charts</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Fertilizer Applications Summary</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content">
                <div class="card-body text-center">
                  <h5>Total Applications: <span id="fert-apps"><?= $fertilizerApplicationsSummary ?></span></h5>
                  <h5>Latest Application: <span id="fert-latest"><?= $latestFertilizerApplication ?></span></h5>
                  <a href="<?= base_url('charts') ?>" class="btn btn-primary mt-3">View Detailed Charts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Plant Statistics -->


        <!-- Recently Planted Plants and Naujan Information -->
        <div class="row match-height">
          <div class="col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recently Planted Plants</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div id="carousel-area" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <?php foreach ($recentPlantedPlants as $index => $plant): ?>
                        <li data-target="#carousel-area" data-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
                      <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <?php foreach ($recentPlantedPlants as $index => $plant): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                          <img src="<?= ($plant['image_url']) ?>" class="d-block w-100" alt="<?= $plant['plant_info']['common_name'] ?>">
                          <div class="carousel-caption d-none d-md-block">
                            <div class="overlay"></div>
                            <h5 class="text-white font-weight-bold"><?= $plant['plant_info']['common_name'] ?> (<?= $plant['plant_info']['scientific_name'] ?>)</h5>
                            <p class="text-white"><?= $plant['plant_info']['plant_desc'] ?></p>
                            <p class="text-white"><strong>Date Planted:</strong> <?= date('F d, Y', strtotime($plant['date_planted'])) ?></p>
                            <p class="text-white"><strong>Quantity Planted:</strong> <?= $plant['quantity'] ?></p>
                            <p class="text-white"><strong>Water Capacity:</strong> <?= $plant['plant_info']['water_capacity'] ?></p>
                            <p class="text-white"><strong>Soil Type:</strong> <?= $plant['plant_info']['soil_type'] ?></p>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                      <span class="la la-angle-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                      <span class="la la-angle-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Naujan Information</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <h5>Location: Naujan, Oriental Mindoro</h5>
                  <p>Naujan is a large municipality in the province of Oriental Mindoro, Philippines. It is known for its vast agricultural lands and abundant natural resources. The town is a major producer of rice, coconut, and other agricultural products, contributing significantly to the province's economy.</p>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.782581281928!2d121.2398386!3d13.2205706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bc9574cce76b5b%3A0x55258520b47f16bc!2sNaujan%2C%20Oriental%20Mindoro!5e0!3m2!1sen!2sph!4v1646681790091!5m2!1sen!2sph" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                  <ul class="list-group mt-3">
                    <li class="list-group-item"><strong>Population:</strong> Approximately 100,000 residents</li>
                    <li class="list-group-item"><strong>Main Industry:</strong> Agriculture (Rice, Coconut)</li>
                    <li class="list-group-item"><strong>Known for:</strong> Naujan Lake, one of the largest lakes in the Philippines</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Recently Planted Plants and Naujan Information -->

        <!-- Weekly Summary Report -->
        <!-- Dropdown for Time Period Selection -->
        <div class="row">
          <div class="col-12">
            <div class="card plot-select-card">
              <label for="time-period-select">Select Time Period:</label>
              <select class="form-control" id="time-period-select">
                <option value="daily">Today</option>
                <option value="weekly">This Week</option>
                <option value="monthly">This Month</option>
                <option value="yesterday">Yesterday</option>
                <option value="last-week">Last Week</option>
                <option value="last-month">Last Month</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Weekly Summary Report -->
        <div class="row match-height mt-4">
          <div class="col-xl-12 col-lg-12">
            <div class="card weekly-report">
              <div class="card-header">
                <h4 class="card-title">Summary Report</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="stat">
                    <i class="fas fa-seedling"></i>
                    <p><strong>Total Planted:</strong> <span id="planted-total"><?= $weeklyPlantedTotal ?></span></p>
                  </div>
                  <div class="stat">
                    <i class="fas fa-tractor"></i>
                    <p><strong>Total Harvested:</strong> <span id="harvested-total"><?= $weeklyHarvestedTotal ?></span></p>
                  </div>
                  <div class="stat">
                    <i class="fas fa-fill-drip"></i>
                    <p><strong>Total Fertilizer Applications:</strong> <span id="fertilizer-total"><?= $weeklyFertilizerApplications ?></span></p>
                  </div>
                  <div class="stat">
                    <i class="fas fa-thermometer-half"></i>
                    <p><strong>Average Temperature:</strong> <span id="avg-temp"><?= $weeklyAverageTemp ?>°C</span></p>
                  </div>
                  <div class="stat">
                    <i class="fas fa-water"></i>
                    <p><strong>Average Humidity:</strong> <span id="avg-humidity"><?= $weeklyAverageHumidity ?>%</span></p>
                  </div>
                  <div class="stat">
                    <i class="fas fa-tint"></i>
                    <p><strong>Average Soil Moisture:</strong> <span id="avg-soil-moisture"><?= $weeklyAverageSoilMoisture ?></span></p>
                  </div>
                  <div class="stat">
                    <i class="fas fa-leaf"></i>
                    <p><strong>Average Nitrogen:</strong> <span id="avg-nitrogen"><?= $weeklyAverageNitrogen ?></span></p>
                    <p><strong>Average Phosphorus:</strong> <span id="avg-phosphorus"><?= $weeklyAveragePhosphorus ?></span></p>
                    <p><strong>Average Potassium:</strong> <span id="avg-potassium"><?= $weeklyAveragePotassium ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Add JavaScript to Handle Time Period Changes -->
        <script>
          document.getElementById('time-period-select').addEventListener('change', function() {
            let selectedPeriod = this.value;

            let totals = {
              'daily': {
                'planted': <?= $dailyPlantedTotal ?>,
                'harvested': <?= $dailyHarvestedTotal ?>,
                'fertilizer': <?= $dailyFertilizerApplications ?>,
                'avgTemp': <?= json_encode($dailyAverageTemp) ?>,
                'avgHumidity': <?= json_encode($dailyAverageHumidity) ?>,
                'avgSoilMoisture': <?= json_encode($dailyAverageSoilMoisture) ?>,
                'avgNitrogen': <?= json_encode($dailyAverageNitrogen) ?>,
                'avgPhosphorus': <?= json_encode($dailyAveragePhosphorus) ?>,
                'avgPotassium': <?= json_encode($dailyAveragePotassium) ?>,
              },
              'weekly': {
                'planted': <?= $weeklyPlantedTotal ?>,
                'harvested': <?= $weeklyHarvestedTotal ?>,
                'fertilizer': <?= $weeklyFertilizerApplications ?>,
                'avgTemp': <?= json_encode($weeklyAverageTemp) ?>,
                'avgHumidity': <?= json_encode($weeklyAverageHumidity) ?>,
                'avgSoilMoisture': <?= json_encode($weeklyAverageSoilMoisture) ?>,
                'avgNitrogen': <?= json_encode($weeklyAverageNitrogen) ?>,
                'avgPhosphorus': <?= json_encode($weeklyAveragePhosphorus) ?>,
                'avgPotassium': <?= json_encode($weeklyAveragePotassium) ?>,
              },
              'monthly': {
                'planted': <?= $monthlyPlantedTotal ?>,
                'harvested': <?= $monthlyHarvestedTotal ?>,
                'fertilizer': <?= $monthlyFertilizerApplications ?>,
                'avgTemp': <?= json_encode($monthlyAverageTemp) ?>,
                'avgHumidity': <?= json_encode($monthlyAverageHumidity) ?>,
                'avgSoilMoisture': <?= json_encode($monthlyAverageSoilMoisture) ?>,
                'avgNitrogen': <?= json_encode($monthlyAverageNitrogen) ?>,
                'avgPhosphorus': <?= json_encode($monthlyAveragePhosphorus) ?>,
                'avgPotassium': <?= json_encode($monthlyAveragePotassium) ?>,
              },
              'yesterday': {
                'planted': <?= $yesterdayPlantedTotal ?>,
                'harvested': <?= $yesterdayHarvestedTotal ?>,
                'fertilizer': <?= $yesterdayFertilizerApplications ?>,
                'avgTemp': <?= json_encode($yesterdayAverageTemp) ?>,
                'avgHumidity': <?= json_encode($yesterdayAverageHumidity) ?>,
                'avgSoilMoisture': <?= json_encode($yesterdayAverageSoilMoisture) ?>,
                'avgNitrogen': <?= json_encode($yesterdayAverageNitrogen) ?>,
                'avgPhosphorus': <?= json_encode($yesterdayAveragePhosphorus) ?>,
                'avgPotassium': <?= json_encode($yesterdayAveragePotassium) ?>,
              },
              'last-week': {
                'planted': <?= $lastWeekPlantedTotal ?>,
                'harvested': <?= $lastWeekHarvestedTotal ?>,
                'fertilizer': <?= $lastWeekFertilizerApplications ?>,
                'avgTemp': <?= json_encode($lastWeekAverageTemp) ?>,
                'avgHumidity': <?= json_encode($lastWeekAverageHumidity) ?>,
                'avgSoilMoisture': <?= json_encode($lastWeekAverageSoilMoisture) ?>,
                'avgNitrogen': <?= json_encode($lastWeekAverageNitrogen) ?>,
                'avgPhosphorus': <?= json_encode($lastWeekAveragePhosphorus) ?>,
                'avgPotassium': <?= json_encode($lastWeekAveragePotassium) ?>,
              },
              'last-month': {
                'planted': <?= $lastMonthPlantedTotal ?>,
                'harvested': <?= $lastMonthHarvestedTotal ?>,
                'fertilizer': <?= $lastMonthFertilizerApplications ?>,
                'avgTemp': <?= json_encode($lastMonthAverageTemp) ?>,
                'avgHumidity': <?= json_encode($lastMonthAverageHumidity) ?>,
                'avgSoilMoisture': <?= json_encode($lastMonthAverageSoilMoisture) ?>,
                'avgNitrogen': <?= json_encode($lastMonthAverageNitrogen) ?>,
                'avgPhosphorus': <?= json_encode($lastMonthAveragePhosphorus) ?>,
                'avgPotassium': <?= json_encode($lastMonthAveragePotassium) ?>,
              },
            };

            let selectedTotals = totals[selectedPeriod];

            document.getElementById('planted-total').innerText = selectedTotals.planted;
            document.getElementById('harvested-total').innerText = selectedTotals.harvested;
            document.getElementById('fertilizer-total').innerText = selectedTotals.fertilizer;
            document.getElementById('avg-temp').innerText = selectedTotals.avgTemp + '°C';
            document.getElementById('avg-humidity').innerText = selectedTotals.avgHumidity + '%';
            document.getElementById('avg-soil-moisture').innerText = selectedTotals.avgSoilMoisture;
            document.getElementById('avg-nitrogen').innerText = selectedTotals.avgNitrogen;
            document.getElementById('avg-phosphorus').innerText = selectedTotals.avgPhosphorus;
            document.getElementById('avg-potassium').innerText = selectedTotals.avgPotassium;
          });
        </script>



      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
      <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
      </ul>
    </div>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="<?= base_url('admin/theme-assets/vendors/js/vendors.min.js'); ?>" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?= base_url('admin/theme-assets/vendors/js/charts/chartist.min.js'); ?>" type="

text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CHAMELEON JS-->
  <script src="<?= base_url('admin/theme-assets/js/core/app-menu-lite.js'); ?>" type="text/javascript"></script>
  <script src="<?= base_url('admin/theme-assets/js/core/app-lite.js'); ?>" type="text/javascript"></script>
  <!-- END CHAMELEON JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?= base_url('admin/theme-assets/js/scripts/pages/dashboard-lite.js'); ?>" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script>
    // Script to handle plot selection and update the data dynamically
    const measurements = <?= json_encode($groupedMeasurements); ?>;

    $('#plot-select').on('change', function() {
      var selectedPlot = $(this).val();
      updateMetrics(selectedPlot);
    });

    function updateMetrics(plotId) {
      let filteredData = measurements[plotId] || measurements['all'];

      if (filteredData && filteredData.length) {
        let latestData = filteredData[filteredData.length - 1];

        $('#temperature-summary').text(latestData.temperature + '°C');
        $('#humidity-summary').text(latestData.humidity + '%');
        $('#soil-moisture-summary').text(latestData.soil_moisture);
        $('#npk-summary').html(`
      Nitrogen: ${latestData.nitrogen_level}<br>
      Phosphorus: ${latestData.phosphorus_level}<br>
      Potassium: ${latestData.potassium_level}
    `);
        $('#env-temp').text(latestData.temperature + '°C');
        $('#env-humidity').text(latestData.humidity + '%');
        $('#env-soil').text(latestData.soil_moisture);
        $('#env-nutrient').text(latestData.nutrient_level);
      }
    }

    // Initialize with default values for "All Plots"
    updateMetrics('all');

    // Replace with your actual API key
    const apiKey = '82f9b724f5c0cbd80542726a143cf509';

    // Construct the URL for Naujan, Oriental Mindoro, Philippines
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Naujan,PH&units=metric&appid=${apiKey}`;

    // Fetch the weather data
    function fetchWeather() {
      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          console.log(data);
          document.getElementById('weather-temp').innerText = `${data.main.temp}°C`;
          document.getElementById('weather-humidity').innerText = `${data.main.humidity}%`;
          document.getElementById('weather-wind').innerText = `${data.wind.speed} km/h`;
          document.getElementById('weather-condition').innerText = data.weather[0].description;
        })
        .catch(error => console.error('Error fetching weather data:', error));
    }

    // Call the function to fetch weather data
    fetchWeather();
  </script>
</body>

</html>