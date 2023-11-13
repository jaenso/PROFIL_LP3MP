<section class="isi-konten">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-9 px-5">
                <?php foreach ($konten as $bmk) : ?>
                    <h1><?= $bmk->judul ?></h1>
                    <div class="row identitas">
                        <div class="col-3">
                            <h3>Posted By <span class="d-block">SATUAN PENJAMINAN MUTU UM</span></h3>
                        </div>
                        <div class="col-2">
                            <h3>Categories <span class="d-block">Berita</span></h3>
                        </div>
                        <?php
                        $tanggal = date('d-m-Y', strtotime($bmk->tanggal));
                        $tanggalAkhir = date('d F Y', strtotime($tanggal));
                        ?>
                        <div class="col-2">
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
                <section class="konten-lain">
                    <div class="row">
                        <h1>Berita Lainnya</h1>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="index.html">
                                    <img class="bingkai-konten-lain" src="images/lembaga-2.png" />
                                    <div class="card-body">
                                        <h2>BPBD DAN UPR SUSUN DOKUMEN KAJIAN RESIKO BENCANA</h2>
                                        <p>30 Desember 2023</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-3 sidebar pt-3">
                <div class="row">
                    <div class="col-10">
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