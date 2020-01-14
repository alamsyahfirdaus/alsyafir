<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/templates/head'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php $this->load->view('admin/templates/navbar'); ?>
  <?php $this->load->view('admin/templates/sidebar'); ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <?php 
          if ($content != null) {
            $this->load->view('admin/pages/' . $content);
          } else {
            redirect('admin/dashboard');
          }
      ?>
    </div>
  </div>
  <?php $this->load->view('admin/templates/footer'); ?>
</div>
<?php $this->load->view('admin/templates/jQuery'); ?>
</body>
</html>