<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <link rel="icon" type="image/x-icon" href="<?= base_url('naujanLogo.png') ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/vendors.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/app-lite.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/core/menu/menu-types/vertical-menu.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('admin/theme-assets/css/core/colors/palette-gradient.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text" placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read </a></div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= base_url('admin/theme-assets/images/portrait/small/avatar-s-19.png'); ?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?= base_url('admin/theme-assets/images/portrait/small/avatar-s-19.png'); ?>" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="<?= base_url('admin/theme-assets/images/backgrounds/02.jpg'); ?>">
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
                <li class="nav-item"><a href="<?= base_url('dash'); ?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
                <li class="nav-item"><a href="<?= base_url('charts'); ?>"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a></li>
                <li class="nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
                </li>
                <li class="nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Drought Monitoring</span></a></li>
                <li class="active"><a href="<?= base_url('nutrients'); ?>"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a></li>
                <li class="nav-item"><a href="<?= base_url('sensors'); ?>"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a></li>
                <li class=" nav-item"><a href="/MeasurementHistory"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Measurement H</span></a>
                </li>
                <li class="nav-item"><a href="<?= base_url('History'); ?>"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Plant History</span></a></li>
                <li class="nav-item"><a href="<?= base_url('AppliedFertilizer'); ?>"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Applied Fertilizer</span></a></li>
                <li class="nav-item"><a href="<?= base_url('Reports'); ?>"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Over All Reports</span></a></li>
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
                    <h3 class="content-header-title">NPK Monitoring for <?= $plot['plot_name']; ?></h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <button onclick="goBack()" class="btn btn-primary float-md-right">Back</button>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card text-center ">
                            <img class="img-fluid  w-45 pt-3 mx-auto d-block" src="<?= base_url($plot['image']); ?>" alt="Plot image">
                            <div class="card-body">
                                <h4 class="card-title"><?= $plot['plot_name']; ?></h4>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Morning NPK Data -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5>Morning NPK Data</h5>
                                <div>
                                    <canvas id="morningChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Afternoon NPK Data -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5>Afternoon NPK Data</h5>
                                <div>
                                    <canvas id="afternoonChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }

        // Morning NPK Chart
        var morningData = {
            labels: <?= json_encode($morning_labels); ?>,
            datasets: [{
                label: "Nitrogen",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                data: <?= json_encode($morning_nitrogen); ?>,
                fill: true
            }, {
                label: "Phosphorus",
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderColor: "rgba(75, 192, 192, 1)",
                data: <?= json_encode($morning_phosphorus); ?>,
                fill: true
            }, {
                label: "Potassium",
                backgroundColor: "rgba(255, 206, 86, 0.2)",
                borderColor: "rgba(255, 206, 86, 1)",
                data: <?= json_encode($morning_potassium); ?>,
                fill: true
            }]
        };

        // Afternoon NPK Chart
        var afternoonData = {
            labels: <?= json_encode($afternoon_labels); ?>,
            datasets: [{
                label: "Nitrogen",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                data: <?= json_encode($afternoon_nitrogen); ?>,
                fill: true
            }, {
                label: "Phosphorus",
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderColor: "rgba(75, 192, 192, 1)",
                data: <?= json_encode($afternoon_phosphorus); ?>,
                fill: true
            }, {
                label: "Potassium",
                backgroundColor: "rgba(255, 206, 86, 0.2)",
                borderColor: "rgba(255, 206, 86, 1)",
                data: <?= json_encode($afternoon_potassium); ?>,
                fill: true
            }]
        };

        // Morning Chart
        var morningChartCtx = document.getElementById('morningChart').getContext('2d');
        var morningChart = new Chart(morningChartCtx, {
            type: 'line',
            data: morningData,
            options: {
                responsive: true,
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Time'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'NPK Levels'
                        }
                    }]
                }
            }
        });

        // Afternoon Chart
        var afternoonChartCtx = document.getElementById('afternoonChart').getContext('2d');
        var afternoonChart = new Chart(afternoonChartCtx, {
            type: 'line',
            data: afternoonData,
            options: {
                responsive: true,
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Time'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'NPK Levels'
                        }
                    }]
                }
            }
        });
    </script>

</body>

</html>