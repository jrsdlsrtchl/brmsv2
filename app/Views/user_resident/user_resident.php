<?= $this->extend("layout/resident_logged_base"); ?>

<?= $this->section("user_login"); ?>
<?php if (!empty($userdata)) {
    echo ucfirst($userdata['0']->lname);
} ?>
<?= $this->endSection(""); ?>

<?= $this->section("content"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php if (!empty($userdata)) { ?>
                <h1 class="d-none d-md-inline"> Welcome <?= ucfirst($userdata['0']->lname) . " " . ucfirst($userdata['0']->fname) ?> </h1>
                <h4 class="d-md-none">
                    Welcome <?= ucfirst($userdata['0']->lname) . " " . ucfirst($userdata['0']->fname) ?>
                </h4>
                <div class="card shadow mt-2">
                    <div class="card-header text-white" id="accordionSidebar">
                        Personal Information
                    </div>
                    <div class="row card-body">

                        <div class="form-group col-md-4">
                            <label class="font-italic">Last Name:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->lname); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">First Name: </label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->fname); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Middle Name:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->mname); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Nickame:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->nname); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Suffix:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->mname); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Age:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->age); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Date of Birth:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->datebirth); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Place of Birth:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->placebirth); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Civil Status:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->civilstat); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Gender:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->gender); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Religion:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->religion); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Occupation:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->occupation); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Mobile:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->mobile); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">4ps:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->forkeeps); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">PWD:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->pwd); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Voter:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->voters); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Precinct:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->precinct); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Household:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->household_desc); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Purok:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->purok_desc); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Barangay:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->barangay); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Municipality:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->municipality); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Province:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->province); ?> </label>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="font-italic">Region:</label>
                            <label class="font-weight-bold"> <?= strtoupper($userdata['0']->region); ?> </label>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>




<?= $this->endSection(""); ?>