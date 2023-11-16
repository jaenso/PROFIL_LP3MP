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
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>
                  Konten
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/berita" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Berita</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/pengumuman" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengumuman</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/pelatihan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pelatihan Dosen</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/benchmarking" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Benchmarking</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/ami" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>AMI</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Informasi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/sejarah" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sejarah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/visi_misi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visi, Misi, dan Tujuan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/pengelola" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengelola</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/pusat_studi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Manajemen Mutu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/akreditasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Pengelolaan Akreditasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/kompetensi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Pelatihan dan Pengembangan
                      Kompetisi Sumber Daya Manusia</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/mbkm" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Pengelolaan Merdeka Belajar Kampus Merdeka
                      dan Kurikulum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/pangkalan_data" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Pangkalan Data dan Sistem
                      Informasi Mutu Akademik</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Tokoh
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/tokoh_pengelola" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tokoh Pengelola</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/tokoh_pusat_studi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tokoh Pusat Manajemen Mutu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/tokoh_akreditasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Pengelolaan Akreditasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/tokoh_kompetensi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tokoh Pusat Pelatihan dan Pengembangan
                      Kompetisi Sumber Daya Manusia</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/tokoh_mbkm" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tokoh Pusat Pengelolaan Merdeka Belajar Kampus Merdeka
                      dan Kurikulum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/tokoh_pangkalan_data" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pusat Pangkalan Data dan Sistem
                      Informasi Mutu Akademik</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Dokumen
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/dokumen_srt" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sertifikasi Jurusan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url(); ?>admin/dokumen_lp3mp" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dokumen LP3MP</p>
                  </a>
                </li>
              </ul>
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