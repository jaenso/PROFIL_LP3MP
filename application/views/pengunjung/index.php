<section class="banner" style="background-image: url('<?= base_url('uploads/' . $website->background) ?>');">
  <div class="banner-content">
    <h1><?= $website->deskripsi ?></h1>
  </div>
</section>
<!-- <section class="lembaga">
  <div class="container">
    <h1>Lembaga LP3MP</h1>
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-evenly">
          <?php foreach ($lembaga as $lbg) : ?>
            <div class="col-4">
              <div class="card">
                <img class="bingkai-lembaga" src="<?= base_url(); ?>assets_pengunjung/images/lembaga.png" />
                <div class="card-body">
                  <h2><?= $lbg->judul ?></h2>
                  <p>
                    <?php
                    $isi = strip_tags($lbg->isi);
                    $max_length = 150;
                    if (strlen($isi) > $max_length) {
                      $isi = substr($isi, 0, $max_length);
                      $last_space = strrpos($isi, ' ');
                      $isi = substr($isi, 0, $last_space);
                      echo $isi . '...';
                    }
                    ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="berita-utama">
  <div class="container">
    <h1>Berita Utama</h1>
    <div class="row justify-content-center">
      <?php foreach ($konten as $brt) : ?>
        <div class="col-3">
          <div class="card">
            <a href="<?= base_url(); ?>konten/detail/<?= $brt->id_konten; ?>/berita">
              <img class="bingkai-berita-utama" src="<?= base_url('uploads/' . $brt->gambar); ?>">
              <div class="card-body">
                <h2><?= $brt->judul ?></h2>
            </a>
            <p>
              <?php
              $isi = strip_tags($brt->isi);
              $max_length = 150;
              if (strlen($isi) > $max_length) {
                $isi = substr($isi, 0, $max_length);
                $last_space = strrpos($isi, ' ');
                $isi = substr($isi, 0, $last_space);
                echo $isi . '...';
              }
              ?>
            </p>
          </div>
        </div>
    </div>
  <?php endforeach ?>
  </div>
  <div class="d-flex justify-content-center">
    <a href="<?= base_url('pengunjung/berita') ?>" class="btn btn-outline-info my-3" style="width: 20%;">BERITA UTAMA LAINNYA</a>
  </div>
</section>

<section class="outer-link">
  <div class="container">
    <h1>Outer Links</h1>
    <div class="row justify-content-center">
      <div class="col-4 format">
        <a href="https://banpt.or.id/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/ban-pt.png" class="bingkai-format">
        </a>
      </div>
      <div class="col-4 format">
        <a href="https://lamsama.or.id/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-sama.png" class="bingkai-format">
        </a>
      </div>
      <div class="col-4 format">
        <a href="https://lamdik.or.id/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-dik.png" class="bingkai-format">
        </a>
      </div>
      <div class="col-4 format">
        <a href="https://lamemba.or.id/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-emba.png" class="bingkai-format">
        </a>
      </div>
      <div class="col-4 format">
        <a href="https://laminfokom.or.id/official/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-infokom.png" class="bingkai-format">
        </a>
      </div>
      <div class="col-4 format">
        <a href="https://lamptkes.org/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-ptkes.png" class="bingkai-format">
        </a>
      </div>
      <div class="col-4 format">
        <a href="https://lamteknik.or.id/">
          <img src="<?= base_url(); ?>assets_pengunjung/outer-link/lam-teknik.png" class="bingkai-format">
        </a>
      </div>
    </div>
  </div>
</section>