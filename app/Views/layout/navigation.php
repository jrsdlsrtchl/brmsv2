<body id="page-top">
    <style type="text/css">
        #nav-item:hover {
            padding-left: 10px;
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="#">
                <div class="sidebar-brand-icon">
                    <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/rawan_logo.png" alt="" width="70px">
                </div>
            </a>


            <?php if (session()->has("logged_admin")) { ?>

                <!-- Dashboard -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('dashboardcontroller/dashboard')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>dashboardcontroller/dashboard">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Officials & Staff -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <span>Officials & Staff</span></a>
                </li>

                <!-- Residents -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('residentcontroller/resident')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>residentcontroller/resident">
                        <i class="fa-solid fa-users"></i>
                        <span>Residents</span></a>
                </li>

                <!-- Purok -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('purokcontroller/puroklist')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>purokcontroller/puroklist">
                        <i class="fa-solid fa-warehouse"></i>
                        <span>Purok</span></a>
                </li>

                <!-- Household -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('householdcontroller/householdlist')) ? 'active' : ''; ?> " id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>householdcontroller/householdlist">
                        <i class="fa-solid fa-house-flag"></i>
                        <span>Household</span></a>
                </li>

                <!-- Barangay Certificates -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa-solid fa-newspaper"></i>
                        <span>Barangay Certificates</span></a>
                </li>

                <!-- Assistance -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa-solid fa-hand-holding-hand"></i>
                        <span>Assistance</span></a>
                </li>

                <!-- Generate Report -->
                <hr class="sidebar-divider my-0">
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

                <!-- Logout -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('purokcontroller/puroklist')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutAdminModal">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span></a>
                </li>

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            <?php } ?>

        </ul>


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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <!-- Web Page Title -->
                        <li class="nav-item mx-1 d-none d-md-inline">
                            <a class="nav-link" href="#">
                                <div class="text-lg text-dark font-weight-bold">Brgy. Raw-an Management System</div>
                            </a>
                        </li>

                        <li class="nav-item mx-1 d-md-none">
                            <a class="nav-link" href="#">
                                <div class="text-lg text-dark font-weight-bold">BRMS</div>
                            </a>
                        </li>

                    </ul>

                    <a class="nav-link" href="#">
                        <div class="font-weight-bold text-dark">
                            <div class="d-none d-sm-inline">Admin - </div>
                            <?= $this->renderSection("user_login"); ?>
                        </div>
                    </a>

                    <div class="topbar-divider ml-0 mr-0"></div>

                    <a class="nav-link" href="#">
                        <?= $this->renderSection("profile"); ?>
                    </a>

                </nav>
                <!-- End of Topbar -->

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutAdminModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteResidentLabel">Logout Confirmation</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3 mb-4"> Are you sure you want to go out? </div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <button class="flex-fill btn btn-secondary p-2 rounded-0" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="flex-fill btn btn-danger p-2 rounded-0" href="<?= base_url(); ?>LoggedAdminController/logoutAdmin">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>