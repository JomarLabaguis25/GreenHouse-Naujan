<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Bootstrap Cards - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('naujanLogo.png') ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

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
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="admin/theme-assets/images/backgrounds/02.jpg">
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
                <li class=" nav-item"><a href="dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class="nav-item" id="charts-dropdown" style="position: relative;"><a href="charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
                </li>
                <li class=" nav-item"><a href="tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
                </li>
                <li class=" nav-item"><a href="cards"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Drought Monitoring</span></a>
                </li>
                <li class=" nav-item"><a href="nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
                <li class=" active"><a href="sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
                </li>
                <li class=" nav-item"><a href="MeasurementHistory"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Measurement H</span></a>
                </li>
                </li>
                <li class=" nav-item"><a href="History"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Plant History</span></a>
                </li>
                <li class=" nav-item"><a href="AppliedFertilizer"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Applied Fertilizer</span></a>
                </li>
                <li class=" nav-item"><a href="Reports"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Over All Reports</span></a>
                </li>
                <!-- <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a> -->
                </li>
            </ul>
        </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"></a>
        <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Sensors and Microcontrollers</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dash">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Cards
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Header footer section start -->
                <section id="header-footer">
                    <div class="row match-height">

                        <!-- Wemos D1 R1 Board -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Microcontroller</h4>
                                    <h6 class="card-subtitle text-muted">Wemos D1 R1 Board</h6>
                                </div>
                                <a href="#wemosModal" data-toggle="modal">
                                    <img class="" src="admin/theme-assets/images/sensors/wemos.jpg" alt="Wemos D1 R1 Board Image">
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $sensors[0]['wemos']; ?></p>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                </div>
                            </div>
                        </div>
                        <!-- Temperature and Humidity Sensor -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sensor</h4>
                                    <h6 class="card-subtitle text-muted">Temperature and Humidity</h6>
                                </div>
                                <a href="#sensorModal" data-toggle="modal">
                                    <img class="" src="admin/theme-assets/images/sensors/temp.jpg" alt="Temperature and Humidity Sensor Image">
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $sensors[0]['temp']; ?></p>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                </div>
                            </div>
                        </div>

                        <!-- LCD Display -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Monitor</h4>
                                    <h6 class="card-subtitle text-muted">LCD Display</h6>
                                </div>
                                <a href="#exampleModal" data-toggle="modal">
                                    <img class="" src="admin/theme-assets/images/sensors/lcd.jpg" alt="LCD Display Image">
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $sensors[0]['lcd']; ?></p>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                </div>
                            </div>
                        </div>
                        <!-- Orange Pi Board -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Microcontroller</h4>
                                    <h6 class="card-subtitle text-muted">Orange Pi Board</h6>
                                </div>
                                <a href="#orangePiModal" data-toggle="modal">
                                    <img class="" src="admin/theme-assets/images/sensors/orange_pi.jpg" alt="Orange Pi Board Image">
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $sensors[0]['orange']; ?></p>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                </div>
                            </div>
                        </div>

                        <!-- UV Light Sensor -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sensor</h4>
                                    <h6 class="card-subtitle text-muted">UV Light Sensor</h6>
                                </div>
                                <a href="#uvSensorModal" data-toggle="modal">
                                    <img class="" src="admin/theme-assets/images/sensors/uv_sensor.jpg" alt="UV Light Sensor Image">
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $sensors[0]['uv']; ?></p>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                </div>
                            </div>
                        </div>

                        <!-- Soil Moisture Sensor -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sensor</h4>
                                    <h6 class="card-subtitle text-muted">Soil Moisture</h6>
                                </div>
                                <a href="#soilMoistureModal" data-toggle="modal">
                                    <img src="admin/theme-assets/images/sensors/soil_moisture.jpg" alt="Soil Moisture Sensor Image">
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $sensors[0]['soil']; ?></p>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5text-muted">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Wemos D1 R1 Board Modal -->
                <div id="wemosModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Wemos D1 R1 Board Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="admin/theme-assets/images/sensors/wemos.jpg" alt="Wemos D1 R1 Board Image">
                                <!-- Display sensor data -->
                                <h5 class="modal-title">Physical & Software Maintenance</h5>
                                <?php foreach ($sensors as $sensor): ?>
                                    <p><?php echo $sensor['wemosPhysicalInfo']; ?></p>
                                    <br>
                                    <p><?php echo $sensor['wemosSoftwareInfo']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orange Pi Board Modal -->
                <div id="orangePiModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Orange Pi Board Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="admin/theme-assets/images/sensors/orange_pi.jpg" alt="Orange Pi Board Image">
                                <!-- Display sensor data -->
                                <h5 class="modal-title">Physical & Software Maintenance</h5>
                                <?php foreach ($sensors as $sensor): ?>
                                    <p><?php echo $sensor['orangePhysicalInfo']; ?></p>
                                    <br>
                                    <p><?php echo $sensor['orangeSoftwareInfo']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UV Light Sensor Modal -->
                <div id="uvSensorModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">UV Light Sensor Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="admin/theme-assets/images/sensors/uv_sensor.jpg" alt="UV Light Sensor Image">
                                <!-- Display sensor data -->
                                <h5 class="modal-title">Physical & Software Maintenance</h5>
                                <?php foreach ($sensors as $sensor): ?>
                                    <p><?php echo $sensor['uvPhysicalInfo']; ?></p>
                                    <br>
                                    <p><?php echo $sensor['uvSoftwareInfo']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soil Moisture Sensor Modal -->
                <div id="soilMoistureModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Soil Moisture Sensor Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="admin/theme-assets/images/sensors/soil_moisture.jpg" alt="Soil Moisture Sensor Image">
                                <!-- Display sensor data -->
                                <h5 class="modal-title">Physical & Software Maintenance</h5>
                                <?php foreach ($sensors as $sensor): ?>
                                    <p><?php echo $sensor['soilPhysicalInfo']; ?></p>
                                    <br>
                                    <p><?php echo $sensor['soilSoftwareInfo']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Temperature and Humidity Sensor Modal -->
                <div id="sensorModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Temperature and Humidity Sensor Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="admin/theme-assets/images/sensors/temp.jpg" alt="Temperature and Humidity Sensor Image">
                                <!-- Display sensor data -->
                                <h5 class="modal-title">Physical & Software Maintenance</h5>
                                <?php foreach ($sensors as $sensor): ?>
                                    <p><?php echo $sensor['tempPhysicalInfo']; ?></p>
                                    <br>
                                    <p><?php echo $sensor['tempSoftwareInfo']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LCD Display Modal -->
                <div id="exampleModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">LCD Display Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="admin/theme-assets/images/sensors/lcd.jpg" alt="LCD Display Image">
                                <!-- Display sensor data -->
                                <h5 class="modal-title">Physical & Software Maintenance</h5>
                                <?php foreach ($sensors as $sensor): ?>
                                    <p><?php echo $sensor['lcdPhysicalInfo']; ?></p>
                                    <br>
                                    <p><?php echo $sensor['lcdSoftwareInfo']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header footer section End -->

            </div>
            <!-- ////////////////////////////////////////////////////////////////////////////-->


            <footer class="footer footer-static footer-light navbar-border navbar-shadow">
                <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
                    <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
                        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
                        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
                    </ul>
                </div>
            </footer>

            <!-- BEGIN VENDOR JS-->
            <script src="admin/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
            <!-- BEGIN VENDOR JS-->
            <!-- BEGIN PAGE VENDOR JS-->
            <!-- END PAGE VENDOR JS-->
            <!-- BEGIN CHAMELEON  JS-->
            <script src="admin/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
            <script src="admin/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
            <!-- END CHAMELEON  JS-->
            <!-- BEGIN PAGE LEVEL JS-->
            <!-- END PAGE LEVEL JS-->
</body>

</html>