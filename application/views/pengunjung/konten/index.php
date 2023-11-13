<section class="konten">
  <div class="container">
    <div class="row">
      <div class="col-9">
        <h1><?= $title ?></h1>
        <div class="row justify-content-center">
          <?php foreach ($konten as $ktn) : ?>
            <div class="col-10">
              <div class="card mt-5">
                <?php if (empty($ktn->gambar) || !file_exists('uploads/' . $ktn->gambar)) {
                  echo ""; ?>
                <?php } else { ?>
                  <img src="<?= base_url('uploads/' . $ktn->gambar); ?>" />
                <?php } ?>
              </div>
              <div class="card-body">
                <div class="judul">
                  <h2><?= $ktn->judul ?></h2>
                </div>
                <div class="row identitas">
                  <div class="col-4">
                    <h3>Posted By <span class="d-block">SATUAN PENJAMINAN MUTU UM</span></h3>
                  </div>
                  <div class="col-2">
                    <h3>Categories <span class="d-block">Berita</span></h3>
                  </div>
                  <div class="col-2">
                    <?php
                    $tanggal = date('d-m-Y', strtotime($ktn->tanggal));
                    $tanggalAkhir = date('d F Y', strtotime($tanggal)); ?>
                    <h3>Tanggal <span class="d-block"><?= $tanggalAkhir ?></span></h3>
                  </div>
                </div>
                <div class="isi">
                  <p>
                    <?php
                    $isi = $ktn->isi;
                    $max_length = 200;
                    if (strlen($isi) > $max_length) {
                      $isi = substr($isi, 0, $max_length) . '...';
                    }
                    echo $isi;
                    ?>
                  </p>
                  <a href="<?= base_url('konten/detail/' . $ktn->id_konten); ?>" class="btn">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
      <div class="col-3 sidebar">
        <div class="row">
          <div class="col-10 mt-3">
            <h2>Kategori</h2>
            <div class="row">
              <a href="<?= base_url(); ?>pengunjung/benchmarking">Benchmarking</a>
              <a href="<?= base_url(); ?>pengunjung/pelatihan">Pelatihan Dosen</a>
              <a href="<?= base_url(); ?>#">AMI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>