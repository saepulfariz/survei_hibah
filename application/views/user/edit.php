<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item">Kelola User</li>
                    <li class="breadcrumb-item active">Edit</li>
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
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Edit User
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('user/' . $user['id_user']); ?>" method="post">
                            <input type='hidden' name='_method' value='PUT' />
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" disabled placeholder="Username" value="<?= $user['username']; ?>">
                            </div>
                            <?= form_error('username', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <?= form_error('password', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $user['nama_lengkap']; ?>" required placeholder="nama_lengkap">
                            </div>
                            <?= form_error('nama_lengkap', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" value="<?= $user['nip']; ?>" required placeholder="nip">
                            </div>
                            <?= form_error('nip', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" required placeholder="email">
                            </div>
                            <?= form_error('email', '<div class="error text-danger mb-2" style="margin-top: -15px">', '</div>'); ?>
                            <div class="form-group">
                                <label for="email">Role</label>
                                <select name="id_role" id="id_role" required class="form-control">
                                    <?php foreach ($role as $d) : ?>
                                        <?php if ($d['id_role'] == $user['id_role']) : ?>
                                            <option selected value="<?= $d['id_role']; ?>"><?= $d['nama_role']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d['id_role']; ?>"><?= $d['nama_role']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('user'); ?>" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>