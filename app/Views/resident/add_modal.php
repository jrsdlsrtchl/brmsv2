    <!-- Modal for adding new data -->
    <div class="modal fade" id="addResident" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formaddResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formaddResidentLabel">Add Resident Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="<?= base_url(); ?>residentcontroller/resident">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">

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
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter contact no.">
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
                                    <label>Ethinicity</label>
                                    <select name="ethnic" class="form-control">
                                        <option value="" hidden>Select Ethnicity</option>
                                        <option value="Tagalog">Tagalog</option>
                                        <option value="Bisaya">Bisaya</option>
                                        <option value="Ilocano">Ilocano</option>
                                        <option value="Cebuano">Cebuano</option>
                                        <option value="Illonggo">Illonggo</option>
                                        <option value="Bicol">Bicol</option>
                                        <option value="Waray">Waray</option>
                                        <option value="Kapampangan">Kapampangan</option>
                                        <option value="Maranao">Maranao</option>
                                        <option value="Maguindanao">Illonggo</option>
                                        <option value="Tausog">Tausog</option>
                                        <option value="Pangasinan">Pangasinan</option>
                                    </select>
                                </div>

                                <!-- Fifth Row -->
                                <div class="form-group col-xl-6">
                                    <label>Educational Attainment</label>
                                    <select name="education" class="form-control">
                                        <option value="" hidden>Select Educational Status</option>
                                        <option value="None">None</option>
                                        <option value="ALS">ALS</option>
                                        <option value="Vocational">Vocational</option>
                                        <option value="Pre-school">Pre-school</option>
                                        <option value="Elem. Student">Elem. Student</option>
                                        <option value="Elem. Undergrad">Elem. Undergrad</option>
                                        <option value="Elem. Graduate">Elem. Graduate</option>
                                        <option value="HS Student">HS Student</option>
                                        <option value="HS Ungrad">HS Ungrad</option>
                                        <option value="HS Graduate">HS Graduate</option>
                                        <option value="SHS Student">SHS Student</option>
                                        <option value="SHS Undergrad">SHS Undergrad</option>
                                        <option value="College Undergrad">SHS Graduate</option>
                                        <option value="College Student">College Student</option>
                                        <option value="College Undergrad">College Undergrad</option>
                                        <option value="College Gradaute">College Gradaute</option>
                                        <option value="Post Grad">Post Grad</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-6">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control" name="occupation" placeholder="Enter occupation">
                                </div>

                                <!-- Sixth Row -->
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
                                    <select name="voters" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <!-- Seventh Row -->
                                <div class="form-group col-xl-4">
                                    <label>Precinct</label>
                                    <select name="precinct" class="form-control" aria-placeholder="">
                                        <option value="" hidden>Select Precinct</option>
                                        <option value="0023A">0023A</option>
                                        <option value="0025B">0025B</option>
                                        <option value="0017C">0017C</option>
                                        <option value="0021A">0021A</option>
                                        <option value="0019B">0019B</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Purok</label>
                                    <select name="purok_id" class="form-control" id="fetchpurok">
                                        <option value="" hidden>Select Purok</option>
                                        <?php foreach ($purok as $pur) { ?>
                                            <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                                        <?php }; ?>
                                    </select>
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Household</label>
                                    <select name="household_id" class="form-control" id="selecthouse">
                                        <option value="" hidden>Select Household</option>
                                        <option value=""></option>
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer d-flex mx-4 mb-4">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" id="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>