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

<div id="preloader"></div>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Resident</h1>
        <hr />
        <a href="#" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addResident">
            <i class="fa-solid fa-user-plus"></i> Add Resident
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Residents Information Table</h6>
        </div>

        <!-- Message Prompt -->
        <?php if ($page_session->getTempdata('success')) : ?>
            <div id="hidemessage" class="badge badge-success pt-2">
                <h6>
                    <?= $page_session->getTempdata('success'); ?>
                </h6>
            </div>
        <?php endif; ?>
        <?php if ($page_session->getTempdata('error')) : ?>
            <div id="hidemessage" class="badge badge-danger pt-2">
                <h6>
                    <?= $page_session->getTempdata('error'); ?>
                </h6>
            </div>
        <?php endif; ?>

        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">
                            <th> Last Name </th>
                            <th> First Name </th>
                            <th> Middle Name </th>
                            <th> Gender </th>
                            <th> Age </th>
                            <th> Mobile </th>
                            <th> Date of Birth </th>
                            <th> Household </th>
                            <th> Purok </th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($residents as $res) { ?>

                            <tr>
                                <td> <?= $res->lname; ?> </td>
                                <td> <?= $res->fname; ?> </td>
                                <td> <?= $res->mname; ?> </td>
                                <td> <?= $res->gender; ?> </td>
                                <td> <?= $res->age; ?> </td>
                                <td> <?= $res->mobile; ?> </td>
                                <td> <?= $res->datebirth; ?> </td>
                                <td> <?= $res->household_desc; ?> </td>
                                <td> <?= $res->purok_desc; ?> </td>
                                <td>

                                    <a href="#" data-toggle="modal" data-target="#editResident<?php echo $res->uniid ?>">
                                        <i class="fas fa-edit " style="color:green"></i>
                                    </a> |

                                    <a href="#" data-toggle="modal" data-target="#deleteResident<?php echo $res->uniid ?>">
                                        <i class="fa-solid fa-trash-can" style="color:red"></i>
                                    </a> |

                                    <a href="<?= base_url(); ?>residentcontroller/viewresonly/<?= $res->uniid; ?>"><i class="fas fa-eye" style="color:blue"></i></a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Add Resident Modal -->
    <?= $this->include("resident/add_modal"); ?>

    <!-- Edit Resident Modal -->
    <?= $this->include("resident/edit_modal"); ?>

    <!-- Delete Resident Modal -->
    <?= $this->include("resident/delete_modal"); ?>

</div>

<?= $this->endSection(""); ?>