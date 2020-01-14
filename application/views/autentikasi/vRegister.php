<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/templates/head'); ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card">
    <div class="card-body register-card-body">
      <div class="register-logo">
        <b class="text-primary font-weight-bold" style="font-family: cambria;">ALSYAFIR</b>
      </div>
      <form action="<?= site_url('user/register') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap" autofocus="" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('nama_lengkap', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
        </div>
      </form>
      <hr>
      <div class="social-auth-links text-center">
      <p>Sudah punya akun? <a href="<?= site_url('login') ?>" class="text-primary">Login</a></p>
    </div>
  </div>
<?php $this->load->view('admin/templates/jQuery'); ?>
</body>
</html>
