<section class="lembaga">
  <div class="coontainer-fluid">
    <div class="row pt-4">
      <div class="col-9">
        <h1>Lembaga LP3MP</h1>
        <div class="row justify-content-evenly">
          <div class="col-6">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              <div class="card-body">
                <h2>Pusat Penjaminan Mutu</h2>
                <p>
                  Pusat Penjaminan Mutu merupakan divisi yang bertugas
                  menyusun, melaksanakan, dan mengkoordinasikan penjaminan
                  mutu internal baik akademik maupun non-akademik.
                </p>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga-2.png" />

              <div class="card-body">
                <h2>Pusat MKU dan Kewirausahaan</h2>
                <p>
                  Pusat Mata Kuliah Umum (MKU) dan Kewirausahaan merupakandivisi yang bertugas melaksanakan dan mengkoordinasipengembangan mutu pembelajaran MKU dan kewirausahaan.
                </p>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card">
              <div>
                <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              </div>
              <div class="card-body">
                <h2>Pusat Pengembangan Pembelajaran</h2>
                <p>
                  Pusat Pengembangan Pembelajaran merupakan divisi yang bertugas melaksanakan dan mengkoordinasikan audit, penilaian
                  mutu internal pembelajaran, dan pelatihan yang mengacu pada
                  Standar Pendidikan. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, quos nihil quasi molestias quo accusantium enim illo pariatur mollitia provident tenetur corrupti ut placeat soluta molestiae assumenda impedit possimus nesciunt nulla sunt atque aut nostrum iusto. Non, possimus atque aperiam ullam cupiditate cum ipsa sed numquam vitae suscipit rem voluptatum natus. Maxime velit illum, deleniti nam sed saepe. Fugiat ut iure ipsam accusamus saepe provident nulla nostrum sint ipsum debitis!
                </p>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card">
              <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
              <div class="card-body">
                <h2>
                  Pusat Merdeka Belajar - Kampus Merdeka
                </h2>
                <p>
                  Pusat Merdeka Belajar - Kampus Merdeka (MB-KM) merupakan
                  divisi yang bertugas melaksanakan, mengkoordinasikan, dan
                  memonitor 8 kegiatan MB-KM.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 outer-link">
        <div class="row">
          <div class="col-10 mx-5">
            <h1>Outer Links</h1>
            <div class="row">
              <div class="col-12 mb-2">
                <div class="d-flex">
                  <img src="<?= base_url(); ?>assets_pengunjung/images/BAN-PT.png" class="bingkai-format">
                  <div>
                    <a href="#">BAN-PT</a>
                    <span class="d-block">Badan Akreditasi Perguruan Tinggi</span>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="d-flex">
                  <img src="<?= base_url(); ?>assets_pengunjung/images/LAMSAMA.png" class="bingkai-format">
                  <div>
                    <a href="#">LAMSAMA</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="berita-utama">
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 border border-5">
        <div class="row justify-content-evenly">
          <h1>Berita Utama</h1>
          <?php
          foreach ($konten as $brt) : ?>
            <div class="col-6 mt-3">
              <div class="card">
                <a href="<?= base_url(); ?>berita/detail/<?= $brt->id_konten; ?>">
                  <img class="bingkai-berita-utama" src="<?= base_url('uploads/' . $brt->gambar); ?>">
                  <div class=" card-body">
                    <h2><?= $brt->judul ?></h2>
                    <p class="text-truncate">
                      <?php
                      $isi = $brt->isi;
                      $max_length = 100;
                      if (strlen($isi) > $max_length) {
                        $isi = substr($isi, 0, $max_length) . '...';
                      }
                      echo $isi;
                      ?></p>
                  </div>
                </a>
              </div>
            </div>
          <?php endforeach ?>
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
      <div class="col-2 recent-post">
        <div class="row">
          <div class="col-12 ms-2">
            <h1>Recent Post</h1>
            <div class="row">
              <?php foreach ($konten_lain as $ktn) : ?>
                <div class="col-12 mb-2">
                  <a href="<?= base_url(); ?>berita/detail/<?= $ktn->id_konten; ?>"><?= $ktn->judul; ?></a>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>