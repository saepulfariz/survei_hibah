<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN | Sistem Informasi Pengelolaan Data Bantuan Hibah</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">


    <style>
        .error {
            color: red;
            font-weight: 400;
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }

        .form-control.error {
            border-color: red;
            padding: .375rem .75rem;
        }
    </style>
</head>

<body class="hold-transition login-page">




    <?= $this->alert->get(); ?>
    <div class="login-box">
        <!-- /.login-logo -->
        <h4 class='text-center'>Sistem Informasi Pengelolaan Data Bantuan Hibah</h4>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url(); ?>" class="h1"></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Masukkan username dan password</p>

                <form action="<?= base_url(); ?>auth/proses_login" method="post">


                    <div class="input-group">
                        <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username Or Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('username', '<div class="error text-danger">', '</div>'); ?>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('password', '<div class="error text-danger">', '</div>'); ?>
                    <div class="row mt-3">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>

    <script>
        function fixAlert() {
            // var alertShow = document.getElementsByClassName('swal2-shown');
            // script by saepulfariz 3/12/2022
            var alertShow = document.getElementsByClassName('swal2-height-auto');

            if (alertShow) {
                document.body.classList.remove('swal2-height-auto');
            }
        }
        fixAlert();
        setInterval(fixAlert, 5);
    </script>

    <?= $this->alert->init('jquery'); ?>
</body>

</html>