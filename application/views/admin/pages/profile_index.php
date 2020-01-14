<section class="col-lg-6">
  <div class="card ml-2" style="max-width: 540px;">
    <div class="card-header ">
      <h4 class="card-title font-weight-dark">
        <a href="<?= site_url('admin/profile/edit') ?>">
          <i class="fas fa-user-edit"> Edit Profile</i>
        </a>
      </h4>
    </div>
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="<?= base_url('assets/dist/img/profile/') . $login['image'] ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-text"><?= $login['nama_lengkap'] ?></h5>
            <p class="card-text"><?= $login['email'] ?></p>
            <p class="card-text"><?= $login['nohp'] ?></p>
            <p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $login['date_created'] ) ?></small></p>
          </div>

        </div>
      </div>
  </div>
</section>