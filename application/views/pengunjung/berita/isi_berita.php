<section class="isi-konten">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-9 border border-5 px-5">
        <?php foreach ($konten as $ktn) : ?>
          <h1><?= $ktn->judul ?></h1>
          <div class="row identitas">
            <div class="col-3">
              <h3>Posted By <span class="d-block">SATUAN PENJAMINAN MUTU UM</span></h3>
            </div>
            <div class="col-2">
              <h3>Categories <span class="d-block">Berita</span></h3>
            </div>
            <?php
            $tanggal = date('d-m-Y', strtotime($ktn->tanggal));
            $tanggalAkhir = date('d F Y', strtotime($tanggal));
            ?>
            <div class="col-2">
              <h3>Date <span class="d-block"><?= $tanggalAkhir ?></span></h3>
            </div>
          </div>
          <?php if (empty($ktn->gambar) || !file_exists('uploads/' . $ktn->gambar)) {
            echo ""; ?>
          <?php } else { ?>
            <img class="bingkai-konten" src="<?= base_url('uploads/' . $ktn->gambar); ?>" />
          <?php } ?>
          <p><?= $ktn->isi ?></p>
        <?php endforeach; ?>
        <style>
          .berita-slide .card {
            padding: 20px 0;
            width: 50vh;
            overflow: hidden;
            border: none;
          }

          .berita-slide .card .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
          }

          .berita-slide h2 {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 600;
          }

          .berita-slide .card-body h2 {
            font-size: 1.1rem;
            font-weight: 600;
            text-align: start;
            color: var(--dark-color);
          }

          .berita-slide p {
            font-size: 1rem;
          }
        </style>
        <section class="berita-slide" id="berita-slide">
          <div class="container-fluid">
            <h2>Anda mungkin juga suka..</h2>
            <div class="swiper berita-swiper">
              <div class="swiper-wrapper">
                <?php foreach ($konten_lain as $kl) : ?>
                  <div class="swiper-slide">
                    <div class="card">
                      <a href="<?= base_url(); ?>berita/detail/<?= $kl->id_konten; ?>">
                        <img src="<?= base_url('uploads/' . $kl->gambar) ?>" class="card-img-top rounded mb-3" alt="Gambar 1" />
                      </a>
                      <div class="card-body">
                        <h2><?= $kl->judul ?></h2>
                        <?php
                        $isi = $kl->isi;
                        $max_length = 80;
                        if (strlen($isi) > $max_length) {
                          $isi = substr($isi, 0, $max_length) . '...';
                        }
                        ?>
                        <p><?= htmlspecialchars_decode($isi) ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
              <div class="d-flex align-items-center justify-content-end gap-3">
                <button class="btn btn-light d-flex align-items-center justify-content-center btn-prev">
                  <i class="bx bx-left-arrow-alt"></i>
                </button>
                <button class="btn btn-light d-flex align-items-center justify-content-center btn-next">
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-3 sidebar pt-3">
        <div class="row">
          <div class="col-10">
            <h2>SEARCH</h2>
            <form action="#" method="get">
              <div class="input-group">
                <input class="form-control" type="search" name="search" placeholder="Cari..." />
                <button class="btn btn-outline-light" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                  </svg>
                </button>
              </div>
            </form>
          </div>
          <div class="col-10 mt-3">
            <h2>CATEGORIES</h2>
            <div class="row">
              <a href="<?= base_url(); ?>pengunjung/berita">BERITA</a>
              <a href="<?= base_url(); ?>pengunjung/pengumuman">PENGUMUMAN</a>
              <a href="<?= base_url(); ?>pengunjung/dokumen">DOKUMEN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>