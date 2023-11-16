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
                        <div class="btn-group mb-3">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tambah Konten
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url('konten/tambah/berita'); ?>">Berita</a>
                                <a class="dropdown-item" href="<?= base_url('konten/tambah/pengumuman'); ?>">Pengumuman</a>
                                <a class="dropdown-item" href="<?= base_url('konten/tambah/pelatihan'); ?>">Pelatihan Dosen</a>
                                <a class="dropdown-item" href="<?= base_url('konten/tambah/benchmarking'); ?>">Benchmarking</a>
                                <a class="dropdown-item" href="<?= base_url('konten/tambah/ami'); ?>">AMI</a>
                            </div>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="col-2 judul">Judul</th>
                                    <th class="col-4">Isi</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($konten as $ktn) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $ktn->judul ?></td>
                                        <?php
                                        $isi = $ktn->isi;
                                        $max_length = 200;
                                        if (strlen($isi) > $max_length) {
                                            $isi = substr($isi, 0, $max_length) . '...';
                                        }
                                        ?>
                                        <td><?= htmlspecialchars_decode($isi) ?></td>
                                        <?php if (empty($ktn->gambar)) { ?>
                                            <td><img height="150px" width="180px" src="<?= base_url('uploads/default.jpg') ?>" /></td>
                                        <?php } else { ?>
                                            <td><img height="150px" width="180px" src="<?= base_url('uploads/' . $ktn->gambar) ?>" />
                                            <?php } ?></td>
                                            <td><?= date('d-m-Y', strtotime($ktn->tanggal)); ?></td>
                                            <td>
                                                <a href="<?= base_url('konten/detail/' . $ktn->id_konten . '/' . $ktn->kategori); ?>" class="btn bg-success">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="<?= base_url('konten/edit/' . $ktn->id_konten . '/' . $ktn->kategori); ?>" class="btn bg-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('konten/hapus/' . $ktn->id_konten . '/' . $ktn->kategori); ?>" class="btn bg-danger" onclick="return confirm('Yakin?');">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>