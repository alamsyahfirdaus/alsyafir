<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card ml-2">
          <form role="form" method="post" action="<?= site_url('admin/profile/edit') ?>">
            <div class="card-body">
              <div class="form-group row">
                <div class="col-lg-4">
                  <label for="nama_lengkap">Nama Lengkap</label>
                </div>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $login['nama_lengkap'] ?>">
                <?= form_error('nama_lengkap', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>
              </div>
              <div class="form-group row">
              <div class="col-lg-4">
                  <label for="email">Email</label>
              </div>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="email" name="email" value="<?= $login['email'] ?>">
                <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>
              </div>
              <div class="form-group row">
              <div class="col-lg-4">
                  <label for="nohp">No. Handphone</label>
              </div>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $login['nohp'] ?>">
              </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <img src="<?= base_url('assets/dist/img/profile/') . $login['image'] ?>" class="img-thumbnail" alt="User Image">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="image">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Masukan file</label>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Jika tidak akan diedit biarkan kosong">
                    </div>
                  </div>

                </div>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>