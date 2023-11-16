<section class="konten">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="row">
                    <div class="col-8">
                        <?php foreach ($konten as $bmk) : ?>
                            <h2><?= $bmk->judul ?></h2>
                            <div class="row identitas">
                                <div class="col-2">
                                    <h3>Categories <span class="d-block"><?= $bmk->kategori ?></span></h3>
                                </div>
                                <?php
                                $tanggal = date('d-m-Y', strtotime($bmk->tanggal));
                                $tanggalAkhir = date('d F Y', strtotime($tanggal));
                                ?>
                                <div class="col-4">
                                    <h3>Date <span class="d-block"><?= $tanggalAkhir ?></span></h3>
                                </div>
                            </div>
                            <?php if (empty($bmk->gambar) || !file_exists('uploads/' . $bmk->gambar)) {
                                echo ""; ?>
                            <?php } else { ?>
                                <img class="bingkai-konten" src="<?= base_url('uploads/' . $bmk->gambar); ?>" />
                            <?php } ?>
                            <p><?= $bmk->isi ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-4 sidebar">
                        <h2>Kategori</h2>
                        <div class="row">
                            <a href="<?= base_url(); ?>pengunjung/benchmarking">Benchmarking</a>
                            <a href="<?= base_url(); ?>pengunjung/pelatihan">Pelatihan Dosen</a>
                            <a href="<?= base_url(); ?>#">AMI</a>
                        </div>
                        <h2>Berita</h2>
                        <div class="row">
                            <?php foreach ($konten_lain as $kl) : ?>
                                <a href="<?= base_url('konten/detail/' . $kl->id_konten . '/' . $kl->kategori); ?>"><?= $kl->judul ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</section>