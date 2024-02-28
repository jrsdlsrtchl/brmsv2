<!-- Modal for editing data -->
<?php foreach ($residents as $res) { ?>

    <div class="modal fade" id="editResident<?= $res->uniid; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formeditResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formeditResidentLabel">Edit Resident Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="<?= base_url(); ?>residentcontroller/editresident/<?= $res->uniid; ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">

                                <!-- First Row -->
                                <div class="form-group col-xl-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter last name" value="<?= $res->lname; ?>">
                                </div>

                                <div class="form-group col-xl-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter first name" value="<?= $res->fname; ?>">
                                </div>

                                <!-- Second Row -->
                                <div class="form-group col-xl-6">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="mname" placeholder="Enter middle name" value="<?= $res->mname; ?>">
                                </div>
                                <div class="form-group col-xl-2">
                                    <label>Suffix</label>
                                    <input type="text" class="form-control" name="suffix" placeholder="Enter suffix" value="<?= $res->suffix; ?>">
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Nickname</label>
                                    <input type="text" class="form-control" name="nname" placeholder="Enter nickname" value="<?= $res->nname; ?>">
                                </div>

                                <!-- Third Row -->
                                <div class="form-group col-xl-3">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Male" <?= $res->gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?= $res->gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-2">
                                    <label>Age</label>
                                    <input type="text" class="form-control" name="age" placeholder="Enter age" value="<?= $res->age; ?>">
                                </div>


                                <div class=" form-group col-xl-3">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="datebirth" value="<?= $res->datebirth; ?>">
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Civil Status</label>
                                    <select name="civilstat" class="form-control">
                                        <option value="" hidden>Select Civil Status</option>
                                        <option value="Single" <?= $res->civilstat == 'Single' ? 'selected' : ''; ?>>Single</option>
                                        <option value="Married" <?= $res->civilstat == 'Married' ? 'selected' : ''; ?>>Married</option>
                                        <option value="Widow" <?= $res->civilstat == 'Widow' ? 'selected' : ''; ?>>Widow/er</option>
                                        <option value="Separated" <?= $res->civilstat == 'Separated' ? 'selected' : ''; ?>>Separated</option>
                                        <option value="Cohabitation" <?= $res->civilstat == 'Cohabitation' ? 'selected' : ''; ?>>Cohabitation</option>
                                    </select>
                                </div>

                                <!-- Fourth Row -->
                                <div class="form-group col-xl-6">
                                    <label>Place of Birth</label>
                                    <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth" value="<?= $res->placebirth; ?>">
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Citizenship</label>
                                    <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship" value="<?= $res->citizenship; ?>">
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter contact no." value="<?= $res->mobile; ?>">
                                </div>

                                <!-- Fifth Row -->
                                <div class="form-group col-xl-6">
                                    <label>Religion</label>
                                    <select name="religion" class="form-control">
                                        <option value="" hidden>Select Religion</option>
                                        <option value="Roman Catholic" <?= $res->religion == 'Roman Catholic' ? 'selected' : ''; ?>>Roman Catholic</option>
                                        <option value="Iglesia Ni Cristo" <?= $res->religion == 'Iglesia Ni Cristo' ? 'selected' : ''; ?>>Iglesia Ni Cristo</option>
                                        <option value="Islam" <?= $res->religion == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                        <option value="Baptist" <?= $res->religion == 'Baptist' ? 'selected' : ''; ?>>Baptist</option>
                                        <option value="Born Again" <?= $res->religion == 'Born Again' ? 'selected' : ''; ?>>Born Again</option>
                                        <option value="Johovahs Witnesss" <?= $res->religion == 'Johovahs Witnesss' ? 'selected' : ''; ?>>Johovahs Witnesss</option>
                                        <option value="Protestant" <?= $res->religion == 'Protestant' ? 'selected' : ''; ?>>Protestant</option>
                                        <option value="Seventh Day Adventist" <?= $res->religion == 'Seventh Day Adventist' ? 'selected' : ''; ?>>Seventh Day Adventist</option>
                                        <option value="Filipinista" <?= $res->religion == 'Filipinista' ? 'selected' : ''; ?>>Filipinista</option>
                                        <option value="Other" <?= $res->religion == 'Other' ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-6">
                                    <label>Ethinicity</label>
                                    <select name="ethnic" class="form-control">
                                        <option value="" hidden>Select Ethnicity</option>
                                        <option value="Tagalog" <?= $res->ethnic == 'Tagalog' ? 'selected' : ''; ?>>Tagalog</option>
                                        <option value="Bisaya" <?= $res->ethnic == 'Bisaya' ? 'selected' : ''; ?>>Bisaya</option>
                                        <option value="Ilocano" <?= $res->ethnic == 'Ilocano' ? 'selected' : ''; ?>>Ilocano</option>
                                        <option value="Cebuano" <?= $res->ethnic == 'Cebuano' ? 'selected' : ''; ?>>Cebuano</option>
                                        <option value="Illonggo" <?= $res->ethnic == 'Illonggo' ? 'selected' : ''; ?>>Illonggo</option>
                                        <option value="Bicol" <?= $res->ethnic == 'Bicol' ? 'selected' : ''; ?>>Bicol</option>
                                        <option value="Waray" <?= $res->ethnic == 'Waray' ? 'selected' : ''; ?>>Waray</option>
                                        <option value="Kapampangan" <?= $res->ethnic == 'Kapampangan' ? 'selected' : ''; ?>>Kapampangan</option>
                                        <option value="Maranao" <?= $res->ethnic == 'Maranao' ? 'selected' : ''; ?>>Maranao</option>
                                        <option value="Maguindanao" <?= $res->ethnic == 'Maguindanao' ? 'selected' : ''; ?>>Illonggo</option>
                                        <option value="Tausog" <?= $res->ethnic == 'Tausog' ? 'selected' : ''; ?>>Tausog</option>
                                        <option value="Pangasinan" <?= $res->ethnic == 'Pangasinan' ? 'selected' : ''; ?>>Pangasinan</option>
                                    </select>
                                </div>

                                <!-- Fifth Row -->
                                <div class="form-group col-xl-6">
                                    <label>Educational Attainment</label>
                                    <select name="education" class="form-control">
                                        <option value="" hidden>Select Educational Status</option>
                                        <option value="None" <?= $res->education == 'None' ? 'selected' : ''; ?>>None</option>
                                        <option value="ALS" <?= $res->education == 'ALS' ? 'selected' : ''; ?>>ALS</option>
                                        <option value="Vocational" <?= $res->education == 'Vocational' ? 'selected' : ''; ?>>Vocational</option>
                                        <option value="Pre-school" <?= $res->education == 'Pre-school' ? 'selected' : ''; ?>>Pre-school</option>
                                        <option value="Elem. Student" <?= $res->education == 'Elem. Student' ? 'selected' : ''; ?>>Elem. Student</option>
                                        <option value="Elem. Undergrad" <?= $res->education == 'Elem. Undergrad' ? 'selected' : ''; ?>>Elem. Undergrad</option>
                                        <option value="Elem. Graduate" <?= $res->education == 'Elem. Graduate' ? 'selected' : ''; ?>>Elem. Graduate</option>
                                        <option value="HS Student" <?= $res->education == 'HS Student' ? 'selected' : ''; ?>>HS Student</option>
                                        <option value="HS Ungrad" <?= $res->education == 'HS Ungrad' ? 'selected' : ''; ?>>HS Ungrad</option>
                                        <option value="HS Graduate" <?= $res->education == 'HS Graduate' ? 'selected' : ''; ?>>HS Graduate</option>
                                        <option value="SHS Student" <?= $res->education == 'SHS Student' ? 'selected' : ''; ?>>SHS Student</option>
                                        <option value="SHS Undergrad" <?= $res->education == 'SHS Undergrad' ? 'selected' : ''; ?>>SHS Undergrad</option>
                                        <option value="College Undergrad" <?= $res->education == 'College Undergrad' ? 'selected' : ''; ?>>SHS Graduate</option>
                                        <option value="College Student" <?= $res->education == 'College Student' ? 'selected' : ''; ?>>College Student</option>
                                        <option value="College Undergrad" <?= $res->education == 'College Undergrad' ? 'selected' : ''; ?>>College Undergrad</option>
                                        <option value="College Gradaute" <?= $res->education == 'College Gradaute' ? 'selected' : ''; ?>>College Gradaute</option>
                                        <option value="Post Grad" <?= $res->education == 'Post Grad' ? 'selected' : ''; ?>>Post Grad</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-6">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control" name="occupation" placeholder="Enter occupation" value="<?= $res->occupation; ?>">
                                </div>

                                <!-- Sixth Row -->
                                <div class="form-group col-xl-3">
                                    <label>4P's</label>
                                    <select name="forkeeps" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes" <?= $res->forkeeps == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="No" <?= $res->forkeeps == 'No' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>PWD</label>
                                    <select name="pwd" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes" <?= $res->pwd == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="No" <?= $res->pwd == 'No' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Senior Citizen</label>
                                    <select name="senior_citizen" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes" <?= $res->senior_citizen == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="No" <?= $res->senior_citizen == 'No' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label>Brgy. Official</label>
                                    <select name="official" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes" <?= $res->voters == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="No" <?= $res->voters == 'No' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>

                                <!-- Seventh Row -->
                                <div class="form-group col-xl-2">
                                    <label>Voter</label>
                                    <select name="voters" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Yes" <?= $res->voters == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="No" <?= $res->voters == 'No' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-5">
                                    <label>Precinct</label>
                                    <select name="precinct" class="form-control" aria-placeholder="">
                                        <option value="" hidden>Select Precinct</option>
                                        <option value="0023A" <?= $res->precinct == '0023A' ? 'selected' : ''; ?>>0023A</option>
                                        <option value="0025B" <?= $res->precinct == '0025B' ? 'selected' : ''; ?>>0025B</option>
                                        <option value="0017C" <?= $res->precinct == '0017C' ? 'selected' : ''; ?>>0017C</option>
                                        <option value="0021A" <?= $res->precinct == '0021A' ? 'selected' : ''; ?>>0021A</option>
                                        <option value="0019B" <?= $res->precinct == '0019B' ? 'selected' : ''; ?>>0019B</option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-5">
                                    <label>Purok</label>
                                    <select name="purok_id" class="form-control" id="fetchpurok1">
                                        <option value="" hidden>Select Purok</option>
                                        <?php foreach ($purok as $pur) {
                                            $userID = $pur->purok_id;
                                            $isSelected = $res->purok_id === $userID ? 'selected' : '';
                                        ?>
                                            <option value="<?= $userID; ?> " <?= $isSelected; ?>> <?= $pur->purok_desc; ?> </option>
                                        <?php }; ?>
                                    </select>
                                </div>

                                <!-- Eigth Row -->
                                <div class="form-group col-xl-4">
                                    <label>User Type</label>
                                    <select name="user_type" class="form-control">
                                        <option value="" hidden>Select User Type</option>
                                        <option value="Resident" <?= $res->user_type == 'Resident' ? 'selected' : ''; ?>> Resident </option>
                                        <option value="Admin" <?= $res->user_type == 'Admin' ? 'selected' : ''; ?>> Admin </option>
                                    </select>
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter email" value="<?= $res->email; ?>">
                                </div>

                                <div class="form-group col-xl-4">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Enter password" value="<?= $res->password; ?>">
                                </div>



                            </div>
                            <div class="modal-footer d-flex mx-4 mb-4">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" id="submit" class="flex-fill btn btn-primary rounded-0">Update</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }; ?>