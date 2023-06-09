<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">New Survei</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item">Kelola Survei</li>
                    <li class="breadcrumb-item active">New</li>
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
                                <select name="ket_lembaga" id="ket_lembaga" class="form-control">
                                    <?php foreach ($ket_lembaga as $d) : ?>
                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('ket_lembaga', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nama_lembaga">Nama</label>
                                <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" placeholder="nama_lembaga" value="<?= set_value('nama_lembaga'); ?>">
                            </div>
                            <?= form_error('nama_lembaga', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="alamat_lembaga">Alamat</label>
                                <input type="text" class="form-control" id="alamat_lembaga" name="alamat_lembaga" placeholder="alamat_lembaga" value="<?= set_value('alamat_lembaga'); ?>">
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
                                        <input type="text" class="form-control" id="ketua_nama" name="ketua_nama" placeholder="Nama" value="<?= set_value('ketua_nama'); ?>">
                                    </div>
                                    <?= form_error('ketua_nama', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="ketua_nik">NIK</label>
                                        <input type="text" class="form-control" id="ketua_nik" name="ketua_nik" placeholder="NIK" value="<?= set_value('ketua_nik'); ?>">
                                    </div>
                                    <?= form_error('ketua_nik', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="sekretaris_nama">Sekretaris</label>
                                        <input type="text" class="form-control" id="sekretaris_nama" name="sekretaris_nama" placeholder="Nama" value="<?= set_value('sekretaris_nama'); ?>">
                                    </div>
                                    <?= form_error('sekretaris_nama', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="sekretaris_nik">NIK</label>
                                        <input type="text" class="form-control" id="sekretaris_nik" name="sekretaris_nik" placeholder="NIK" value="<?= set_value('sekretaris_nik'); ?>">
                                    </div>
                                    <?= form_error('sekretaris_nik', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="bendahara_nama">Bendahara</label>
                                        <input type="text" class="form-control" id="bendahara_nama" name="bendahara_nama" placeholder="Nama" value="<?= set_value('bendahara_nama'); ?>">
                                    </div>
                                    <?= form_error('bendahara_nama', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="bendahara_nik">NIK</label>
                                        <input type="text" class="form-control" id="bendahara_nik" name="bendahara_nik" placeholder="NIK" value="<?= set_value('bendahara_nik'); ?>">
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
                                <select name="legalitas" id="legalitas" class="form-control">
                                    <?php foreach ($legalitas as $d) : ?>
                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('legalitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nomor_legalitas">Nomor Legalitas</label>
                                <input type="text" class="form-control" id="nomor_legalitas" name="nomor_legalitas" placeholder="nomor_legalitas" value="<?= set_value('nomor_legalitas'); ?>">
                            </div>
                            <?= form_error('nomor_legalitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                            <div class="form-group">
                                <label for="tanggal_legalitas">Tanggal Legalitas</label>
                                <input type="date" class="form-control" id="tanggal_legalitas" name="tanggal_legalitas" placeholder="tanggal_legalitas" value="<?= set_value('tanggal_legalitas'); ?>">
                            </div>
                            <?= form_error('tanggal_legalitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_bjb">No BJB</label>
                                <input type="text" class="form-control" id="no_bjb" name="no_bjb" placeholder="no_bjb" value="<?= set_value('no_bjb'); ?>">
                            </div>
                            <?= form_error('no_bjb', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nama_bjb">Nama BJB</label>
                                <input type="text" class="form-control" id="nama_bjb" name="nama_bjb" placeholder="nama_bjb" value="<?= set_value('nama_bjb'); ?>">
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
                                <select name="status_tanah" id="status_tanah" class="form-control">
                                    <?php foreach ($status_tanah as $d) : ?>
                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('status_tanah', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="surat_penyataan_keaslian_nomor">Surat penyataan keaslian nomor</label>
                                <input type="text" class="form-control" id="surat_penyataan_keaslian_nomor" name="surat_penyataan_keaslian_nomor" placeholder="surat_penyataan_keaslian_nomor" value="<?= set_value('surat_penyataan_keaslian_nomor'); ?>">
                            </div>
                            <?= form_error('surat_penyataan_keaslian_nomor', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                            <div class="form-group">
                                <label for="surat_keterangan_domisili_nomor">Surat keterangan domisili nomor</label>
                                <input type="text" class="form-control" id="surat_keterangan_domisili_nomor" name="surat_keterangan_domisili_nomor" placeholder="surat_keterangan_domisili_nomor" value="<?= set_value('surat_keterangan_domisili_nomor'); ?>">
                            </div>
                            <?= form_error('surat_keterangan_domisili_nomor', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="tidak_dapat_hibah_tahun_lalu">Tidak dapat hibah tahun lalu ?</label>
                                <input type="text" class="form-control" id="tidak_dapat_hibah_tahun_lalu" name="tidak_dapat_hibah_tahun_lalu" placeholder="tidak_dapat_hibah_tahun_lalu" value="<?= set_value('tidak_dapat_hibah_tahun_lalu'); ?>">
                            </div>
                            <?= form_error('tidak_dapat_hibah_tahun_lalu', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>





                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_npwp">NO NPWP</label>
                                <input type="text" class="form-control" id="no_npwp" name="no_npwp" placeholder="no_npwp" value="<?= set_value('no_npwp'); ?>">
                            </div>
                            <?= form_error('no_npwp', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="nama_npwp">Nama NPWP</label>
                                <input type="text" class="form-control" id="nama_npwp" name="nama_npwp" placeholder="nama_npwp" value="<?= set_value('nama_npwp'); ?>">
                            </div>
                            <?= form_error('nama_npwp', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="no_hp">No Hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" value="<?= set_value('no_hp'); ?>">
                            </div>
                            <?= form_error('no_hp', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>


                        </div>
                    </div>
                </div>
            </div>

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
                                <textarea type="text" class="form-control" id="indentitas" rows="3" name="indentitas" placeholder="indentitas"><?= set_value('indentitas'); ?></textarea>
                            </div>
                            <?= form_error('indentitas', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="latar_belakang">Latar Belakang</label>
                                <textarea type="text" class="form-control" id="latar_belakang" rows="6" name="latar_belakang" placeholder="latar_belakang"><?= set_value('latar_belakang'); ?></textarea>
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
                                <textarea type="text" class="form-control" id="maksud_tujuan" rows="6" name="maksud_tujuan" placeholder="maksud_tujuan"><?= set_value('maksud_tujuan'); ?></textarea>
                            </div>
                            <?= form_error('maksud_tujuan', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="rincian_kegiatan">Rincian Kegiatan</label>
                                <textarea type="text" class="form-control" id="rincian_kegiatan" rows="6" name="rincian_kegiatan" placeholder="rincian_kegiatan"><?= set_value('rincian_kegiatan'); ?></textarea>
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
                    <button type="button" class="btn btn-primary btn-sm mb-2" onclick="rabNew()">Tambah</button>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="res-rab">

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
                                <input type="text" class="form-control" readonly id="usulan" name="usulan" placeholder="usulan" value="<?= set_value('usulan'); ?>">
                            </div>
                            <?= form_error('usulan', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <div class="form-group">
                                <label for="rekomendasi">Rekomendasi</label>
                                <input type="text" class="form-control" id="rekomendasi" name="rekomendasi" placeholder="rekomendasi" value="<?= set_value('rekomendasi'); ?>">
                            </div>
                            <?= form_error('rekomendasi', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('survei'); ?>" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>


        </form>


    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="rabModal" tabindex="-1" role="dialog" aria-labelledby="rabModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rabModalLabel">Tambah RAB</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_rab">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="qty">
                </div>
                <div class="form-group">
                    <label for="harga">Harga / Satuan</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="harga">
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" readonly id="total" name="total" placeholder="total">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-rab" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    function calTotal() {
        var qty = document.getElementById('qty').value;
        var harga = document.getElementById('harga').value;
        document.getElementById('total').value = parseInt(qty) * parseInt(harga);
    }

    document.getElementById('qty').addEventListener('keyup', calTotal);
    document.getElementById('harga').addEventListener('keyup', calTotal);
</script>