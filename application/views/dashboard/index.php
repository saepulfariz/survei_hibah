<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        DASHBOARD
                    </div>
                    <div class="card-body">
                        <p>Selamat Datang, Sistem Informasi Pengelolaan Data Bantuan Hibah. Login Sebagai <b><?= $this->session->userdata('username'); ?></b></p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 mb-2">
                <div class="card">
                    <div class="card-header">
                        TIM SURVEI
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Check</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($tim_survei as $d) : ?>
                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $d['username']; ?></td>
                                        <td><?= $d['nama_role']; ?></td>
                                        <td><?= $d['cek']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card mb-2">
                    <div class="card-header">
                        SURVEI BELUM VALID
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Ket Lembaga</td>
                                    <td>Nama Lembaga</td>
                                    <td>Alamat Lembaga</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($novalid as $d) : ?>
                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $d['ket_lembaga']; ?></td>
                                        <td><?= $d['nama_lembaga']; ?></td>
                                        <td><?= $d['alamat_lembaga']; ?></td>
                                        <td><?= ($d['is_valid'] == 0) ? '<button class="btn btn-sm btn-secondary">Belum Valid</button>' : '<button class="btn btn-sm btn-success">Valid</button>'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header">
                        SURVEI VALID
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Ket Lembaga</td>
                                    <td>Nama Lembaga</td>
                                    <td>Alamat Lembaga</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($valid as $d) : ?>
                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $d['ket_lembaga']; ?></td>
                                        <td><?= $d['nama_lembaga']; ?></td>
                                        <td><?= $d['alamat_lembaga']; ?></td>
                                        <td><?= ($d['is_valid'] == 0) ? '<button class="btn btn-sm btn-secondary">Belum Valid</button>' : '<button class="btn btn-sm btn-success">Valid</button>'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>