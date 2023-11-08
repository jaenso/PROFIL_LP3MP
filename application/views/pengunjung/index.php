<section class="banner" style="background-image: url('<?= base_url('uploads/' . $website->background) ?>');">
  <div class="banner-content">
    <h1>Selamat Datang di Website Kami</h1>
  </div>
</section>
<section class="lembaga">
  <div class="container">
    <h1>Lembaga LP3MP</h1>
    <div class="row pt-4">
      <div class="col-10">
        <div class="row justify-content-evenly">
          <div class="col-4">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              <div class="card-body">
                <h2>Pusat Manajemen Mutu</h2>
                <p>
                  Deskripsi Lembaga
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga-2.png" />

              <div class="card-body">
                <h2>Pusat Pengelolaan Akreditasi</h2>
                <p>
                  Deskripsi Lembaga
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div>
                <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              </div>
              <div class="card-body">
                <h2>Pusat Pelatihan dan Pengembangan Kompetensi SDM</h2>
                <p>
                  Deskripsi Lembaga
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              <div class="card-body">
                <h2>
                  Pusat Pengelolaan MBKM dan Kurikulum
                </h2>
                <p>
                  Deskripsi Lembaga
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              <div class="card-body">
                <h2>
                  Pusat Pangkalan Data dan Sistem Informasi Mutu Akademik
                </h2>
                <p>
                  Deskripsi Lembaga
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2 outer-link">
        <div class="row">
          <div class="col-10 mx-5">
            <h1>Outer Links</h1>
            <div class="row">
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/ban-pt.png" class="bingkai-format">
              </div>
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-sama.png" class="bingkai-format">
              </div>
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-dik.png" class="bingkai-format">
              </div>
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-emba.png" class="bingkai-format">
              </div>
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-infokom.png" class="bingkai-format">
              </div>
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-ptkes.png" class="bingkai-format">
              </div>
              <div class="col-12 mb-2">
                <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-teknik.png" class="bingkai-format">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="berita-utama">
  <div class="container">
    <h1>Berita Utama</h1>
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-evenly">
          <?php
          foreach ($konten as $brt) : ?>
            <div class="col-4 mt-3">
              <div class="card">
                <img class="bingkai-berita-utama" src="<?= base_url('uploads/' . $brt->gambar); ?>">
                <div class=" card-body">
                  <h2><?= $brt->judul ?></h2>
                  <div class="container d-flex">
                    <i class="bi bi-calendar pe-2"></i>
                    <?php
                    $tanggalAwal = $brt->tanggal;
                    $tanggalObj = new DateTime($tanggalAwal);
                    $tanggalHasil = $tanggalObj->format('d F Y');
                    ?>
                    <p><?= $tanggalHasil ?></p>
                  </div>
                  <a href="<?= base_url(); ?>konten/detail/<?= $brt->id_konten; ?>">
                    <p>
                      <?php
                      $isi = strip_tags($brt->isi);
                      $max_length = 150;

                      if (strlen($isi) > $max_length) {
                        $isi = substr($isi, 0, $max_length);
                        $last_space = strrpos($isi, ' ');
                        $isi = substr($isi, 0, $last_space);
                        echo $isi . '... ';
                      }
                      ?>
                    </p>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>
  </div>
</section>