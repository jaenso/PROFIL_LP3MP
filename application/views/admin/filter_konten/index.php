<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data berita <strong>berhasil</strong>
                                <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <style>
                            label {
                                display: block;
                                margin-bottom: 10px;
                                color: #333;
                                font-weight: bold;
                            }

                            input[type="date"] {
                                width: 100%;
                                padding: 10px;
                                margin-bottom: 15px;
                                border: 1px solid #ccc;
                                border-radius: 3px;
                            }
                        </style>
                        <form method="post" action="<?= site_url('admin/getFilterTanggal'); ?>">
                            <label for="start_date">Tanggal Awal:</label>
                            <input type="date" name="start_date" id="start_date" required>
                            <br>

                            <label for="end_date">Tanggal Akhir:</label>
                            <input type="date" name="end_date" id="end_date" required>
                            <br>

                            <button class="mb-3 btn btn-primary" type="submit">Cari</button>
                        </form>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="col-2 judul">Judul</th>
                                    <th class="col-4">Isi</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($konten as $brt) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $brt->judul ?></td>
                                        <?php
                                        $isi = $brt->isi;
                                        $max_length = 200;
                                        if (strlen($isi) > $max_length) {
                                            $isi = substr($isi, 0, $max_length) . '...';
                                        }
                                        ?>
                                        <td><?= htmlspecialchars_decode($isi) ?></td>
                                        <?php if (empty($brt->gambar)) { ?>
                                            <td><img height="150px" width="180px" src="<?= base_url('uploads/default.jpg') ?>" /></td>
                                        <?php } else { ?>
                                            <td><img height="150px" width="180px" src="<?= base_url('uploads/' . $brt->gambar) ?>" />
                                            <?php } ?></td>
                                            <td><?= date('d-m-Y', strtotime($brt->tanggal)); ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                        </table>
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
</section>