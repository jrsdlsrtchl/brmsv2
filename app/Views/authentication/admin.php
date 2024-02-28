<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/authentication/style.css" />
    <title>Sign in Form</title>

    <style>
        .text-danger-span {
            padding: 10px;
            color: white;
            background-color: #ff4d6d;
            border-radius: 10px;
        }

        .text-danger {
            color: red;
        }

        .text-success {
            padding: 10px;
            color: white;
            background-color: #2dc653;
            border-radius: 10px;
        }
    </style>

    <script>
        setTimeout(function() {
            $("#hidemessage").hide();
        }, 4000);

        setTimeout(function() {
            $(".text-danger").hide();
        }, 4000);
    </script>

</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?= base_url() ?>AuthenticationController/adminlogin" method="post" class="sign-in-form">
                    <img src="<?= base_url() ?>assets/img/rawan_logo.png" alt="" width="150px">
                    <h2 class="title">Administrator</h2>

                    <?php
                    if ($page_session->getTempdata('error')) { ?>
                        <span class="text-danger-span" id="hidemessage"> <?= $page_session->getTempdata('error'); ?> </span>
                    <?php } ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Administrator" value="<?= set_value('email') ?>" />
                    </div>
                    <span class="text-danger"> <?= display_error($validation, 'email') ?></span>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <span class="text-danger"> <?= display_error($validation, 'password') ?></span>

                    <input type="submit" value="Login" class="btn solid" />

                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h1>Welcome to Admin! </h1>
                    <h3>Log-in Page</h3>
                    <br>
                    <p> This login page for the Administrator of the barangay only. <br> Please refrain from logging in if you are not an admin. Thank you. </p>
                    <button class="btn transparent">
                        <a href="<?= base_url() ?>authenticationcontroller/register">Home</a>
                    </button>
                </div>
                <img src="" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="<?= base_url() ?>assets/js/authentication/app.js"></script>
</body>

</html>