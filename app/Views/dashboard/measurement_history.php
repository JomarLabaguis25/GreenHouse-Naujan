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
                <li class="nav-item"><a href="/dash"><i class="ft-home"></i><span class="menu-title">Dashboard</span></a></li>
                <li class="nav-item"><a href="/charts"><i class="ft-pie-chart"></i><span class="menu-title">Charts</span></a></li>
                <li class="nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title">Tables</span></a></li>
                <!-- <li class="nav-item"><a href="/cards"><i class="ft-layers"></i><span class="menu-title">Drought Monitoring</span></a></li>
                <li class="nav-item"><a href="/nutrients"><i class="ft-box"></i><span class="menu-title">PH Nutrients</span></a></li> -->
                <li class="nav-item"><a href="/sensors"><i class="ft-radio"></i><span class="menu-title">Sensors</span></a></li>
                <li class="active"><a href="/MeasurementHistory"><i class="ft-bar-chart"></i><span class="menu-title" data-i18n="">Measurement</span></a>
                </li>
                <li class="nav-item"><a href="/History"><i class="ft-book"></i><span class="menu-title">Plant History</span></a></li>
                <li class="nav-item"><a href="/AppliedFertilizer"><i class="ft-droplet"></i><span class="menu-title">Applied Fertilizer</span></a></li>
                <li class="nav-item"><a href="/Reports"><i class="ft-layout"></i><span class="menu-title">Overall Reports</span></a></li>
            </ul>
        </div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Measurement History</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dash">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Measurement History
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
                                <h4 class="card-title">Measurement Summary</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div>
                                            <label for="plotSelect">Select Plot:</label>
                                            <select id="plotSelect" class="form-control">
                                                <option value="all">All Plots</option>
                                                <?php foreach ($plots as $plot): ?>
                                                    <option value="<?= $plot['id'] ?>"><?= $plot['plot_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                            <label for="timeFrameSelect">Select Time Frame:</label>
                                            <select id="timeFrameSelect" class="form-control mb-2">
                                                <option value="all">All</option>
                                                <option value="week">Last Week</option>
                                                <option value="month">Last Month</option>
                                                <option value="year">Last Year</option>
                                            </select>
                                        </div>

                                        <!-- Data Table -->
                                        <table id="measurementHistoryTable" class="display table table-striped table-bordered mt-4" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Plot Name</th>
                                                    <th>Date</th>
                                                    <th>Temperature</th>
                                                    <th>Humidity</th>
                                                    <th>Nutrient Level</th>
                                                    <th>Soil Moisture</th>
                                                    <th>Nitrogen</th>
                                                    <th>Phosphorus</th>
                                                    <th>Potassium</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($measurements as $measurement): ?>
                                                    <tr>
                                                        <td><?= $measurement['id'] ?></td>
                                                        <td><?= $measurement['plot_id'] ?></td>
                                                        <td><?= $measurement['measurement_date'] ?></td>
                                                        <td><?= $measurement['temperature'] ?></td>
                                                        <td><?= $measurement['humidity'] ?></td>
                                                        <td><?= $measurement['nutrient_level'] ?></td>
                                                        <td><?= $measurement['soil_moisture'] ?></td>
                                                        <td><?= $measurement['nitrogen_level'] ?></td>
                                                        <td><?= $measurement['phosphorus_level'] ?></td>
                                                        <td><?= $measurement['potassium_level'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                        </table>

                                        <!-- jQuery and DataTable Initialization -->
                                        <script>
                                            $(document).ready(function() {
                                                // Initialize DataTable with sorting on the date column in descending order
                                                var table = $('#measurementHistoryTable').DataTable({
                                                    "searching": true,
                                                    "paging": true,
                                                    "order": [
                                                        [2, 'desc']
                                                    ] // Sort by the third column (measurement_date) in descending order
                                                });

                                                // Event listeners for filters
                                                $('#plotSelect, #timeFrameSelect').on('change', function() {
                                                    filterData();
                                                });

                                                function filterData() {
                                                    const plotId = $('#plotSelect').val();
                                                    const timeFrame = $('#timeFrameSelect').val();
                                                    let filteredData = <?php echo json_encode($measurements); ?>;

                                                    // Apply plot filter
                                                    if (plotId !== 'all') {
                                                        filteredData = filteredData.filter(m => m.plot_id == plotId);
                                                    }

                                                    // Get current date for filtering by time frame
                                                    const currentDate = new Date();
                                                    const today = new Date();

                                                    // Apply time frame filter
                                                    if (timeFrame === 'week') {
                                                        const lastWeek = new Date(today.setDate(today.getDate() - 7));
                                                        filteredData = filteredData.filter(m => new Date(m.measurement_date) >= lastWeek);
                                                    } else if (timeFrame === 'month') {
                                                        const lastMonth = new Date(today.setMonth(today.getMonth() - 1));
                                                        filteredData = filteredData.filter(m => new Date(m.measurement_date) >= lastMonth);
                                                    } else if (timeFrame === 'year') {
                                                        const lastYear = new Date(today.setFullYear(today.getFullYear() - 1));
                                                        filteredData = filteredData.filter(m => new Date(m.measurement_date) >= lastYear);
                                                    }

                                                    // Clear the existing table and repopulate it with the filtered data
                                                    table.clear();
                                                    filteredData.forEach(function(row) {
                                                        table.row.add([
                                                            row.id,
                                                            row.plot_id,
                                                            row.measurement_date,
                                                            row.temperature,
                                                            row.humidity,
                                                            row.nutrient_level,
                                                            row.soil_moisture,
                                                            row.nitrogen_level,
                                                            row.phosphorus_level,
                                                            row.potassium_level
                                                        ]);
                                                    });

                                                    // Re-draw the table and ensure it remains sorted by measurement_date desc
                                                    table.order([2, 'desc']).draw();
                                                }
                                            });
                                        </script>

                                    </div>
                                </div>

                                <!-- Footer -->
                                

                                <!-- Vendor JS -->
                                <script src="admin/theme-assets/vendors/js/vendors.min.js"></script>
                                <script src="admin/theme-assets/js/core/app-menu-lite.js"></script>
                                <script src="admin/theme-assets/js/core/app-lite.js"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</body>

</html>