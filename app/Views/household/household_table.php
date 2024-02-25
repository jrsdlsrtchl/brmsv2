<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/base"); ?>

<?= $this->section("content"); ?>

<script>
    setTimeout(function() {
        $("#hidemessage").hide();
    }, 3000);
</script>


<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Household</h1>
        <hr />
        <a href="#" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addHousehold">
            <i class="fa-solid fa-house-medical-flag"></i> Add Household
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Households List Information</h6>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Purok - 1
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseOne as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Purok - 2
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseTwo as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Purok - 3
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseThree as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Purok - 4
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseFour as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Purok - 5
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseFive as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Purok - 6
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseSix as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Purok - 7
                                    <i class="fa-solid fa-angles-down ml-3"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group mb-2">
                                    <?php foreach ($houseSeven as $house) { ?>
                                        <a href="<?= base_url(); ?>householdcontroller/membersHH/<?= $house->household_id; ?>" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?= $this->include("household/add_modal"); ?>

        <form name="addphlebotomist" method="post">
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add Household</h6>
                    </div>
                    <!-- Messages for SUCCESS and ERRORS -->
                    <?php if ($page_session->getTempdata('success')) : ?>
                        <div id="hidemessage" class="badge badge-success pt-2">
                            <h6>
                                <?= $page_session->getTempdata('success'); ?>
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ($page_session->getTempdata('error')) : ?>
                        <div id="hidemessage" class="badge badge-danger pt-2">
                            <?= $page_session->getTempdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row card-body ">
                        <div class="form-group col-xl-6">
                            <label>Household Name</label>
                            <input type="text" class="form-control" name="household_desc" placeholder="Enter last household name">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Purok</label>
                            <select name="purok_id" class="form-control" id="fetchpurok">
                                <option value="" hidden>Select Purok</option>
                                <?php foreach ($purok as $pur) { ?>
                                    <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                                <?php }; ?>
                            </select>
                        </div>
                        <div class="form-group col-xl-12">
                            <input type="submit" class="btn btn-primary btn-block mt-3" name="submit" id="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?= $this->endSection(); ?>