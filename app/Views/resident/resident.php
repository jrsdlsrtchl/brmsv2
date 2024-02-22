<?= $this->extend("layout/base"); ?>

<?= $this->section("content"); ?>

<script>
    setTimeout(function() {
        $("#hidemessage").hide();
    }, 3000);
</script>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Resident</h1>

        <hr />

        <a href="#" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addResident">
            <i class="fa-solid fa-user-plus"></i> Add Resident
        </a>
    </div>

    <!-- Modal for adding new data -->
    <div class="modal fade" id="addResident" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formaddResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="formaddResidentLabel">Add Resident Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body">

                                <!-- First Row -->
                                <div class="form-group col-xl-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                                </div>

                                <div class="form-group col-xl-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                                </div>

                                <!-- Second Row -->
                                <div class="form-group col-xl-6">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="mname" placeholder="Enter middle name">
                                </div>
                                <div class="form-group col-xl-2">
                                    <label>Suffix</label>
                                    <input type="text" class="form-control" name="suffix" placeholder="Enter suffix">
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Nickname</label>
                                    <input type="text" class="form-control" name="nname" placeholder="Enter nickname">
                                </div>

                                <!-- Third Row -->
                                <div class="form-group col-xl-3">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-2">
                                    <label>Age</label>
                                    <input type="text" class="form-control" name="age" placeholder="Enter age">
                                </div>


                                <div class="form-group col-xl-3">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="datebirth">
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Civil Status</label>
                                    <select name="civilstat" class="form-control">
                                        <option value="" hidden>Select Civil Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow">Widow/er</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Cohabitation">Cohabitation</option>
                                    </select>
                                </div>

                                <!-- Fourth Row -->
                                <div class="form-group col-xl-6">
                                    <label>Place of Birth</label>
                                    <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth">
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Citizenship</label>
                                    <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship">
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter mobile">
                                </div>

                                <!-- Fifth Row -->
                                <div class="form-group col-xl-6">
                                    <label>Religion</label>
                                    <select name="religion" class="form-control">
                                        <option value="" hidden>Select Religion</option>
                                        <option value="Roman Catholic">Roman Catholic</option>
                                        <option value="Iglesia Ni Cristo">Iglesia Ni Cristo</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Baptist">Baptist</option>
                                        <option value="Born Again">Born Again</option>
                                        <option value="Johovahs Witnesss">Johovahs Witnesss</option>
                                        <option value="Protestant">Protestant</option>
                                        <option value="Seventh Day Adventist">Seventh Day Adventist</option>
                                        <option value="Filipinista">Filipinista</option>
                                        <option value="Filipinista">Other</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-6">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control" name="occupation" placeholder="Enter occupation">
                                </div>

                                <!-- Fifth Row -->
                                <div class="form-group col-xl-3">
                                    <label>4P's</label>
                                    <select name="forkeeps" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>PWD</label>
                                    <select name="pwd" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Senior Citizen</label>
                                    <select name="senior_citizen" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Voter</label>
                                    <select name="voter" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <!-- Sixth Row -->
                                <div class="form-group col-xl-4">
                                    <label>Precinct</label>
                                    <select name="precinct" class="form-control" id="selecthouse">
                                        <option value="" hidden>Select Precinct</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Purok</label>
                                    <select name="purok_id" class="form-control" id="fetchpurok">
                                        <option value="" hidden>Select Purok</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Household</label>
                                    <select name="household_id" class="form-control" id="selecthouse">
                                        <option value="" hidden></option>
                                    </select>
                                </div>


                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(""); ?>