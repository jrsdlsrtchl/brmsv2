<!-- Modal for deleting data -->
<?php foreach ($residents as $res) { ?>
    <div class="modal fade" id="deleteResident<?= $res->uniid; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteResidentLabel" aria-hidden="true">
        <div class="modal-dialog rounded-0" role="document">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteResidentLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to delete <strong> <?= $res->fname . " " . $res->lname; ?></strong> ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm rounded-0" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-sm rounded-0" href="<?php echo base_url() ?>residentcontroller/deleteresident/<?= $res->uniid; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>