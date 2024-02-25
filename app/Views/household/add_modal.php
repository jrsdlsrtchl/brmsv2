    <!-- Modal for adding new data -->
    <div class="modal fade" id="addHousehold" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formaddHousehold" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formaddHouseholdLabel">Add Household </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="<?= base_url(); ?>residentcontroller/resident">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">

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