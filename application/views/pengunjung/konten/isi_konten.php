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