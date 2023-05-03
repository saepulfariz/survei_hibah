<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Administrasi Survei</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item">Kelola Survei</li>
                    <li class="breadcrumb-item active">Administrasi</li>
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
        <form action="<?= base_url('survei'); ?>" method="post">
            <div class="row">
                <div class="col-md-5 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="ket_lembaga">Ket Lembaga</label>
                                <select name="ket_lembaga" id="ket_lembaga" class="form-control" disabled readonly>
                                    <?php foreach ($ket_lembaga as $d) : ?>
                                        <?php if ($d == $survei['key_lembaga']) : ?>

                                            <option selected value="<?= $d; ?>"><?= $d; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d; ?>"><?= $d; ?></option>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('ket_lembaga', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nama_lembaga">Nama</label>
                                <input type="text" class="form-control" readonly id="nama_lembaga" name="nama_lembaga" placeholder="nama_lembaga" value="<?= $survei['nama_lembaga']; ?>">
                            </div>
                            <?= form_error('nama_lembaga', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="alamat_lembaga">Alamat</label>
                                <input type="text" class="form-control" readonly id="alamat_lembaga" name="alamat_lembaga" placeholder="alamat_lembaga" value="<?= $survei['alamat_lembaga']; ?>">
                            </div>
                            <?= form_error('alamat_lembaga', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                        </div>
                    </div>
                </div>

                <div class="col-md-7 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" id="label_ketua" name="label_ketua">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="ketua_nama" id="res_label_ketua">Ketua</label>
                                        <input type="text" class="form-control" readonly id="ketua_nama" name="ketua_nama" placeholder="Nama" value="<?= $survei['ketua_nama']; ?>">
                                    </div>
                                    <?= form_error('ketua_nama', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="ketua_nik">NIK</label>
                                        <input type="text" class="form-control" readonly id="ketua_nik" name="ketua_nik" placeholder="NIK" value="<?= $survei['ketua_nik']; ?>">
                                    </div>
                                    <?= form_error('ketua_nik', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="sekretaris_nama">Sekretaris</label>
                                        <input type="text" class="form-control" readonly id="sekretaris_nama" name="sekretaris_nama" placeholder="Nama" value="<?= $survei['sekretaris_nama']; ?>">
                                    </div>
                                    <?= form_error('sekretaris_nama', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="sekretaris_nik">NIK</label>
                                        <input type="text" class="form-control" readonly id="sekretaris_nik" name="sekretaris_nik" placeholder="NIK" value="<?= $survei['sekretaris_nik']; ?>">
                                    </div>
                                    <?= form_error('sekretaris_nik', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="bendahara_nama">Bendahara</label>
                                        <input type="text" class="form-control" readonly id="bendahara_nama" name="bendahara_nama" placeholder="Nama" value="<?= $survei['bendahara_nama']; ?>">
                                    </div>
                                    <?= form_error('bendahara_nama', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="bendahara_nik">NIK</label>
                                        <input type="text" class="form-control" readonly id="bendahara_nik" name="bendahara_nik" placeholder="NIK" value="<?= $survei['bendahara_nik']; ?>">
                                    </div>
                                    <?= form_error('bendahara_nik', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 mb-2">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="legalitas">Legalitas</label>
                                <select name="legalitas" id="legalitas" class="form-control" disabled readonly>
                                    <?php foreach ($legalitas as $d) : ?>
                                        <?php if ($d == $survei['legalitas']) : ?>

                                            <option selected value="<?= $d; ?>"><?= $d; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d; ?>"><?= $d; ?></option>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('legalitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nomor_legalitas">Nomor Legalitas</label>
                                <input type="text" class="form-control" readonly id="nomor_legalitas" name="nomor_legalitas" placeholder="nomor_legalitas" value="<?= $survei['nomor_legalitas']; ?>">
                            </div>
                            <?= form_error('nomor_legalitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                            <div class="form-group">
                                <label for="tanggal_legalitas">Tanggal Legalitas</label>
                                <input type="date" class="form-control" readonly id="tanggal_legalitas" name="tanggal_legalitas" placeholder="tanggal_legalitas" value="<?= $survei['tanggal_legalitas']; ?>">
                            </div>
                            <?= form_error('tanggal_legalitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_bjb">No BJB</label>
                                <input type="text" class="form-control" readonly id="no_bjb" name="no_bjb" placeholder="no_bjb" value="<?= $survei['no_bjb']; ?>">
                            </div>
                            <?= form_error('no_bjb', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nama_bjb">Nama BJB</label>
                                <input type="text" class="form-control" readonly id="nama_bjb" name="nama_bjb" placeholder="nama_bjb" value="<?= $survei['nama_bjb']; ?>">
                            </div>
                            <?= form_error('nama_bjb', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                        </div>
                    </div>
                </div>

                <div class="col-md-7 mb-2">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="status_tanah">Status Tanah</label>
                                <select name="status_tanah" id="status_tanah" class="form-control" disabled readonly>
                                    <?php foreach ($status_tanah as $d) : ?>
                                        <?php if ($d == $survei['status_tanah']) : ?>

                                            <option selected value="<?= $d; ?>"><?= $d; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d; ?>"><?= $d; ?></option>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('status_tanah', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="surat_penyataan_keaslian_nomor">Surat penyataan keaslian nomor</label>
                                <input type="text" class="form-control" readonly id="surat_penyataan_keaslian_nomor" name="surat_penyataan_keaslian_nomor" placeholder="surat_penyataan_keaslian_nomor" value="<?= $survei['surat_penyataan_keaslian_nomor']; ?>">
                            </div>
                            <?= form_error('surat_penyataan_keaslian_nomor', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                            <div class="form-group">
                                <label for="surat_keterangan_domisili_nomor">Surat keterangan domisili nomor</label>
                                <input type="text" class="form-control" readonly id="surat_keterangan_domisili_nomor" name="surat_keterangan_domisili_nomor" placeholder="surat_keterangan_domisili_nomor" value="<?= $survei['surat_keterangan_domisili_nomor']; ?>">
                            </div>
                            <?= form_error('surat_keterangan_domisili_nomor', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="tidak_dapat_hibah_tahun_lalu">Tidak dapat hibah tahun lalu ?</label>
                                <input type="text" class="form-control" readonly id="tidak_dapat_hibah_tahun_lalu" name="tidak_dapat_hibah_tahun_lalu" placeholder="tidak_dapat_hibah_tahun_lalu" value="<?= $survei['tidak_dapat_hibah_tahun_lalu']; ?>">
                            </div>
                            <?= form_error('tidak_dapat_hibah_tahun_lalu', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>





                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_npwp">NO NPWP</label>
                                <input type="text" class="form-control" readonly id="no_npwp" name="no_npwp" placeholder="no_npwp" value="<?= $survei['no_npwp']; ?>">
                            </div>
                            <?= form_error('no_npwp', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nama_npwp">Nama NPWP</label>
                                <input type="text" class="form-control" readonly id="nama_npwp" name="nama_npwp" placeholder="nama_npwp" value="<?= $survei['nama_npwp']; ?>">
                            </div>
                            <?= form_error('nama_npwp', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="no_hp">No Hp</label>
                                <input type="text" class="form-control" readonly id="no_hp" name="no_hp" placeholder="no_hp" value="<?= $survei['no_hp']; ?>">
                            </div>
                            <?= form_error('no_hp', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        </div>
                    </div>
                </div>
            </div>


        </form>

        <div class="row">
            <div class="col">
                <hr>
                <h3>Administrasi</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="indentitas">Indentitas Dan Alamat Pengusul</label>
                            <textarea type="text" class="form-control" readonly id="indentitas" rows="3" name="indentitas" placeholder="indentitas"><?= $survei['indentitas']; ?></textarea>
                        </div>
                        <?= form_error('indentitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        <div class="form-group">
                            <label for="latar_belakang">Latar Belakang</label>
                            <textarea type="text" class="form-control" readonly id="latar_belakang" rows="6" name="latar_belakang" placeholder="latar_belakang"><?= $survei['latar_belakang']; ?></textarea>
                        </div>
                        <?= form_error('latar_belakang', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="maksud_tujuan">Maksud Dan Tujuan</label>
                            <textarea type="text" class="form-control" readonly id="maksud_tujuan" rows="6" name="maksud_tujuan" placeholder="maksud_tujuan"><?= $survei['maksud_tujuan']; ?></textarea>
                        </div>
                        <?= form_error('maksud_tujuan', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        <div class="form-group">
                            <label for="rincian_kegiatan">Rincian Kegiatan</label>
                            <textarea type="text" class="form-control" readonly id="rincian_kegiatan" rows="6" name="rincian_kegiatan" placeholder="rincian_kegiatan"><?= $survei['rincian_kegiatan']; ?></textarea>
                        </div>
                        <?= form_error('rincian_kegiatan', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr>
                <h3>Administrasi RAB</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($rab as $d) : ?>

                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['qty']; ?></td>
                                        <td><?= $d['harga']; ?></td>
                                        <td><?= $d['total']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr>
                <h3>Rekomendasi</h3>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="usulan">Usulan</label>
                            <input type="text" class="form-control" readonly name="usulan" placeholder="usulan" value="<?= $survei['usulan']; ?>">
                        </div>
                        <?= form_error('usulan', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        <div class="form-group">
                            <label for="rekomendasi">Rekomendasi</label>
                            <input type="text" class="form-control" readonly id="rekomendasi" name="rekomendasi" placeholder="rekomendasi" value="<?= $survei['rekomendasi']; ?>">
                        </div>
                        <?= form_error('rekomendasi', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        <?php if ($survei['is_valid'] == 0) : ?>
                            <a href="<?= base_url('survei'); ?>/<?= $survei['id_survei']; ?>/valid" class="btn btn-secondary">Belum Valid</a>
                        <?php else : ?>
                            <button type="button" class="btn btn-success">Verifikasi Valid</button>
                        <?php endif; ?>
                        <a href="<?= base_url('survei'); ?>" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>