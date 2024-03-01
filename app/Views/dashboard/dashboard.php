<?= $this->extend("layout/base"); ?>

<?= $this->section("user_login"); ?>
<?php if (!empty($userdata) && isset($userdata['0']->lname)) {
    $lastName = ucfirst($userdata['0']->lname);
    echo " " . $lastName;
} ?>
<?= $this->endSection(); ?>


<?= $this->section("profile"); ?>
<?php if (!empty($userdata) && isset($userdata['0']->gender)) {
    $gender = $userdata['0']->gender;
    if ($gender == 'Male') { ?>
        <img class="img-profile rounded-circle" width="45px" src="<?= base_url(); ?>assets/img/male.png">
    <?php } else { ?>
        <img class="img-profile rounded-circle" width="45px" src="<?= base_url(); ?>assets/img/female.png">
    <?php }
} else { ?>
    <img class="img-profile rounded-circle" width="45px" src="<?= base_url(); ?>assets/img/unknown.png">
<?php } ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<style>
    a:hover {
        text-decoration: none;
    }

    .card-body:hover {
        padding-right: 40px;
        transition: 0.5s;
    }
</style>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <hr />
        <a href="<?= base_url() ?>residentcontroller/addresident" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Generate Report </a>
    </div>

    <div class="row">

        <!-- Number of Population -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Populations</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $population ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of Male -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Male
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $male; ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-mars-stroke fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of Female -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Female
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $female; ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-venus fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of Purok -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Puroks
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> 7 </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-warehouse fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of Households -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Households
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $household ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-house fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of Senior Citizens -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Senior Citizen
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $senior ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-person-cane fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of PWD -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="manage-family-members.php">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Person with Disability
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $pwd ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-wheelchair fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of 4ps -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="#">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    4PS
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $fourPs ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-hands-holding-child fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Number of Voters -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="#">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Voters
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $voter ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-fingerprint fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>