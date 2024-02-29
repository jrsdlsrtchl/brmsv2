<body id="page-top">
    <style type="text/css">
        #nav-item {
            padding-left: 10px;

        }

        #nav-item:hover {
            padding-left: 20px;
            background-color: #25a244;
            transition: 0.5s;
        }

        #sidebarToggleTop:hover {
            color: #2d6a4f;
        }

        #accordionSidebar {
            background-color: #2c6e49;
        }
    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="#">
                <div class="sidebar-brand-icon">
                    <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/rawan_logo.png" alt="" width="70px">
                </div>
            </a>

            <?php if (session()->has("logged_resident")) { ?>
                <!-- Home -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('dashboardcontroller/dashboard')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>dashboardcontroller/dashboard">
                        <i class="fas fa-home"></i>
                        <span>Home</span></a>
                </li>

                <!-- Manage Profile -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('dashboardcontroller/dashboard')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>dashboardcontroller/dashboard">
                        <i class="fa-solid fa-user-gear"></i>
                        <span>Manage Profile</span></a>
                </li>

                <!-- Request -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa-solid fa-paste"></i>
                        <span>Request Certificate</span></a>
                </li>

                <!-- Track Request -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('residentcontroller/resident')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>residentcontroller/resident">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Track Request</span></a>
                </li>

                <!-- Logout -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?= (current_url() == base_url('purokcontroller/puroklist')) ? 'active' : ''; ?>" id="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutResidentModal">
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
                    <button id="sidebarToggleTop" class="btn d-md-none  mr-3" id="accordionSidebar">
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
                            <?= $this->renderSection("user_login"); ?>
                        </div>
                    </a>

                    <div class="topbar-divider ml-0"></div>

                    <div class="font-weight-bold text-dark mr-4">Resident</div>

                </nav>
                <!-- End of Topbar -->

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutResidentModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
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
                                    <a class="flex-fill btn btn-danger p-2 rounded-0" href="<?= base_url(); ?>LoggedResidentController/logoutResident">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>