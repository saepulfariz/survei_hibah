<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | SURVEI HIBAH</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- pace-progress -->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/pace-progress/themes/black/pace-theme-flat-top.css"> -->
    <!-- adminlte-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">


    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">


    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/DataTables/datatables.min.css" />


</head>

<body class="hold-transition sidebar-mini layout-fixed pace-primary">
    <?= $this->alert->get(); ?>
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <?php $this->view('template/topbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->view('template/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?= $contents ?>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="<?= base_url(); ?>">SURVEI HIBAH</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url(); ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?= base_url(); ?>assets/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?= base_url(); ?>assets/dist/js/pages/dashboard.js"></script> -->

    <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>

    <!-- Select2 -->
    <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $.fn.select2.defaults.set("theme", "bootstrap");

        //Initialize Select2 Elements
        // $('.select2bs4').select2({
        //     theme: 'bootstrap4'
        // })

        $('select.form-control').select2({
            theme: 'bootstrap4',
            width: '100%' // need to override the changed default
            // width: 'resolve' // need to override the changed default
        })
    </script>


    <!-- <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/responsive/js/dataTables.responsive.min.js">
    </script> -->

    <script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/datatables.min.js"></script>

    <!-- pace-progress -->
    <script src="<?= base_url(); ?>assets/plugins/pace-progress/pace.min.js"></script>


    <!-- <script src="<?= base_url(); ?>assets/fullcalendar/main.js"></script>
    <script src="<?= base_url(); ?>assets/fullcalendar/moment.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.3/fullcalendar.min.js"></script> -->
    <!-- <script src="<?= base_url(); ?>assets/moment.js/2.7.0/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/fullcalendar/2.0.3/fullcalendar.min.js"></script> -->
    <?= $this->alert->init('jquery'); ?>

    <script>
        var table = $('#table').DataTable({
            responsive: true,
            "dom": 'Bflrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ],
            "pageLength": 5,
            "lengthMenu": [
                [5, 100, 1000, -1],
                [5, 100, 1000, "ALL"],
            ],

        })

        function setLabel() {
            var valueLembaga = $('#ket_lembaga').val();

            if (valueLembaga == 'Lembaga') {
                var res = 'Pimpinan';
            } else if (valueLembaga == 'Ormas') {
                var res = 'Ketua';
            } else if (valueLembaga == 'Kelompok') {
                var res = 'Ketua';
            }
            $('#res_label_ketua').html(res);
            $('#label_ketua').val(res);
        }

        $('#ket_lembaga').on('change', function() {

            setLabel();
        })
        setLabel();


        $('#btn-rab').on('click', function() {
            var idRab = $('#id_rab').val();
            var nama = $('#nama').val();
            var qty = $('#qty').val();
            var harga = $('#harga').val();

            if (idRab != '') {
                // maka edit
                $.ajax({
                    url: '<?= base_url(); ?>rab/' + idRab,
                    method: 'POST', // POST
                    data: {
                        nama: nama,
                        qty: qty,
                        harga: harga,
                    },
                    dataType: 'json', // json
                    success: function(data) {

                        Swal.fire({
                            icon: data.icon,
                            title: data.title,
                            text: data.text
                        })

                        reloadRab();
                    }
                });
            } else {
                // maka new
                $.ajax({
                    url: '<?= base_url(); ?>rab',
                    method: 'POST', // POST
                    data: {
                        nama: nama,
                        qty: qty,
                        harga: harga,
                    },
                    dataType: 'json', // json
                    success: function(data) {

                        Swal.fire({
                            icon: data.icon,
                            title: data.title,
                            text: data.text
                        })

                        reloadRab();
                    }
                });
            }
        })

        function reloadRab() {
            var tableRab = $('#res-rab');
            if (tableRab) {

                $.ajax({
                    url: '<?= base_url(); ?>rab',
                    method: 'GET', // POST
                    dataType: 'json', // json
                    success: function(data) {
                        var resTable = '';
                        var no = 1;
                        var total = 0;
                        for (let index = 0; index < data.length; index++) {
                            total += parseInt(data[index].total);
                            resTable += `<tr>
                                            <td>` + no + `</td>
                                            <td>` + data[index].nama + `</td>
                                            <td>` + data[index].qty + `</td>
                                            <td>` + data[index].harga + `</td>
                                            <td>` + data[index].total + `</td>
                                            <td>
                                                <button type="button" onclick="rabEdit(` + data[index].id_rab + `)" data-id="` + data[index].id_rab + `" class="btn btn-sm btn-warning">Edit</button>
                                                <button type="button" onclick="rabDelete(` + data[index].id_rab + `)" data-id="` + data[index].id_rab + `" class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>`;
                            no++;
                        }
                        $('#res-rab').html(resTable);

                        $('#nama').val('');
                        $('#qty').val('');
                        $('#harga').val('');
                        $('#total').val('');
                        $('#id_rab').val('');
                        $('#usulan').val(total);

                        $('#rabModal').modal('hide');
                    }
                });
            }
        }

        function rabNew() {
            reloadRab();
            $('#rabModalLabel').html('Tambah RAB');
            $('#rabModal').modal('show');
        }

        function rabEdit(id) {
            $.ajax({
                url: '<?= base_url(); ?>rab/' + id + '/edit',
                method: 'GET', // POST
                dataType: 'json', // json
                success: function(data) {

                    if (data.icon == 'warning') {
                        Swal.fire({
                            icon: data.icon,
                            title: data.title,
                            text: data.text
                        })
                    } else {

                        $('#id_rab').val(data.id_rab);
                        $('#nama').val(data.nama);
                        $('#qty').val(data.qty);
                        $('#harga').val(data.harga);
                        $('#total').val(data.total);
                    }


                    $('#rabModalLabel').html('Edit RAB');
                    $('#rabModal').modal('show');
                }
            });
        }

        function rabDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: '',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '<?= base_url(); ?>rab/' + id + '/delete',
                        method: 'GET', // POST
                        dataType: 'json', // json
                        success: function(data) {
                            Swal.fire({
                                icon: data.icon,
                                title: data.title,
                                text: data.text
                            })

                            reloadRab();
                        }
                    });
                }
            })
        }

        reloadRab();
    </script>
</body>

</html>