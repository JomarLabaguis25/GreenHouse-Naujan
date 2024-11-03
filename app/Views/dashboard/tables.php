<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Tables - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="admin/theme-assets/images/logo/naujan.png" />
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
                <li class=" active"><a href="tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
                </li>
                <li class=" nav-item"><a href="cards"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Drought Monitoring</span></a>
                </li>
                <li class=" nav-item"><a href="nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
                <li class=" nav-item"><a href="sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
                </li>
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
                    <h3 class="content-header-title">Tables</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dash">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tables
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List of Planted Plants</h4>
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
                                    <p class="card-text">
                                        <?php if ($tableInfo) : ?>
                                            <?php foreach ($tableInfo as $table) : ?>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $table['table_info']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </p>
                            <select id="plantTypeDropdown" style="display: none;"></select>
                            <br>
                            <div class="table-responsive">
                                <br>
                                <table id="plantTable" class="table">
                                    <thead>
                                        <tr>
                                            <th>Plant Name</th>
                                            <th>Plant Type</th>
                                            <th>Status</th>
                                            <th>Quantity</th>
                                            <th>Date Planted</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($planted_plants) : ?>
                                            <?php foreach ($planted_plants as $planted) : ?>
                                                <tr>
                                                    <td>
                                                        <a href="#" onclick="openPlantModal(
                '<?php echo $planted['common_name']; ?>',
                '<?php echo $planted['scientific_name']; ?>',
                '<?php echo $planted['plant_type']; ?>',
                '<?php echo $planted['plant_desc']; ?>',
                '<?php echo $planted['water_capacity']; ?>',
                '<?php echo $planted['soil_type']; ?>',
                '<?php echo $planted['days_to_harvest']; ?>',
                '<?php echo $planted['harvest_status']; ?>',
                '<?php echo $planted['plant_age']; ?>',
                '<?php echo $planted['quantity']; ?>',
                'path/to/image'
            )"><?php echo $planted['common_name']; ?></a>
                                                    </td>
                                                    <td><?php echo $planted['plant_type']; ?></td>
                                                    <td><?php echo $planted['harvest_status']; ?></td>
                                                    <td><?php echo $planted['quantity']; ?></td>
                                                    <td><?php echo $planted['date_planted']; ?></td>
                                                    <td>
                                                        <button onclick="openHarvestModal(<?= $planted['id'] ?>, '<?= $planted['common_name'] ?>', <?= $planted['quantity'] ?>)" class="btn btn-success btn-sm">Harvest</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick="updateEditForm(
                '<?php echo htmlspecialchars($planted['common_name']); ?>',
                '<?php echo htmlspecialchars($planted['scientific_name']); ?>',
                '<?php echo htmlspecialchars($planted['plant_type']); ?>',
                '<?php echo htmlspecialchars($planted['plant_desc']); ?>',
                '<?php echo htmlspecialchars($planted['water_capacity']); ?>',
                '<?php echo htmlspecialchars($planted['soil_type']); ?>',
                '<?php echo htmlspecialchars($planted['days_to_harvest']); ?>',
                '<?php echo htmlspecialchars($planted['harvest_status']); ?>',
                '<?php echo htmlspecialchars($planted['plant_age']); ?>',
                '<?php echo htmlspecialchars($planted['quantity']); ?>',
                '<?php echo $planted['id']; ?>' // Pass the planted_plant_id
            )" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editPlantModal">Edit</a>
                                                        <button onclick="deleteRecord(<?= $planted['id'] ?>)" class="btn btn-danger btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        <?php endif; ?>
                                    </tbody>
                                    <button onclick="openModal()" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; border-radius: 5px; float: right;">Add Plant</button>

                                </table>

                                <!-- Harvest Modal -->
                                <div id="harvestModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4); text-align: center;">
                                    <div class="modal-content" style="background-color: #fefefe; padding: 20px; border: 1px solid #888; border-radius: 10px; width: 50%; margin: 15% auto;">
                                        <span class="close" style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="closeHarvestModal()">&times;</span>
                                        <h2>Harvest Plant</h2>
                                        <form id="harvestForm" action="<?php echo base_url('plants/harvestPlant'); ?>" method="post">
                                            <input type="hidden" id="harvestPlantId" name="planted_plant_id">
                                            <p>Plant Name: <span id="harvestPlantName"></span></p>
                                            <p>Available Quantity: <span id="harvestAvailableQuantity"></span></p>
                                            <label for="quantity_harvested">Quantity to Harvest:</label><br>
                                            <input type="number" id="quantity_harvested" name="quantity_harvested" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <label for="quantity_destroyed">Quantity to Destroy:</label><br>
                                            <input type="number" id="quantity_destroyed" name="quantity_destroyed" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <button type="submit" style="background-color: #4CAF50; color: white; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">Submit</button>
                                        </form>
                                    </div>
                                </div>

                                <script>
                                    function openHarvestModal(plantedPlantId, plantName, availableQuantity) {
                                        document.getElementById("harvestPlantId").value = plantedPlantId;
                                        document.getElementById("harvestPlantName").textContent = plantName;
                                        document.getElementById("harvestAvailableQuantity").textContent = availableQuantity;
                                        document.getElementById("harvestModal").style.display = "block";
                                    }

                                    function closeHarvestModal() {
                                        document.getElementById("harvestModal").style.display = "none";
                                    }

                                    document.getElementById("harvestForm").addEventListener("submit", function(event) {
                                        event.preventDefault(); // Prevent the form from submitting via the browser
                                        var formData = new FormData(this); // Get form data
                                        var xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object

                                        xhr.onreadystatechange = function() {
                                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                                if (xhr.status === 200) {
                                                    var response = JSON.parse(xhr.responseText);
                                                    if (response.status === 'success') {
                                                        closeHarvestModal(); // Close the modal after successful submission
                                                        showMessage("Plant harvested successfully");
                                                        location.reload(); // Reload the page to update the table
                                                    } else {
                                                        showMessage("Failed to harvest plant: " + response.message);
                                                    }
                                                } else {
                                                    showMessage("Failed to harvest plant");
                                                }
                                            }
                                        };

                                        xhr.open("POST", this.action, true); // Open connection
                                        xhr.send(formData); // Send form data
                                    });

                                    function showMessage(message) {
                                        alert(message); // Display message in an alert box (you can replace this with your preferred UI method)
                                    }
                                </script>


                                <!-- Modal for adding plant -->
                                <div id="myModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4); text-align: center;">
                                    <!-- Modal content for adding plant -->
                                    <div class="modal-content" style="background-color: #fefefe; padding: 20px; border: 1px solid #888; border-radius: 10px; width: 50%; margin: 15% auto;">
                                        <span class="close" style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="closeModal()">&times;</span>
                                        <h2>Add Plant</h2>
                                        <form id="addPlantForm" action="<?php echo base_url('plants/insertPlant'); ?>" method="post">
                                            <label for="common_name">Plant Name:</label><br>
                                            <div style="position: relative; display: inline-block; width: 80%;">
                                                <input type="text" id="common_name" name="common_name" required style="width: calc(100% - 30px); padding: 10px; margin-bottom: 10px;">
                                                <button type="button" id="showScientificNames" style="position: absolute; right: 0; top: 0; padding: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;">Scientific Name</button>
                                                <div id="scientificNames" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f9f9f9; min-width: 200px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #ccc; border-radius: 5px; z-index: 1;">
                                                    <?php
                                                    // Assuming you have established a database connection
                                                    $db_connection = new mysqli("localhost", "root", "", "greenhouse");

                                                    // Check connection
                                                    if ($db_connection->connect_error) {
                                                        die("Connection failed: " . $db_connection->connect_error);
                                                    }

                                                    // Query to fetch scientific names and plant names from the database sorted alphabetically by common name
                                                    $sql = "SELECT scientific_name, common_name, plant_type, plant_desc, water_capacity, soil_type, days_to_harvest FROM plants ORDER BY common_name ASC";
                                                    $result = $db_connection->query($sql);

                                                    // Check if any rows were returned
                                                    if ($result->num_rows > 0) {
                                                        // Output table header
                                                        echo "<table>";
                                                        echo "<tr><th>Scientific Name</th><th>Common Name</th></tr>";

                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<tr><td><a href=\"#\" class=\"scientific-name\" data-plant-details='" . json_encode($row) . "'>" . $row["scientific_name"] . "</a></td><td>" . $row["common_name"] . "</td></tr>";
                                                        }

                                                        echo "</table>";
                                                    } else {
                                                        echo "0 results";
                                                    }

                                                    // Close database connection
                                                    $db_connection->close();
                                                    ?>
                                                </div>
                                            </div><br>
                                            <label for="plant_type">Plant Type:</label><br>
                                            <div style="position: relative; display: inline-block; width: 80%;">
                                                <input type="text" id="plant_type" name="plant_type" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                <button type="button" id="ShowplantType" style="position: absolute; right: 0; top: 0; padding: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;">Plant Types</button>
                                                <div id="plantTypeShow" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f9f9f9; min-width: 200px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #ccc; border-radius: 5px; z-index: 1;">
                                                    <?php
                                                    // Assuming you have established a database connection
                                                    $db_connection2 = new mysqli("localhost", "root", "", "greenhouse");

                                                    // Check connection
                                                    if ($db_connection2->connect_error) {
                                                        die("Connection failed: " . $db_connection2->connect_error);
                                                    }

                                                    // Query to fetch plant names and types from the database sorted alphabetically by plant name
                                                    $sql2 = "SELECT common_name, plant_type FROM plants ORDER BY common_name ASC";
                                                    $result2 = $db_connection2->query($sql2);

                                                    // Check if any rows were returned
                                                    if ($result2->num_rows > 0) {
                                                        // Output table header
                                                        echo "<table>";
                                                        echo "<tr><th>Plant Name</th><th>Plant Types</th></tr>";

                                                        // Output data of each row
                                                        while ($row2 = $result2->fetch_assoc()) {
                                                            echo "<tr><td><a href=\"#\" class=\"plant-type\">" . $row2["plant_type"] . "</a></td><td>" . $row2["common_name"] . "</td></tr>";
                                                        }

                                                        echo "</table>";
                                                    } else {
                                                        echo "0 results";
                                                    }

                                                    // Close database connection
                                                    $db_connection2->close();
                                                    ?>
                                                </div>
                                            </div> <br>
                                            <label for="plant_desc">Plant Description:</label><br>
                                            <input type="text" id="plant_desc" name="plant_desc" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <label for="water_capacity">Water Capacity:</label><br>
                                            <input type="text" id="water_capacity" name="water_capacity" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <label for="soil_type">Soil Type:</label><br>
                                            <input type="text" id="soil_type" name="soil_type" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <label for="days_to_harvest">Days to Harvest:</label><br>
                                            <input type="text" id="days_to_harvest" name="days_to_harvest" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <!-- <label for="harvest_status">Harvest Status:</label><br>
                                        <input type="text" id="harvest_status" name="harvest_status" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                        <label for="plant_age">Plant Age:</label><br>
                                        <input type="text" id="plant_age" name="plant_age" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br> -->
                                            <label for="quantity">Quantity:</label><br>
                                            <input type="text" id="quantity" name="quantity" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
                                            <button type="submit" style="background-color: #4CAF50; color: white; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Modal for displaying plant information -->
                                <div id="plantInfoModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4); text-align: center;">
                                    <!-- Modal content for displaying plant information -->
                                    <div class="modal-content" style="background-color: #fefefe; padding: 20px; border: 1px solid #888; border-radius: 10px; width: 50%; margin: 15% auto;">
                                        <span class="close" style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="closePlantModal()">&times;</span>
                                        <h2>Plant Information</h2>
                                        <div id="plantInfo"></div>
                                    </div>
                                </div>
                                <!-- edit plants modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="editPlantModal" tabindex="-1" role="dialog" aria-labelledby="editPlantModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editPlantModalLabel">Edit Plant Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Edit Plant Modal Form -->
                                                <form id="editPlantForm" action="<?php echo base_url('plants/update'); ?>" method="post">
                                                    <input type="hidden" id="editPlantedPlantId" name="planted_plant_id">
                                                    <div class="form-group">
                                                        <label for="editCommonName">Plant Name</label>
                                                        <input type="text" class="form-control" id="editCommonName" name="common_name" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editScientificName">Scientific Name</label>
                                                        <input type="text" class="form-control" id="editScientificName" name="scientific_name" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editPlantType">Plant Type</label>
                                                        <input type="text" class="form-control" id="editPlantType" name="plant_type" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editPlantDesc">Plant Description</label>
                                                        <input type="text" class="form-control" id="editPlantDesc" name="plant_desc" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editWaterCapacity">Water Capacity</label>
                                                        <input type="text" class="form-control" id="editWaterCapacity" name="water_capacity" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editSoilType">Soil Type</label>
                                                        <input type="text" class="form-control" id="editSoilType" name="soil_type" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editDaysToHarvest">Days to Harvest</label>
                                                        <input type="text" class="form-control" id="editDaysToHarvest" name="days_to_harvest" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editHarvestStatus">Harvest Status</label>
                                                        <input type="text" class="form-control" id="editHarvestStatus" name="harvest_status" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editPlantAge">Plant Age</label>
                                                        <input type="text" class="form-control" id="editPlantAge" name="plant_age" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editQuantity">Quantity</label>
                                                        <input type="text" class="form-control" id="editQuantity" name="quantity" required style="width: 80%; padding: 10px; margin-bottom: 10px;">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </form>



                                                <script>
                                                    function updateEditForm(commonName, scientificName, plantType, plantDesc, waterCapacity, soilType, daysToHarvest, harvestStatus, plantAge, quantity, plantedPlantId) {
                                                        document.getElementById('editCommonName').value = commonName;
                                                        document.getElementById('editScientificName').value = scientificName;
                                                        document.getElementById('editPlantType').value = plantType;
                                                        document.getElementById('editPlantDesc').value = plantDesc;
                                                        document.getElementById('editWaterCapacity').value = waterCapacity;
                                                        document.getElementById('editSoilType').value = soilType;
                                                        document.getElementById('editDaysToHarvest').value = daysToHarvest;
                                                        document.getElementById('editHarvestStatus').value = harvestStatus;
                                                        document.getElementById('editPlantAge').value = plantAge;
                                                        document.getElementById('editQuantity').value = quantity;
                                                        document.getElementById('editPlantedPlantId').value = plantedPlantId;
                                                    }

                                                    document.getElementById('editPlantForm').addEventListener('submit', function(event) {
                                                        event.preventDefault(); // Prevent the form from submitting via the browser
                                                        var formData = new FormData(this); // Get form data
                                                        var xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object

                                                        xhr.onreadystatechange = function() {
                                                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                                                try {
                                                                    console.log('Response received: ', xhr.responseText);
                                                                    var response = JSON.parse(xhr.responseText);
                                                                    if (xhr.status === 200 && response.status === 'success') {
                                                                        closeEditModal(); // Close the modal after successful submission
                                                                        showMessage("Plant updated successfully");
                                                                        location.reload(); // Reload the page to update the table
                                                                    } else {
                                                                        showMessage("Failed to update plant: " + response.message);
                                                                    }
                                                                } catch (e) {
                                                                    console.error('Error parsing JSON response: ', e);
                                                                    console.error('Response received: ', xhr.responseText);
                                                                    showMessage("Invalid server response");
                                                                }
                                                            }
                                                        };

                                                        xhr.open("POST", this.action, true); // Open connection
                                                        xhr.send(formData); // Send form data
                                                    });

                                                    function showMessage(message) {
                                                        alert(message); // Display message in an alert box (you can replace this with your preferred UI method)
                                                    }

                                                    function closeEditModal() {
                                                        document.getElementById('editPlantModal').style.display = 'none';
                                                    }
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit plants modal end -->
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const plantNameInput = document.getElementById('common_name');
                            const showScientificNamesBtn = document.getElementById('showScientificNames');
                            const scientificNamesDropdown = document.getElementById('scientificNames');
                            const plantTypeInput = document.getElementById('plant_type'); // New

                            // Event listener for showing/hiding the scientific names dropdown
                            showScientificNamesBtn.addEventListener('click', function() {
                                if (scientificNamesDropdown.style.display === 'none') {
                                    scientificNamesDropdown.style.display = 'block';
                                } else {
                                    scientificNamesDropdown.style.display = 'none';
                                }
                            });

                            // Event listener for selecting a scientific name and inserting it into the plant name input
                            scientificNamesDropdown.addEventListener('click', function(e) {
                                if (e.target.classList.contains('scientific-name')) {
                                    const plantDetails = JSON.parse(e.target.getAttribute('data-plant-details'));
                                    plantNameInput.value = `${plantDetails.common_name} (${plantDetails.scientific_name})`;
                                    document.getElementById('plant_type').value = plantDetails.plant_type;
                                    document.getElementById('plant_desc').value = plantDetails.plant_desc;
                                    document.getElementById('water_capacity').value = plantDetails.water_capacity;
                                    document.getElementById('soil_type').value = plantDetails.soil_type;
                                    document.getElementById('days_to_harvest').value = plantDetails.days_to_harvest;
                                    // Hide the dropdown after selection
                                    scientificNamesDropdown.style.display = 'none';
                                }
                            });
                        });

                        document.addEventListener('DOMContentLoaded', function() {
                            const showPlantTypeBtn = document.getElementById('ShowplantType'); // Corrected ID
                            const plantTypeDropdown = document.getElementById('plantTypeShow');

                            // Event listener for showing/hiding the plant type dropdown
                            showPlantTypeBtn.addEventListener('click', function() {
                                if (plantTypeDropdown.style.display === 'none' || plantTypeDropdown.style.display === '') {
                                    plantTypeDropdown.style.display = 'block';
                                } else {
                                    plantTypeDropdown.style.display = 'none';
                                }
                            });

                            // Event listener for selecting a plant type and inserting it into the plant type input
                            plantTypeDropdown.addEventListener('click', function(e) {
                                if (e.target.classList.contains('plant-type')) {
                                    const plantType = e.target.textContent;
                                    // Assuming you want to populate the PlantType input
                                    document.getElementById('plant_type').value = plantType; // Corrected ID
                                    // Hide the dropdown after selection
                                    plantTypeDropdown.style.display = 'none';
                                }
                            });
                        });

                        function openModal() {
                            document.getElementById("myModal").style.display = "block";
                        }

                        function deleteRecord(id) {
                            if (confirm('Are you sure you want to delete this record?')) {
                                window.location.href = '<?= base_url('tables/delete/') ?>' + id;
                            }
                        }

                        function openPlantModal(commonName, scientificName, plantType, plantDesc, waterCapacity, soilType, daysToHarvest, harvestStatus, plantAge, quantity, imageUrl) {
                            var plantInfoHTML = `
                    <div style="display: flex; flex-direction: row; justify-content: space-between; text-align: justify;">
                        <div style="flex: 1;">
                            <p><strong>Common Name:</strong> ${commonName}</p>
                            <p><strong>Scientific Name:</strong> ${scientificName}</p>
                            <p><strong>Plant Type:</strong> ${plantType}</p>
                            <p><strong>Plant Description:</strong> ${plantDesc}</p>
                            <p><strong>Water Capacity:</strong> ${waterCapacity}</p>
                            <p><strong>Soil Type:</strong> ${soilType}</p>
                            <p><strong>Days to Harvest:</strong> ${daysToHarvest}</p>
                            <p><strong>Harvest Status:</strong> ${harvestStatus}</p>
                            <p><strong>Plant Age:</strong> ${plantAge}</p>
                            <p><strong>Quantity:</strong> ${quantity}</p>
                        </div>
                        <div style="flex: 1;">
                            <img src="${imageUrl}" style="max-width: 100%; height: auto;">
                            <img src="admin/theme-assets/images/carousel/images(3).jpg" style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                `;
                            document.getElementById("plantInfo").innerHTML = plantInfoHTML;
                            document.getElementById("plantInfoModal").style.display = "block";
                        }

                        // Save the plant name and the insertion date
                        function savePlant() {
                            const plantName = document.getElementById('common_nameInput').value;
                            if (plantName) {
                                const insertionDate = new Date().toISOString();
                                localStorage.setItem('plantName', plantName);
                                localStorage.setItem('insertionDate', insertionDate);
                                calculateAndDisplayPlantAge();
                            }
                        }

                        // Calculate the plant age based on the insertion date
                        function calculateAndDisplayPlantAge() {
                            const insertionDate = localStorage.getItem('insertionDate');
                            if (insertionDate) {
                                const currentDate = new Date();
                                const plantInsertionDate = new Date(insertionDate);
                                const ageInDays = Math.floor((currentDate - plantInsertionDate) / (1000 * 60 * 60 * 24));
                                document.getElementById('plantAge').textContent = `${ageInDays} days`;
                            } else {
                                document.getElementById('plantAge').textContent = 'N/A';
                            }
                        }

                        // Automatically update the plant age every day
                        function updatePlantAgeDaily() {
                            setInterval(calculateAndDisplayPlantAge, 24 * 60 * 60 * 1000); // Update every 24 hours
                        }

                        // Initialize the plant age display when the page loads
                        document.addEventListener('DOMContentLoaded', () => {
                            calculateAndDisplayPlantAge();
                            updatePlantAgeDaily();
                        });

                        // Function to update the form fields with plant details
                        function updateEditForm(commonName, scientificName, plantType, plantDesc, waterCapacity, soilType, daysToHarvest, harvestStatus, plantAge, quantity, plantedPlantId) {
                            document.getElementById('editCommonName').value = commonName;
                            document.getElementById('editScientificName').value = scientificName;
                            document.getElementById('editPlantType').value = plantType;
                            document.getElementById('editPlantDesc').value = plantDesc;
                            document.getElementById('editWaterCapacity').value = waterCapacity;
                            document.getElementById('editSoilType').value = soilType;
                            document.getElementById('editDaysToHarvest').value = daysToHarvest;
                            document.getElementById('editHarvestStatus').value = harvestStatus;
                            document.getElementById('editPlantAge').value = plantAge;
                            document.getElementById('editQuantity').value = quantity;
                            document.getElementById('editPlantedPlantId').value = plantedPlantId;
                        }



                        function closePlantModal() {
                            document.getElementById("editPlantForm").style.display = "none";
                        }

                        function closeModal() {
                            // Implement your modal closing logic here
                        }

                        function showMessage(message) {
                            // Implement your message display logic here
                            alert(message);
                        }



                        function closeModal() {
                            // Close the modal
                            var modal = document.getElementById("myModal"); // Assuming your modal has the ID "myModal"
                            modal.style.display = "none"; // Hide the modal
                        }
                    </script>
                </div>
                <!-- Basic Tables end -->

                <!-- Striped rows start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List of Harvested Plants</h4>
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
                                <div class="card-body"></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Plant Name</th>
                                                <th>Plant Type</th>
                                                <th>Date Harvested</th>
                                                <th>Quantity Harvested</th>
                                                <th>Quantity Destroyed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($harvested_plants) : ?>
                                                <?php foreach ($harvested_plants as $row) : ?>
                                                    <tr>
                                                        <td><a href="#" onclick="openPlantModal('<?php echo $row['common_name']; ?>', '<?php echo $row['scientific_name']; ?>', '<?php echo $row['plant_type']; ?>', '<?php echo $row['plant_desc']; ?>', '<?php echo $row['water_capacity']; ?>', '<?php echo $row['soil_type']; ?>', '<?php echo $row['days_to_harvest']; ?>', '<?php echo $row['harvest_status']; ?>', '<?php echo $row['plant_age']; ?>',  'path/to/image')"><?php echo $row['common_name']; ?></a></td>
                                                        <td><?php echo $row['plant_type']; ?></td>
                                                        <td><?php echo $row['date_harvested']; ?></td>
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
                <!-- Striped rows end -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
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