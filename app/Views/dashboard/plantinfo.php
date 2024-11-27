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
                <li class="active"><a href="/cards"><i class="ft-layers"></i><span class="menu-title">Drought Monitoring</span></a></li>
                <li class="nav-item"><a href="/nutrients"><i class="ft-box"></i><span class="menu-title">PH Nutrients</span></a></li>
                <li class="nav-item"><a href="/sensors"><i class="ft-droplet"></i><span class="menu-title">Sensors</span></a></li>
                <li class="nav-item"><a href="/MeasurementHistory"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Measurement H</span></a>
                </li>
                <li class="nav-item"><a href="/History"><i class="ft-bold"></i><span class="menu-title">Plant History</span></a></li>
                <li class="nav-item"><a href="/AppliedFertilizer"><i class="ft-bold"></i><span class="menu-title">Applied Fertilizer</span></a></li>
                <li class="nav-item"><a href="/Reports"><i class="ft-layout"></i><span class="menu-title">Overall Reports</span></a></li>
            </ul>
        </div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Plant Information</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dash">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Plant Information
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
                                <h4 class="card-title">Plant Information</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPlantModal">Add New Plant</button>

                                    <!-- Table -->
                                    <table class="table table-bordered table-striped">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Common Name</th>
                                                <th>Scientific Name</th>
                                                <th>Plant Type</th>
                                                <th>Description</th>
                                                <th>Water Capacity</th>
                                                <th>Soil Type</th>
                                                <th>Days to Harvest</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($plant)): ?>
                                                <?php foreach ($plant as $item): ?>
                                                    <tr>
                                                        <td><?= esc($item['id']) ?></td>
                                                        <td><?= esc($item['common_name']) ?></td>
                                                        <td><?= esc($item['scientific_name']) ?></td>
                                                        <td><?= esc($item['plant_type']) ?></td>
                                                        <td><?= esc($item['plant_desc']) ?></td>
                                                        <td><?= esc($item['water_capacity']) ?></td>
                                                        <td><?= esc($item['soil_type']) ?></td>
                                                        <td><?= esc($item['days_to_harvest']) ?></td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                                data-bs-target="#editPlantModal"
                                                                data-id="<?= esc($item['id']) ?>"
                                                                data-common_name="<?= esc($item['common_name']) ?>"
                                                                data-scientific_name="<?= esc($item['scientific_name']) ?>"
                                                                data-plant_type="<?= esc($item['plant_type']) ?>"
                                                                data-plant_desc="<?= esc($item['plant_desc']) ?>"
                                                                data-water_capacity="<?= esc($item['water_capacity']) ?>"
                                                                data-soil_type="<?= esc($item['soil_type']) ?>"
                                                                data-days_to_harvest="<?= esc($item['days_to_harvest']) ?>"
                                                                data-harvest_status="<?= esc($item['harvest_status']) ?>"
                                                                data-plant_age="<?= esc($item['plant_age']) ?>">
                                                                Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="9" class="text-center">No plants available.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Add Plant Modal -->
                                <div class="modal fade" id="addPlantModal" tabindex="-1" aria-labelledby="addPlantModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addPlantModalLabel">Add New Plant</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="addPlantForm" method="POST" action="/plants/add">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="commonName" class="form-label">Common Name</label>
                                                            <input type="text" class="form-control" id="commonName" name="common_name" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="scientificName" class="form-label">Scientific Name</label>
                                                            <input type="text" class="form-control" id="scientificName" name="scientific_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="plantType" class="form-label">Plant Type</label>
                                                        <input type="text" class="form-control" id="plantType" name="plant_type" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="plantDesc" class="form-label">Description</label>
                                                        <textarea class="form-control" id="plantDesc" name="plant_desc" rows="3" required></textarea>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="waterCapacity" class="form-label">Water Capacity</label>
                                                            <input type="text" class="form-control" id="waterCapacity" name="water_capacity" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="soilType" class="form-label">Soil Type</label>
                                                            <input type="text" class="form-control" id="soilType" name="soil_type" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="daysToHarvest" class="form-label">Days to Harvest</label>
                                                        <input type="number" class="form-control" id="daysToHarvest" name="days_to_harvest" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Plant</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Plant Modal -->
                                <div class="modal fade" id="editPlantModal" tabindex="-1" aria-labelledby="editPlantModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editPlantModalLabel">Edit Plant</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editPlantForm" method="POST">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="editCommonName" class="form-label">Common Name</label>
                                                            <input type="text" class="form-control" id="editCommonName" name="common_name" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="editScientificName" class="form-label">Scientific Name</label>
                                                            <input type="text" class="form-control" id="editScientificName" name="scientific_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editPlantType" class="form-label">Plant Type</label>
                                                        <input type="text" class="form-control" id="editPlantType" name="plant_type" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editPlantDesc" class="form-label">Description</label>
                                                        <textarea class="form-control" id="editPlantDesc" name="plant_desc" rows="3" required></textarea>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="editWaterCapacity" class="form-label">Water Capacity</label>
                                                            <input type="text" class="form-control" id="editWaterCapacity" name="water_capacity" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="editSoilType" class="form-label">Soil Type</label>
                                                            <input type="text" class="form-control" id="editSoilType" name="soil_type" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label for="editDaysToHarvest" class="form-label">Days to Harvest</label>
                                                            <input type="number" class="form-control" id="editDaysToHarvest" name="days_to_harvest" required>
                                                        </div>

                                                    </div>

                                                    <button type="submit" class="btn btn-warning">Update Plant</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const editModal = document.getElementById('editPlantModal');
                                        const editForm = document.getElementById('editPlantForm');

                                        // Listen for modal show event
                                        editModal.addEventListener('show.bs.modal', function(event) {
                                            const button = event.relatedTarget;

                                            // Extract data-* attributes from the button
                                            const id = button.getAttribute('data-id');
                                            const commonName = button.getAttribute('data-common_name');
                                            const scientificName = button.getAttribute('data-scientific_name');
                                            const plantType = button.getAttribute('data-plant_type');
                                            const plantDesc = button.getAttribute('data-plant_desc');
                                            const waterCapacity = button.getAttribute('data-water_capacity');
                                            const soilType = button.getAttribute('data-soil_type');
                                            const daysToHarvest = button.getAttribute('data-days_to_harvest');
                                            const harvestStatus = button.getAttribute('data-harvest_status');
                                            const plantAge = button.getAttribute('data-plant_age');

                                            // Populate the form fields
                                            editForm.action = `/plants/edit/${id}`; // Set the form action dynamically
                                            document.getElementById('editCommonName').value = commonName;
                                            document.getElementById('editScientificName').value = scientificName;
                                            document.getElementById('editPlantType').value = plantType;
                                            document.getElementById('editPlantDesc').value = plantDesc;
                                            document.getElementById('editWaterCapacity').value = waterCapacity;
                                            document.getElementById('editSoilType').value = soilType;
                                            document.getElementById('editDaysToHarvest').value = daysToHarvest;
                                            document.getElementById('editHarvestStatus').value = harvestStatus;
                                            document.getElementById('editPlantAge').value = plantAge;
                                        });
                                    });
                                </script>

                                <!-- Vendor JS -->
                                <script src="admin/theme-assets/vendors/js/vendors.min.js"></script>
                                <script src="admin/theme-assets/js/core/app-menu-lite.js"></script>
                                <script src="admin/theme-assets/js/core/app-lite.js"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</body>

</html>