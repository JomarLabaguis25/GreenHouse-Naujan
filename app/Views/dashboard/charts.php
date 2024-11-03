<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Naujan GreenHouse monitoring system">
    <meta name="author" content="Your Company">
    <title>Charts - Naujan GreenHouse</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('naujanLogo.png') ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/colors/palette-gradient.css">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Custom styles */
        .card-title {
            font-size: 1.2rem;
        }

        .card-body h5 {
            font-size: 1rem;
        }

        .card-body h3 {
            font-size: 1.5rem;
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

        /* NPK Section Grouping */
        .npk-group {
            border-top: 1px solid #ddd;
            margin-top: 10px;
            padding-top: 10px;
        }

        .npk-level {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="collapse navbar-collapse show" id="navbar-mobile">
                                                <ul class="nav navbar-nav mr-auto float-left">
                                                    <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                                                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="admin/theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="dash"><img class="brand-logo" alt="Chameleon admin logo" src="admin/theme-assets/images/logo/naujan.png" />
                        <h3 class="brand-text">Naujan GreenHouse</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a href="dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class="active" id="charts-dropdown" style="position: relative;"><a href="charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
                </li>
                <li class="nav-item"><a href="tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
                </li>
                <li class="nave-item"><a href="cards"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Drought Monitoring</span></a>
                </li>
                <li class="nav-item"><a href="nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
                <li class="nav-item"><a href="sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
                </li>
                <li class=" nav-item"><a href="MeasurementHistory"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Measurement H</span></a>
                </li>
                </li>
                <li class="nav-item"><a href="History"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Plant History</span></a>
                </li>
                <li class="nav-item"><a href="AppliedFertilizer"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Applied Fertilizer</span></a>
                </li>
                <li class="nav-item"><a href="Reports"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Over All Reports</span></a>
                </li>
            </ul>
        </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"></a>
        <div class="navigation-background"></div>
    </div>

    <!-- Content -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">

                    <h3 class="content-header-title">Analytics</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dash">Home</a></li>
                                <li class="breadcrumb-item active">Charts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- NPK Guide Section -->
                <section id="npk-guide">
                    <div class="row">
                        <div class="col-12 mt-5">
                            <h4 class="text-center">NPK Guidelines</h4>
                            <p class="text-center">Nitrogen > 40: Good | Phosphorus > 20: Acceptable | Potassium > 30: Good</p>
                        </div>
                    </div>
                </section>

                <!-- Live Data Section -->
                <section id="live-data">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center">Live Data for Today (<?= date('Y-m-d'); ?>)</h4>
                        </div>
                    </div>
                    <div class="row" id="live-data-cards">
                        <?php foreach ($liveData as $data) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Plot <?= $data['plot_id']; ?></h4>
                                        <div class="media-body">
                                            <h5 style="color: #FF5733;">
                                                <i class="fas fa-thermometer-half"></i> Temperature
                                            </h5>
                                            <h3 id="temperature-<?= $data['plot_id']; ?>" style="color: #FF5733;"><?= $data['temperature']; ?>°C</h3>
                                        </div>
                                        <div class="media-body">
                                            <h5 style="color: #33C3FF;">
                                                <i class="fas fa-tint"></i> Humidity
                                            </h5>
                                            <h3 id="humidity-<?= $data['plot_id']; ?>" style="color: #33C3FF;"><?= $data['humidity']; ?>%</h3>
                                        </div>
                                        <div class="media-body">
                                            <h5 style="color: #33FF57;">
                                                <i class="fas fa-water"></i> Soil Moisture
                                            </h5>
                                            <h3 id="soil-moisture-<?= $data['plot_id']; ?>" style="color: #33FF57;"><?= $data['soil_moisture']; ?></h3>
                                        </div>
                                        <!-- NPK Group -->
                                        <div class="media-body npk-group">
                                            <h5 id="nitrogen-<?= $data['plot_id']; ?>" class="npk-level">Nitrogen: <?= $data['nitrogen_level']; ?></h5>
                                            <h5 id="phosphorus-<?= $data['plot_id']; ?>" class="npk-level">Phosphorus: <?= $data['phosphorus_level']; ?></h5>
                                            <h5 id="potassium-<?= $data['plot_id']; ?>" class="npk-level">Potassium: <?= $data['potassium_level']; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- Bar charts section -->
                <section id="chartjs-bar-charts">
                    <section>
                        <!-- Combined Soil Measurements Chart -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Soil Measurements</h4>
                                        <select id="plot-filter" class="form-control" style="max-width: 200px; margin-top: 10px;">
                                            <option value="all">All Plots</option>
                                            <?php foreach ($distinctPlots as $plot) : ?>
                                                <option value="<?= $plot['plot_id']; ?>">Plot <?= $plot['plot_id']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body chartjs">
                                            <div class="height-500">
                                                <canvas id="combinedChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <script>
                        let combinedChart;
                        const soilMeasurementsData = <?= json_encode($soilMeasurementsData); ?>;

                        function renderChart(data) {
                            const measurementDates = data.map(entry => entry.measurement_date);
                            const temperatures = data.map(entry => entry.temperature);
                            const humidities = data.map(entry => entry.humidity);
                            const soilMoistures = data.map(entry => entry.soil_moisture);
                            const nitrogenLevels = data.map(entry => entry.nitrogen_level);
                            const phosphorusLevels = data.map(entry => entry.phosphorus_level);
                            const potassiumLevels = data.map(entry => entry.potassium_level);

                            if (combinedChart) combinedChart.destroy();

                            const ctx = document.getElementById('combinedChart').getContext('2d');
                            combinedChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: measurementDates,
                                    datasets: [{
                                            label: 'Temperature',
                                            data: temperatures,
                                            borderColor: 'blue',
                                            fill: false
                                        },
                                        {
                                            label: 'Humidity',
                                            data: humidities,
                                            borderColor: 'green',
                                            fill: false
                                        },
                                        {
                                            label: 'Soil Moisture',
                                            data: soilMoistures,
                                            borderColor: 'purple',
                                            fill: false
                                        },
                                        {
                                            label: 'Nitrogen',
                                            data: nitrogenLevels,
                                            borderColor: 'red',
                                            fill: false
                                        },
                                        {
                                            label: 'Phosphorus',
                                            data: phosphorusLevels,
                                            borderColor: 'yellow',
                                            fill: false
                                        },
                                        {
                                            label: 'Potassium',
                                            data: potassiumLevels,
                                            borderColor: 'pink',
                                            fill: false
                                        }
                                    ]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    scales: {
                                        x: {
                                            display: true,
                                            title: {
                                                display: true,
                                                text: 'Measurement Date'
                                            }
                                        },
                                        y: {
                                            display: true,
                                            title: {
                                                display: true,
                                                text: 'Measurement Values'
                                            }
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Soil Measurements'
                                    }
                                }
                            });
                            combinedChart.update();
                        }

                        window.onload = function() {
                            renderChart(soilMeasurementsData);
                        };

                        document.getElementById('plot-filter').addEventListener('change', function() {
                            const selectedPlot = this.value;
                            const filteredData = selectedPlot === 'all' ? soilMeasurementsData : soilMeasurementsData.filter(entry => entry.plot_id == selectedPlot);
                            renderChart(filteredData);
                        });

                        // Function to update live data cards
                        function updateLiveDataCard(data) {
                            // Update temperature, humidity, soil moisture
                            document.getElementById(`temperature-${data.plot_id}`).innerText = `${data.temperature}°C`;
                            document.getElementById(`humidity-${data.plot_id}`).innerText = `${data.humidity}%`;
                            document.getElementById(`soil-moisture-${data.plot_id}`).innerText = `${data.soil_moisture}`;

                            // Update Nitrogen, Phosphorus, Potassium
                            document.getElementById(`nitrogen-${data.plot_id}`).innerText = `Nitrogen: ${data.nitrogen_level}`;
                            document.getElementById(`phosphorus-${data.plot_id}`).innerText = `Phosphorus: ${data.phosphorus_level}`;
                            document.getElementById(`potassium-${data.plot_id}`).innerText = `Potassium: ${data.potassium_level}`;
                        }

                        // Pusher setup
                        var pusher = new Pusher('d6df6d2a4ee7546463fc', {
                            cluster: 'ap1'
                        });

                        var channel = pusher.subscribe('environmental-channel');
                        channel.bind('new-measurement', function(data) {
                            soilMeasurementsData.push(data);
                            renderChart(soilMeasurementsData);
                            updateLiveDataCard(data);
                        });
                    </script>
                </section>
            </div>
            <section id="chartjs-pie-charts">
                <div class="row">
                    <!-- Simple Pie Chart -->
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Number of Planted Plants</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="height-400">
                                        <canvas id="pie-chart"></canvas>
                                    </div>
                                    <script>
                                        var plantsData = <?php echo json_encode($plantsData); ?>;
                                        var ctx = document.getElementById('pie-chart').getContext('2d');
                                        var myPieChart = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                                labels: plantsData.map(data => data.PlantName),
                                                datasets: [{
                                                    label: 'Number of Plants',
                                                    data: plantsData.map(data => data.plant_count),
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(255, 99, 132, 1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)',
                                                        'rgba(153, 102, 255, 1)',
                                                        'rgba(255, 159, 64, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                responsive: true,
                                                maintainAspectRatio: false,
                                                legend: {
                                                    display: true,
                                                    position: 'right',
                                                },
                                            }
                                        });
                                    </script>
                                    <p>Number of planted plants: <?php echo array_sum(array_column($plantsData, 'plant_count')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simple Doughnut Chart -->
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Number of Harvested Plants</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="height-400">
                                        <canvas id="doughnut-chart"></canvas>
                                    </div>
                                    <script>
                                        var harvestedPlantsData = <?php echo json_encode($harvestedPlantsData); ?>;
                                        var ctx = document.getElementById('doughnut-chart').getContext('2d');
                                        var myDoughnutChart = new Chart(ctx, {
                                            type: 'doughnut',
                                            data: {
                                                labels: harvestedPlantsData.map(data => data.PlantName),
                                                datasets: [{
                                                    label: 'Number of Harvested Plants',
                                                    data: harvestedPlantsData.map(data => data.plant_count),
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(255, 99, 132, 1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)',
                                                        'rgba(153, 102, 255, 1)',
                                                        'rgba(255, 159, 64, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                responsive: true,
                                                maintainAspectRatio: false,
                                                legend: {
                                                    display: true,
                                                    position: 'right',
                                                },
                                            }
                                        });
                                    </script>
                                    <p>Number of harvested plants: <?php echo array_sum(array_column($harvestedPlantsData, 'plant_count')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Pie charts section end -->
        </div>

    </div>
</body>

</html>