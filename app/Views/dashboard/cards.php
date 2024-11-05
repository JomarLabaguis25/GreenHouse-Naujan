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
        <li class="nav-item"><a href="/dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="nav-item" id="charts-dropdown" style="position: relative;"><a href="/charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
        </li>
        <li class="nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
        </li>
        <li class="active"><a href="/cards"><i class="ft-layers"></i><span class="menu-title" data-i18n="">DM</span></a>
        </li>
        <li class="nav-item"><a href="/nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
        <li class="nav-item"><a href="/sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
        </li>
        <li class=" nav-item"><a href="/MeasurementHistory"><i class="ft-bold"></i><span class="menu-title" data-i18n=""><span>Measurement H</span></a>
        </li>
        </li>
        <li class="nav-item"><a href="/History"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Plant History</span></a>
        </li>
        <li class="nav-item"><a href="/AppliedFertilizer"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Applied Fertilizer</span></a>
        </li>
        <li class="nav-item"><a href="/Reports"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Over All Reports</span></a>
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
          <h3 class="content-header-title">Plant Plots Drought Monitoring</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dash">Home</a>
                </li>
                <li class="breadcrumb-item active">Drought Monitoring
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">

        <!-- Dynamically generated plots start -->
        <section id="header-footer">
          <div class="row match-height">
            <?php foreach ($plots as $plot) : ?>
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="float: left;"><?= $plot['plot_name']; ?></h4>
                    <div class="heading-elements" style="float: right;">
                      <button class="btn btn-primary view-button" onclick="window.location.href='plot/droughtMonitoring/<?= $plot['id']; ?>';">View</button>
                    </div>
                    <div style="clear: both;"></div> <!-- Clear float -->
                  </div>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <img class="" src="<?= $plot['image']; ?>" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><?= $plot['description']; ?></p>
                  </div>
                  <div id="plot<?= $plot['id']; ?>"></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
        <!-- Dynamically generated plots end -->

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->



  <script src="admin/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="admin/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
  <script src="admin/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
</body>

</html>