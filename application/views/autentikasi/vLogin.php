<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/templates/head'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo">
        <b class="text-primary font-weight-bold" style="font-family: cambria;">ALSYAFIR</b>
      </div>
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= site_url('login') ?>" method="post">
        <div class="input-group mb-4">
          <input type="text" class="form-control" placeholder="Email" autofocus="" name="email" value="<?= set_value('email') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>
        </div>
        <div class="input-group mb-4">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>
        </div>
        <div class="social-auth-links text-center">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
      </form>
      <hr>
      <p class="mb-1 text-center">
        <a href="#" class="text-primary">Lupa Password?</a>
      </p>
      <p class="mb-1 text-center">Belum punya akun? 
        <a href="<?= site_url('user/register') ?>" class="text-primary">Daftar</a>
      </p>
    </div>
  </div>
</div>
<?php $this->load->view('admin/templates/jQuery'); ?>
</body>
</html>
