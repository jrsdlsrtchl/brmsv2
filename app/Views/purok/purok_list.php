<?= $this->extend("layout/base"); ?>

<?= $this->section("content"); ?>

<style>
    a {
        color: gray;
    }

    a:hover {
        text-decoration: none;
    }
</style>


<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Purok</h1>
        <hr />
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Puroks List Information</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Puroks </th>
                            <th> Population </th>
                            <th> Households </th>
                            <th> Action </th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                Purok-1
                            </td>
                            <td> <?= $purokOne; ?></td>
                            <td> <?= $hhOne; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "1" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Purok-2
                            </td>
                            <td> <?= $purokTwo; ?> </td>
                            <td> <?= $hhTwo; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "2" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Purok-3
                            </td>
                            <td> <?= $purokThree; ?> </td>
                            <td> <?= $hhThree; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "3" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Purok-4
                            </td>
                            <td> <?= $purokFour; ?> </td>
                            <td> <?= $hhFour; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "4" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Purok-5
                            </td>
                            <td> <?= $purokFive; ?> </td>
                            <td> <?= $hhFive; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "5" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Purok-6
                            </td>
                            <td> <?= $purokSix; ?> </td>
                            <td> <?= $hhSix; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "6" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Purok-7
                            </td>
                            <td> <?= $purokSeven; ?> </td>
                            <td> <?= $hhSeven; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>/purokcontroller/viewpuroklist/<?= $puroknumber = "7" ?>">
                                    <i class="fas fa-eye" style="color:blue"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>