
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li> 
           <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Daftar Peserta
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/participants_battle') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bettle of Technology</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/participants_esport') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Esport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/participants_poster') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Poster Digital</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/participants_uiux') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UI/UX</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/participants_semnas') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semnas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/participants_all') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Acara</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/event') ?>" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>Event</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?php echo site_url('admin/users') ?>" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Akun Peserta</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?php echo site_url('admin/login/logout') ?>" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>