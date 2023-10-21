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
                <a href="<?= base_url(); ?>konten/tambah_brt" class="btn bg-primary"><i class="fas fa-plus"></i> Buat <?= $title ?></a>
                <table class="table table-bordered table-striped">
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
                          <td>
                            <a href="<?= base_url(); ?>berita/detail/<?= $brt->id_konten; ?>" class="btn bg-success">
                              <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?= base_url(); ?>konten/edit_brt/<?= $brt->id_konten; ?>" class="btn bg-warning">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url(); ?>konten/hapus_brt/<?= $brt->id_konten; ?>" class="btn bg-danger" onclick="return confirm ('Yakin?');">
                              <i class="fas fa-trash"></i>
                            </a>
                          </td>
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