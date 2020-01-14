  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
     <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light-bold">ALSYAFIR</span>
    </a>
    <?php 
      $login = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    ?>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist/img/profile/') . $login['image'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= site_url('admin/profile')  ?>" class="d-block"><?= $login['nama_lengkap']?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= site_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
<!--           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('admin/members') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/members/role1') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/members/role2') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </nav>
    </div>
  </aside>