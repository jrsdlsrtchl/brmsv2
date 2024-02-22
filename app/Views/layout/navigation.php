<body id="page-top">
    <style type="text/css">
        #nav-item:hover {
            background-color: #023e8a;
            transition: 0.5s;
        }

        #sidebarToggleTop:hover {
            color: #023e8a;
        }
    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center my-3" href="<?php echo base_url() ?>dashboard">
                <div class="sidebar-brand-icon">
                    <div class="sidebar-brand-text mx-3">LMS</div>
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= (current_url() == base_url('dashboardcontroller/dashboard')) ? 'active' : ''; ?>" id="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->

            <hr class="sidebar-divider my-0">

            <li class="nav-item" id="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span>Officials & Staff</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?= (current_url() == base_url('residentcontroller/viewresident')) ? 'active' : ''; ?>" id="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>residentcontroller/viewresident">
                    <i class="fa-solid fa-users"></i>
                    <span>Residents</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?= (current_url() == base_url('purokcontroller/puroklist')) ? 'active' : ''; ?>" id="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>purokcontroller/puroklist">
                    <i class="fa-solid fa-warehouse"></i>
                    <span>Purok</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?= (current_url() == base_url('householdcontroller/householdlist')) ? 'active' : ''; ?> " id="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>householdcontroller/householdlist">
                    <i class="fa-solid fa-house-flag"></i>
                    <span>Household</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item" id="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Barangay Certificates</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item" id="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-hand-holding-hand"></i>
                    <span>Assistance</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Report Collapse Menu -->
            <li class="nav-item" id="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-scroll"></i>
                    <span>Generate Report</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" id="" href="<?php echo base_url() ?>karyawan/laporan">Employee</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>pelanggan/laporan">Customer</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>transaksi/laporan">Transaction</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>pengeluaran/laporan">Expenditure</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item" id="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" id="nav-item">
                <a class="nav-link" href="registration.php">
                    <i class="fas fa-users"></i>
                    <span>Signup/ Registration</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item" id="nav-item">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-users"></i>
                    <span>Login</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>





        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-primary d-md-none  mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <?php //if ($_SESSION['aid']) : 
                    ?>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <?php
                                //Fetching admin Name
                                // $adid = $_SESSION['aid'];
                                // $ret1 = mysqli_query($con, "select fullName from tbluserregistration where ID='$adid'");
                                // while ($row1 = mysqli_fetch_array($ret1)) {

                                // 
                                ?>

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php //echo $row1['fullName']; 
                                                                                            ?></span>
                                <?php //} 
                                ?>
                                <img class="img-profile rounded-circle" src="<?= base_url(); ?>assets/img/profile.png">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="change-password.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                    <?php //endif; 
                    ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3 mb-4">Are you sure you're going out?</div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <a class="flex-fill btn btn-danger p-2 rounded-0" href="<?php echo base_url() . 'welcome/logout' ?>">Logout</a>
                                    <button class="flex-fill btn btn-secondary p-2 rounded-0" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>