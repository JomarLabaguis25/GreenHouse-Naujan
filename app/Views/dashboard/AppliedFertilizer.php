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
    <!-- Include jQuery -->
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
                    <h3 class="content-header-title">Monitoring of Fertilizer Applied</h3>
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

            <!-- Fertilizer Management Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Fertilizer Management</h4>
                            <div class="heading-elements d-flex align-items-center">
                                <select id="fertilizerFilter" class="form-control mr-2" onchange="filterFertilizers()" style="width: auto;">
                                    <option value="all">All</option>
                                    <option value="organic">Organic</option>
                                    <option value="chemical">Chemical</option>
                                </select>
                                <button class="btn btn-primary" onclick="openAddFertilizerModal()">Add Fertilizer</button>
                            </div>
                        </div>

                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Fertilizer Name</th>
                                                <th>Type</th>
                                                <th>Frequency of Application</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="fertilizerTable">
                                            <?php if ($fertilizers) : ?>
                                                <?php foreach ($fertilizers as $row) : ?>
                                                    <tr data-type="<?php echo $row['type']; ?>">
                                                        <td><?php echo $row['fertilizer_name']; ?></td>
                                                        <td><?php echo ucfirst($row['type']); ?></td>
                                                        <td><?php echo $row['frequency_of_application']; ?></td>
                                                        <td>
                                                            <button onclick="openEditFertilizerModal('<?php echo $row['id']; ?>', '<?php echo $row['fertilizer_name']; ?>', '<?php echo $row['type']; ?>', '<?php echo $row['frequency_of_application']; ?>')" class="btn btn-success">Edit</button>
                                                            <button onclick="deleteFertilizer('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</button>
                                                        </td>
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

            <!-- Fertilizer Application Section -->
            <h4 class="card-title"><b>Applied Fertilizer

                    Monitoring</b></h4>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Applied Fertilizer</h4>
                            <div class="heading-elements">
                                <button class="btn btn-primary float-right" onclick="openAddApplicationModal()">Apply Fertilizer</button>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Plot Name</th>
                                                <th>Applied Fertilizer</th>
                                                <th>Date Applied</th>
                                                <th>Time Span</th>
                                                <th>Frequency of Application</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($fertilizerApplications) : ?>
                                                <?php foreach ($fertilizerApplications as $application) : ?>
                                                    <tr>
                                                        <td><?php echo $application['plot_id']; ?></td>
                                                        <td><?php echo $application['fertilizer_name']; ?></td>
                                                        <td><?php echo $application['date_applied']; ?></td>
                                                        <td><?php echo $application['time_span']; ?></td>
                                                        <td><?php echo $application['frequency_of_application']; ?></td>
                                                        <td>
    <button 
        onclick="openEditApplicationModal('<?php echo $application['id']; ?>', '<?php echo $application['plot_id']; ?>', '<?php echo $application['fertilizer_name']; ?>', '<?php echo $application['date_applied']; ?>', '<?php echo $application['time_span']; ?>', '<?php echo $application['frequency_of_application']; ?>')" 
        style="background-color: #28a745; color: white; border: none; border-radius: 5px; padding: 8px 12px; font-size: 14px; cursor: pointer; transition: background-color 0.3s;" 
        onmouseover="this.style.backgroundColor='#218838'" 
        onmouseout="this.style.backgroundColor='#28a745'">
        Edit
    </button>
    <button 
        onclick="deleteApplication('<?php echo $application['id']; ?>')" 
        style="background-color: #dc3545; color: white; border: none; border-radius: 5px; padding: 8px 12px; font-size: 14px; cursor: pointer; transition: background-color 0.3s;" 
        onmouseover="this.style.backgroundColor='#c82333'" 
        onmouseout="this.style.backgroundColor='#dc3545'">
        Delete
    </button>
</td>

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

            <!-- Add/Edit Fertilizer Modal -->
            <div id="fertilizerModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
                <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 40%; border-radius: 10px;">
                    <span class="close" style="position: absolute; top: 0; right: 0; cursor: pointer;" onclick="closeFertilizerModal()">&times;</span>
                    <h2 style="text-align: center;">Fertilizer Information</h2>
                    <form id="fertilizerForm" action="<?php echo base_url('addFertilizer') ?>" method="post">
                        <input type="hidden" id="fertilizerId" name="id">
                        <label for="fertilizerName">Fertilizer Name:</label>
                        <input type="text" id="fertilizerName" name="fertilizerName" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

                        <label for="fertilizerType">Type:</label>
                        <select id="fertilizerType" name="fertilizerType" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">
                            <option value="organic">Organic</option>
                            <option value="chemical">Chemical</option>
                        </select>

                        <label for="frequencyOfApplication">Frequency of Application:</label>
                        <input type="text" id="frequencyOfApplication" name="frequencyOfApplication" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

                        <input type="submit" value="Save" class="btn btn-success" style="width: 100%; padding: 10px; margin-top: 15px;">
                    </form>
                </div>
            </div>

            <!-- Add/Edit Fertilizer Application Modal -->
            <div id="applicationModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
                <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 40%; border-radius: 10px;">
                    <span class="close" style="position: absolute; top: 0; right: 0; cursor: pointer;" onclick="closeApplicationModal()">&times;</span>
                    <h2 style="text-align: center;">Apply Fertilizer</h2>
                    <form id="applicationForm" action="<?php echo base_url('applyFertilizer') ?>" method="post">
                        <input type="hidden" id="applicationId" name="id">
                        <label for="plotName">Plot Name:</label>
                        <select id="plotName" name="plotName" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">
                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                <option value="Plot <?php echo $i; ?>">Plot <?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>

                        <label for="appliedFertilizer">Applied Fertilizer:</label>
                        <select id="appliedFertilizer" name="appliedFertilizer" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">
                            <?php foreach ($fertilizers as $fertilizer) : ?>
                                <option value="<?php echo $fertilizer['fertilizer_name']; ?>"><?php echo $fertilizer['fertilizer_name']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="dateApplied">Date Applied:</label>
                        <input type="date" id="dateApplied" name="dateApplied" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

                        <input type="submit" value="Apply" class="btn btn-success" style="width: 100%; padding: 10px; margin-top: 15px;">
                    </form>
                </div>
            </div>

            <script>
                function openAddFertilizerModal() {
                    document.getElementById('fertilizerId').value = ''; // Reset ID for new entries
                    document.getElementById('fertilizerModal').style.display = 'block';
                }

                function closeFertilizerModal() {
                    document.getElementById('fertilizerModal').style.display = 'none';
                }

                function openEditFertilizerModal(id, name, type, frequency) {
                    document.getElementById('fertilizerId').value = id;
                    document.getElementById('fertilizerName').value = name;
                    document.getElementById('fertilizerType').value = type;
                    document.getElementById('frequencyOfApplication').value = frequency;
                    document.getElementById('fertilizerForm').action = '/editFertilizer/' + id; // Update the form action URL
                    openAddFertilizerModal();
                }

                function deleteFertilizer(id) {
                    if (confirm('Are you sure you want to delete this fertilizer?')) {
                        $.ajax({
                            url: '/deleteFertilizer',
                            type: 'POST',
                            data: {
                                id: id
                            },
                            success: function(response) {
                                if (response.success) {
                                    alert('Fertilizer deleted successfully.');
                                    location.reload(); // Reload the page to see the updated table
                                } else {
                                    alert('Failed to delete the fertilizer.');
                                }
                            },
                            error: function(xhr, status, error) {
                                alert('An error occurred while trying to delete the fertilizer.');
                            }
                        });
                    }
                }

                function openAddApplicationModal() {
                    document.getElementById('applicationId').value = ''; // Reset ID for new entries
                    document.getElementById('applicationModal').style.display = 'block';
                }

                function closeApplicationModal() {
                    document.getElementById('applicationModal').style.display = 'none';
                }

                function openEditApplicationModal(id, plotName, fertilizerName, dateApplied, timeSpan, frequency) {
                    document.getElementById('applicationId').value = id;
                    document.getElementById('plotName').value = plotName;
                    document.getElementById('appliedFertilizer').value = fertilizerName;
                    document.getElementById('dateApplied').value = dateApplied;
                    document.getElementById('applicationForm').action = '/editApplication/' + id; // Update the form action URL
                    document.getElementById('applicationModal').style.display = 'block'; // Open the modal
                }


                function deleteApplication(id) {
                    if (confirm('Are you sure you want to delete this application?')) {
                        $.ajax({
                            url: '/deleteApplication',
                            type: 'POST',
                            data: {
                                id: id
                            },
                            success: function(response) {
                                if (response.success) {
                                    alert('Application deleted successfully.');
                                    location.reload(); // Reload the page to see the updated table
                                } else {
                                    alert('Failed to delete the application.');
                                }
                            },
                            error: function(xhr, status, error) {
                                alert('An error occurred while trying to delete the application.');
                            }
                        });
                    }
                }

                function filterFertilizers() {
                    var filter = document.getElementById('fertilizerFilter').value.toLowerCase();
                    var rows = document.querySelectorAll('#fertilizerTable tr');

                    rows.forEach(function(row) {
                        var type = row.getAttribute('data-type');
                        if (filter === 'all' || filter === type) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
            </script>

        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    

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