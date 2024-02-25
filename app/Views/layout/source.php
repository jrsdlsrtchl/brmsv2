    <!-- Custom made script for this project-->
    <script src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>

    <!-- Preload -->
    <script src="<?= base_url() . 'public/vendors/scripts/core.js' ?>"></script>
    <script src="<?= base_url() . 'public/vendors/scripts/script.min.js' ?>"></script>
    <script src="<?= base_url() . 'public/vendors/scripts/process.js' ?>"></script>
    <script src="<?= base_url() . 'public/vendors/scripts/layout-settings.js' ?>"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() . 'assets/vendor/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() . 'assets/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() . 'assets/js/sb-admin-2.min.js' ?>"></script>

    <!-- Page level plugins for Tables-->
    <script src="<?php echo base_url() . 'assets/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatables/dataTables.bootstrap4.min.js' ?>"></script>

    <!-- Page level custom scripts for Tables-->
    <script src="<?php echo base_url() . 'assets/js/demo/datatables-demo.js' ?>"></script>

    <script>
        $(document).ready(function() {
            $("#fetchpurok").on('change', function() {
                var value = $(this).val();
                // alert(value);

                $.ajax({
                    method: "GET", // GET, POST, PUT, DELETE, PATCH
                    url: "http://localhost/brmsv2/residentcontroller/selectHH",
                    data: {
                        'puroknumber': value,
                    },
                    success: function(response) {

                        var select = $("#selecthouse")

                        if (response) {
                            $("#selecthouse").empty()
                            response.forEach((household) => {
                                var option = $("<option></option>")
                                option.text(`${household.household_desc}`)
                                // option.text(`${household.lname} ${household.fname} ${"Household"}`) // concat 
                                option.val(household.household_id) // val

                                // <option value="2">This is the text</option>

                                select.append(option) // append
                            })
                        }
                    }
                });

            });
        });
    </script>



    </body>

    </html>