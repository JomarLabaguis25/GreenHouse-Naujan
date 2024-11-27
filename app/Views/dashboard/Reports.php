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
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/app-lite.css">
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/colors/palette-gradient.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <!-- Custom CSS -->
  <style>
    .chart-container {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .chart-header {
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
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
        <li class="nav-item"><a href="/dash"><i class="ft-home"></i><span class="menu-title">Dashboard</span></a></li>
        <li class="nav-item"><a href="/charts"><i class="ft-pie-chart"></i><span class="menu-title">Charts</span></a></li>
        <li class="nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title">Tables</span></a></li>
        <!-- <li class="nav-item"><a href="/cards"><i class="ft-layers"></i><span class="menu-title">Drought Monitoring</span></a></li>
        <li class="nav-item"><a href="/nutrients"><i class="ft-box"></i><span class="menu-title">PH Nutrients</span></a></li> -->
        <li class="nav-item"><a href="/sensors"><i class="ft-radio"></i><span class="menu-title">Sensors</span></a></li>
        <li class=" nav-item"><a href="/MeasurementHistory"><i class="ft-bar-chart"></i><span class="menu-title" data-i18n="">Measurement</span></a>
        </li>
        <li class="nav-item"><a href="/History"><i class="ft-book"></i><span class="menu-title">Plant History</span></a></li>
        <li class="nav-item"><a href="/AppliedFertilizer"><i class="ft-droplet"></i><span class="menu-title">Applied Fertilizer</span></a></li>
        <li class="active"><a href="/Reports"><i class="ft-layout"></i><span class="menu-title">Overall Reports</span></a></li>
      </ul>
    </div>
  </div>

  <!-- Main Content -->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Overall Report</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dash">Home</a>
                </li>
                <li class="breadcrumb-item active">Overall Report
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>


      <!-- Plant Summary Table -->
      <div class="table-container ">
        <div class="card p-1">
          <div class="card-header d-flex justify-content-between align-items-center" style="padding: 2px 5px;">
            <h4 class="card-title">Plant Summary</h4>
            <button id="download-plant-summary" class="btn btn-primary">Download as Excel</button>
          </div>


          <div class="card-content collapse show">
            <div class="card-body"></div>
            <div class="table-responsive">
              <table id="plant-summary-table" class="table">
                <thead>
                  <tr>
                    <th>Plant Name</th>
                    <th>Scientific Name</th>
                    <th>Plant Type</th>
                    <th>Currently Planted</th>
                    <th>Total Harvested</th>
                    <th>Total Destroyed</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($plant_summary): ?>
                    <?php foreach ($plant_summary as $row) : ?>
                      <tr>
                        <td><?php echo $row['common_name']; ?></td>
                        <td><?php echo $row['scientific_name']; ?></td>
                        <td><?php echo $row['plant_type']; ?></td>
                        <td><?php echo $row['quantity_currently_planted']; ?></td>
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

        <!-- Chart for Plant Summary -->
        <div class="chart-container">
          <h5 class="chart-header">Plant Summary Chart</h5>
          <canvas id="plant-summary-chart"></canvas>
        </div>
      </div>

      <!-- Daily Planting Summary Table -->
      <div class="table-container">
        <div class="card p-1">
          <div class="card-header d-flex justify-content-between align-items-center" style="padding: 2px 5px;">
            <h4 class="card-title">Daily Planting Summary</h4>
            <button id="download-planting-summary" class="btn btn-primary">Download as Excel</button>
          </div>
          <div class="card-content collapse show">
            <div class="card-body"></div>
            <div class="table-responsive">
              <table id="planting-summary-table" class="table">
                <thead>
                  <tr>
                    <th>Date Planted</th>
                    <th>Total Planted</th>
                    <th>Plants Planted</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($daily_planting_summary): ?>
                    <?php foreach ($daily_planting_summary as $row) : ?>
                      <tr>
                        <td><?php echo $row['date_planted']; ?></td>
                        <td><?php echo $row['total_planted']; ?></td>
                        <td><?php echo $row['plants_planted']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Chart for

 Planting Summary -->
        <div class="chart-container">
          <h5 class="chart-header">Daily Planting Summary Chart</h5>
          <canvas id="planting-summary-chart"></canvas>
        </div>
      </div>

      <!-- Daily Harvesting Summary Table -->
      <div class="table-container">
        <div class="card p-1">
          <div class="card-header d-flex justify-content-between align-items-center" style="padding: 2px 5px;">
            <h4 class="card-title">Daily Harvesting Summary</h4>
            <button id="download-harvesting-summary" class="btn btn-primary">Download as Excel</button>
          </div>
          <div class="card-content collapse show">
            <div class="card-body"></div>
            <div class="table-responsive">
              <table id="harvesting-summary-table" class="table">
                <thead>
                  <tr>
                    <th>Date Harvested</th>
                    <th>Total Harvested</th>
                    <th>Total Destroyed</th>
                    <th>Plants Harvested</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($daily_harvesting_summary): ?>
                    <?php foreach ($daily_harvesting_summary as $row) : ?>
                      <tr>
                        <td><?php echo $row['date_harvested']; ?></td>
                        <td><?php echo $row['total_harvested']; ?></td>
                        <td><?php echo $row['total_destroyed']; ?></td>
                        <td><?php echo $row['plants_harvested']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Chart for Harvesting Summary -->
        <div class="chart-container">
          <h5 class="chart-header">Daily Harvesting Summary Chart</h5>
          <canvas id="harvesting-summary-chart"></canvas>
        </div>
      </div>

      <!-- Fertilizer Applications Table -->
      <div class="table-container">
        <div class="card p-1">
          <div class="card-header d-flex justify-content-between align-items-center" style="padding: 2px 5px;">
            <h4 class="card-title">Fertilizer Applications</h4>
            <button id="download-fertilizer-applications" class="btn btn-primary">Download as Excel</button>
          </div>
          <div class="card-content collapse show">
            <div class="card-body"></div>
            <div class="table-responsive">
              <table id="fertilizer-applications-table" class="table">
                <thead>
                  <tr>
                    <th>Plot Name</th>
                    <th>Fertilizer Name</th>
                    <th>Date Applied</th>
                    <th>Time Span</th>
                    <th>Frequency of Application</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($fertilizer_applications): ?>
                    <?php foreach ($fertilizer_applications as $row) : ?>
                      <tr>
                        <td><?php echo $row['plot_name']; ?></td>
                        <td><?php echo $row['fertilizer_name']; ?></td>
                        <td><?php echo $row['date_applied']; ?></td>
                        <td><?php echo $row['time_span']; ?></td>
                        <td><?php echo $row['frequency_of_application']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Chart for Fertilizer Applications -->
        <div class="chart-container">
          <h5 class="chart-header">Fertilizer Applications Chart</h5>
          <canvas id="fertilizer-applications-chart"></canvas>
        </div>
      </div>

      <!-- Environmental Measurements Table -->
      <div class="table-container">
        <div class="card p-1">
          <div class="card-header d-flex justify-content-between align-items-center" style="padding: 2px 5px;">
            <h4 class="card-title">Environmental Measurements</h4>
            <button id="download-environmental-measurements" class="btn btn-primary">Download as Excel</button>
          </div>
          <div class="card-content collapse show">
            <div class="card-body"></div>
            <div class="table-responsive">
              <table id="environmental-measurements-table" class="table">
                <thead>
                  <tr>
                    <th>Plot Name</th>
                    <th>Measurement Date</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Nutrient Level</th>
                    <th>Soil Moisture</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($environmental_measurements): ?>
                    <?php foreach ($environmental_measurements as $row) : ?>
                      <tr>
                        <td><?php echo $row['plot_name']; ?></td>
                        <td><?php echo $row['measurement_date']; ?></td>
                        <td><?php echo $row['temperature']; ?></td>
                        <td><?php echo $row['humidity']; ?></td>
                        <td><?php echo $row['nutrient_level']; ?></td>
                        <td><?php echo $row['soil_moisture']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Chart for Environmental Measurements -->
        <div class="chart-container">
          <h5 class="chart-header">Environmental Measurements Chart</h5>
          <canvas id="environmental-measurements-chart"></canvas>
        </div>
      </div>
    </div>
  </div>

 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

  <!-- Vendor JS -->
  <script src="admin/theme-assets/vendors/js/vendors.min.js"></script>
  <script src="admin/theme-assets/js/core/app-menu-lite.js"></script>
  <script src="admin/theme-assets/js/core/app-lite.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Custom JS -->
  <script>
    $(document).ready(function() {
      // Initialize DataTables
      $('#plant-summary-table').DataTable();
      $('#planting-summary-table').DataTable();
      $('#harvesting-summary-table').DataTable();
      $('#fertilizer-applications-table').DataTable();
      $('#environmental-measurements-table').DataTable();

      // Chart for Plant Summary
      const plantSummaryData = <?php echo json_encode($plant_summary); ?>;
      new Chart(document.getElementById('plant-summary-chart'), {
        type: 'bar',
        data: {
          labels: plantSummaryData.map(item => item.common_name),
          datasets: [{
            label: 'Currently Planted',
            data: plantSummaryData.map(item => item.quantity_currently_planted),
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
          }, {
            label: 'Total Harvested',
            data: plantSummaryData.map(item => item.quantity_harvested),
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }, {
            label: 'Total Destroyed',
            data: plantSummaryData.map(item => item.quantity_destroyed),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      // Chart for Daily Planting Summary
      const plantingSummaryData = <?php echo json_encode($daily_planting_summary); ?>;
      new Chart(document.getElementById('planting-summary-chart'), {
        type: 'line',
        data: {
          labels: plantingSummaryData.map(item => item.date_planted),
          datasets: [{
            label: 'Total Planted',
            data: plantingSummaryData.map(item => item.total_planted),
            fill: false,
            borderColor: 'rgba(75, 192, 192, 1)',
            tension: 0.1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      // Chart for Daily Harvesting Summary
      const harvestingSummaryData = <?php echo json_encode($daily_harvesting_summary); ?>;
      new Chart(document.getElementById('harvesting-summary-chart'), {
        type: 'line',
        data: {
          labels: harvestingSummaryData.map(item => item.date_harvested),
          datasets: [{
            label: 'Total Harvested',
            data: harvestingSummaryData.map(item => item.total_harvested

            ),
            fill: false,
            borderColor: 'rgba(54, 162, 235, 1)',
            tension: 0.1
          }, {
            label: 'Total Destroyed',
            data: harvestingSummaryData.map(item => item.total_destroyed),
            fill: false,
            borderColor: 'rgba(255, 99, 132, 1)',
            tension: 0.1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      // Chart for Fertilizer Applications
      const fertilizerApplicationsData = <?php echo json_encode($fertilizer_applications); ?>;
      new Chart(document.getElementById('fertilizer-applications-chart'), {
        type: 'bar',
        data: {
          labels: fertilizerApplicationsData.map(item => item.plot_name),
          datasets: [{
            label: 'Frequency of Application',
            data: fertilizerApplicationsData.map(item => item.frequency_of_application),
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      // Chart for Environmental Measurements
      const environmentalMeasurementsData = <?php echo json_encode($environmental_measurements); ?>;
      new Chart(document.getElementById('environmental-measurements-chart'), {
        type: 'bar',
        data: {
          labels: environmentalMeasurementsData.map(item => item.plot_name),
          datasets: [{
            label: 'Temperature',
            data: environmentalMeasurementsData.map(item => item.temperature),
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
          }, {
            label: 'Humidity',
            data: environmentalMeasurementsData.map(item => item.humidity),
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
          }, {
            label: 'Nutrient Level',
            data: environmentalMeasurementsData.map(item => item.nutrient_level),
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }, {
            label: 'Soil Moisture',
            data: environmentalMeasurementsData.map(item => item.soil_moisture),
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      // Download as Excel functionality
      $('#download-plant-summary').on('click', function() {
        downloadTableAsExcel('plant-summary-table', 'Plant_Summary.xlsx');
      });

      $('#download-planting-summary').on('click', function() {
        downloadTableAsExcel('planting-summary-table', 'Daily_Planting_Summary.xlsx');
      });

      $('#download-harvesting-summary').on('click', function() {
        downloadTableAsExcel('harvesting-summary-table', 'Daily_Harvesting_Summary.xlsx');
      });

      $('#download-fertilizer-applications').on('click', function() {
        downloadTableAsExcel('fertilizer-applications-table', 'Fertilizer_Applications.xlsx');
      });

      $('#download-environmental-measurements').on('click', function() {
        downloadTableAsExcel('environmental-measurements-table', 'Environmental_Measurements.xlsx');
      });


      function downloadTableAsExcel(tableId, filename) {
        // Get the table element
        let table = document.getElementById(tableId);

        // Convert the table to a worksheet
        let workbook = XLSX.utils.table_to_book(table, {
          sheet: "Sheet 1"
        });

        // Write the workbook and download it as an Excel file
        XLSX.writeFile(workbook, filename);
      }

    });
  </script>
</body>

</html>