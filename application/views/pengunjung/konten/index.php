<section class="konten">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="row">
          <div class="col-8">
            <h1><?= $title ?></h1>
            <?php foreach ($konten as $ktn) : ?>
              <div class="card">
                <?php if (empty($ktn->gambar) || !file_exists('uploads/' . $ktn->gambar)) {
                  echo ""; ?>
                <?php } else { ?>
                  <img src="<?= base_url('uploads/' . $ktn->gambar); ?>" />
                <?php } ?>
                <div class="card-body">
                  <div class="judul">
                    <h2><?= $ktn->judul ?></h2>
                  </div>
                  <div class="row identitas">
                    <div class="col-2">
                      <h3>Categories <span class="d-block"><?= $ktn->kategori ?></span></h3>
                    </div>
                    <div class="col-4">
                      <?php
                      $tanggal = date('d-m-Y', strtotime($ktn->tanggal));
                      $tanggalAkhir = date('d F Y', strtotime($tanggal)); ?>
                      <h3>Posted on <span class="d-block"><?= $tanggalAkhir ?></span></h3>
                    </div>
                  </div>
                  <div class="isi">
                    <p>
                      <?php
                      $isi = $ktn->isi;
                      $max_length = 350;
                      if (strlen($isi) > $max_length) {
                        $isi = substr($isi, 0, $max_length) . '...';
                      }
                      echo $isi;
                      ?>
                    </p>
                  </div>
                  <a href="<?= base_url('konten/detail/' . $ktn->id_konten . '/' . $ktn->kategori); ?>" class="btn btn-outline-info">Baca Selengkapnya</a>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <div class="col-4 sidebar">
            <h2>Kategori</h2>
            <div class="row">
              <a href="<?= base_url(); ?>pengunjung/benchmarking">Benchmarking</a>
              <a href="<?= base_url(); ?>pengunjung/pelatihan">Pelatihan Dosen</a>
              <a href="<?= base_url(); ?>pengunjung/ami">AMI</a>
            </div>
            <h2>Berita</h2>
            <div class="row">
              <?php foreach ($konten_lain as $kl) : ?>
                <a class="mb-1" href="<?= base_url('konten/detail/' . $kl->id_konten . '/' . $kl->kategori); ?>"><?= $kl->judul ?></a>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</section>