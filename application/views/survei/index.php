<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Survei</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item">Kelola Survei</li>
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
                <?php if ($this->session->userdata('id_role') != 3) : ?>
                    <a href="<?= base_url('survei/new'); ?>" class="btn btn-primary btn-sm mb-2">Tambah</a>

                <?php else : ?>

                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        Kelola Survei
                    </div>
                    <div class="card-body">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Ket Lembaga</th>
                                    <th>Nama Lembaga</th>
                                    <th>Alamat Lembaga</th>
                                    <th>Verifikasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($survei as $d) : ?>
                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $d['ket_lembaga']; ?></td>
                                        <td><?= $d['nama_lembaga']; ?></td>
                                        <td><?= $d['alamat_lembaga']; ?></td>
                                        <td><?= ($d['is_valid'] == 0) ? '<button class="btn btn-sm btn-secondary">Belum Valid</button>' : '<button class="btn btn-sm btn-success">Valid</button>'; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm mb-2" href="<?= base_url('survei/' . $d['id_survei']); ?>">Detail</a>
                                            <?php if ($this->session->userdata('id_role') != 3) : ?>

                                                <a class="btn btn-warning btn-sm mb-2" href="<?= base_url('survei/' . $d['id_survei'] . '/edit'); ?>">Edit</a>
                                                <a class="btn btn-danger btn-sm mb-2 del-tombol" href="<?= base_url('survei/' . $d['id_survei'] . '/delete'); ?>">Delete</a>
                                            <?php else : ?>

                                            <?php endif; ?>

                                        </td>
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