<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp & dashboard HTML template with a large number of components, elegant design, clean and organized code.">
  <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Greenhouse Naujan</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('naujanLogo.png') ?>">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/app-lite.css">
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  <!-- Fixed Navbar -->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
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
    <li class="active"><a href="/dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
    <li class="nav-item" id="charts-dropdown" style="position: relative;"><a href="/charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a></li>
    <li class="nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a></li>
    <li class="nav-item" style="display: flex; align-items: center; justify-content: space-between;"><a href="/cards" style="display: block; width: 100%;"><i class="ft-cloud-drizzle"></i><span class="menu-title" data-i18n="">DM</span></a></li>
    <li class="nav-item"><a href="/nutrients"><i class="fa fa-leaf"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a></li>
    <li class="nav-item"><a href="/sensors"><i class="ft-radio"></i><span class="menu-title" data-i18n="">Sensors</span></a></li>
    <li class="nav-item"><a href="/MeasurementHistory"><i class="ft-bar-chart"></i><span class="menu-title" data-i18n="">Measurement</span></a></li>
    <li class="nav-item"><a href="/History"><i class="ft-book"></i><span class="menu-title" data-i18n="">Plant History</span></a></li>
    <li class="nav-item"><a href="/AppliedFertilizer"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Applied Fertilizer</span></a></li>
    <li class="nav-item"><a href="/Reports"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Over All Reports</span></a></li>
  </ul>
</div>
  </div>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Plant History</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dash">Home</a>
                </li>
                <li class="breadcrumb-item active">Plant History
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">

        <!-- Plant Summary -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Plant Summary</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="plantSummaryTable">
                      <thead>
                        <tr>
                          <th>Common Name</th>
                          <th>Scientific Name</th>
                          <th>Currently Planted</th>
                          <th>Quantity Harvested</th>
                          <th>Quantity Destroyed</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($plant_summary): ?>
                          <?php foreach ($plant_summary as $row) : ?>
                            <tr>
                              <td><?php echo $row['common_name']; ?></td>
                              <td><?php echo $row['scientific_name']; ?></td>
                              <td><?php echo $row['currently_planted']; ?></td>
                              <td><?php echo $row['quantity_harvested']; ?></td>
                              <td><?php echo $row['quantity_destroyed']; ?></td>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Daily Planting Summary -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daily Planting Summary</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="dailyPlantingTable">
                      <thead>
                        <tr>
                          <th>Date Planted</th>
                          <th>Total Quantity Planted</th>
                          <th>Plants Planted</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($daily_planting_summary): ?>
                          <?php foreach ($daily_planting_summary as $row) : ?>
                            <tr>
                              <td><?php echo $row['date_planted']; ?></td>
                              <td><?php echo $row['total_quantity']; ?></td>
                              <td><?php echo $row['plants']; ?></td>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Daily Harvest Summary -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daily Harvest Summary</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="dailyHarvestTable">
                      <thead>
                        <tr>
                          <th>Date Harvested</th>
                          <th>Total Quantity Harvested</th>
                          <th>Total Quantity Destroyed</th>
                          <th>Plants Harvested</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($daily_harvest_summary): ?>
                          <?php foreach ($daily_harvest_summary as $row) : ?>
                            <tr>
                              <td><?php echo $row['date_harvested']; ?></td>
                              <td><?php echo $row['total_harvested']; ?></td>
                              <td><?php echo $row['total_destroyed']; ?></td>
                              <td><?php echo $row['plants']; ?></td>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            $('#plantSummaryTable').DataTable({
              "paging": true,
              "searching": true,
              "info": true,
              "lengthChange": false,
              "autoWidth": false,
            });

            $('#dailyPlantingTable').DataTable({
              "paging": true,
              "searching": true,
              "info": true,
              "lengthChange": false,
              "autoWidth": false,
            });

            $('#dailyHarvestTable').DataTable({
              "paging": true,
              "searching": true,
              "info": true,
              "lengthChange": false,
              "autoWidth": false,
            });
          });
        </script>
      </div>
    </div>

    

    <!-- Vendor JS -->
    <script src="admin/theme-assets/vendors/js/vendors.min.js"></script>
    <script src="admin/theme-assets/js/core/app-menu-lite.js"></script>
    <script src="admin/theme-assets/js/core/app-lite.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</body>

</html>