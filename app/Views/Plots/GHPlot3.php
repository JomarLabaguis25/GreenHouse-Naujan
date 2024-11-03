<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <link rel="apple-touch-icon" href="admin/theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="admin/theme-assets/images/ico/favicon.ico">
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                      <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
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
          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
            </div>
          </li>
          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="admin/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="admin/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
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


<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="admin/theme-assets/images/backgrounds/02.jpg">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">       
    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="admin/theme-assets/images/logo/naujan.png"/>
              <h3 class="brand-text">Naujan GreenHouse</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
    </ul>
  </div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item"><a href="dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
      </li>
      <li class="nav-item" id="charts-dropdown" style="position: relative;"><a href="charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
      </li>
      <li class=" active"><a href=""><i class="ft-layers"></i><span class="menu-title" data-i18n="">Drought Monitoring</span></a>
      </li>
      <li class=" nav-item"><a href="nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
      <li class=" nav-item"><a href="sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
      </li>
      </li>
      <li class=" nav-item"><a href="typography"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
      </li>
      <li class=" nav-item"><a href="tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
      </li>
      <li class=" nav-item"><a href="form-elements"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a>
      </li>
      <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
      </li>
    </ul>
  </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank">Download PRO!</a>
  <div class="navigation-background"></div>
</div>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Plant Plots Drought Monitoring</h3>
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
    <div class="content-body"><!-- ../../../admin/theme-assets/images/carousel/22.jpg -->
     <!-- Line Chart -->
     <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="float: left;">GreenHouse Plot 3</h4>
                <div class="heading-elements" style="float: right;">
                        <button onclick="goBack()" class="btn btn-primary">Back</button>
                    </div>
                    <div style="clear: both;"></div> <!-- Clear float -->
                </div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <img class="" src="admin/theme-assets/images/plots/plot8.jpg" alt="Card image cap"><div style="text-align: right;">
                <br>
                <a href="#" class="btn btn-primary" style="font-size: 1.1rem; padding: 0.4rem 0.8rem;">Edit</a>
    <a href="#" class="btn btn-danger" style="font-size: 1.1rem; padding: 0.4rem 0.8rem;">Delete</a>
</div>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div id="morningChartContainer">
                    <canvas id="morningChart" width="400" height="200"></canvas>
                </div>
                <div id="afternoonChartContainer">
                    <canvas id="afternoonChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
    var morningData = {
    labels: ["6:00", "7:00", "8:00", "9:00", "10:00", "11:00"],
    datasets: [{
        label: "Too Wet",
        borderColor: "#FF6384",
        data: [15, 20, 35, 10, 25, 30],
        fill: false
    }, {
        label: "Too Dry",
        borderColor: "#36A2EB",
        data: [10, 15, 20, 5, 10, 15],
        fill: false
    }, {
        label: "Average",
        borderColor: "#FFCE56",
data: [12, 17, 22, 12, 17, 22],
        fill: false
    }]
};

var afternoonData = {
    labels: ["12:00", "1:00", "2:00", "3:00", "4:00", "5:00"],
    datasets: [{
        label: "Too Wet",
        borderColor: "#FF6384",
        data: [10, 25, 30, 15, 20, 35],
        fill: false
    }, {
        label: "Too Dry",
        borderColor: "#36A2EB",
        data: [5, 10, 15, 10, 15, 20],
        fill: false
    }, {
        label: "Average",
        borderColor: "#FFCE56",
        data: [12, 17, 22, 12, 17, 22],
        fill: false
    }]
};

// Morning Chart
var morningChartCtx = document.getElementById('morningChart').getContext('2d');
var morningChart = new Chart(morningChartCtx, {
    type: 'line',
    data: morningData,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Time'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Drought Level'
                }
            }
        },
        tooltips: {
            callbacks: {
                title: function(tooltipItem, data) {
                    return data.labels[tooltipItem[0].index];
                },
                label: function(tooltipItem, data) {
                    var label = data.datasets[tooltipItem.datasetIndex].label;
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    var indicator = (value < 20) ? 'Too Dry' : (value > 30) ? 'Too Wet' : 'Average';
                    return label + ': ' + value + ' (' + indicator + ')';
                }
            }
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
        maintainAspectRatio: false,
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Time'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Drought Level'
                }
            }
        },
        tooltips: {
            callbacks: {
                title: function(tooltipItem, data) {
                    return data.labels[tooltipItem[0].index];
                },
                label: function(tooltipItem, data) {
                    var label = data.datasets[tooltipItem.datasetIndex].label;
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    var indicator = (value < 20) ? 'Too Dry' : (value > 30) ? 'Too Wet' : 'Average';
                    return label + ': ' + value + ' (' + indicator + ')';
                }
            }
        }
    }
});
</script>


</body>
  </html>