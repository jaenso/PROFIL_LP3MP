<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url(); ?>asset_admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url(); ?>asset_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url(); ?>asset_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $user['nama']; ?></a>
          </div>
        </div>

        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="<?= base_url(); ?>admin" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/berita" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Berita
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/pengumuman" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Pengumuman
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/pelatihan" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Pelatihan Dosen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/benchmarking" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Benchmarking
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/sejarah" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Sejarah
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/visi_misi" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Visi, Misi, dan Tujuan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/pengelola" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Pengelola
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/tokoh_pengelola" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tokoh Pengelola
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/pusat_studi" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Pusat Studi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/tokoh_pusat_studi" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tokoh Pusat Studi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/dokumen_srt" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Sertifikasi Jurusan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/dokumen_lp3mp" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Dokumen LP3MP
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/pengaturan_website/1" class="nav-link">
                <i class="nav-icon fas fa-cog "></i>
                <p>
                  Pengaturan Website
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>akun/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">