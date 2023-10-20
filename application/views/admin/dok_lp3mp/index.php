<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <?php if ($this->session->flashdata('flash')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data dokumen <strong>berhasil</strong>
                <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>

            <a href="<?= base_url(); ?>dokumen/tambah_dkm" class="btn bg-primary"><i class="fas fa-plus"></i> Buat <?= $title ?></a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Format</th>
                  <th>Nama</th>
                  <th>Link Drive</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php
              foreach ($dokumen as $dkm) : ?>
                <tbody>
                  <tr>
                    <td><?= ++$start; ?></td>
                    <td><img height="50px" width="50px" src="<?= base_url('assets_pengunjung/images/' . $dkm->format) ?>"></td>
                    <td><?= $dkm->nama ?></td>
                    <td><?= $dkm->link ?></td>
                    <td>
                      <a href="<?= base_url(); ?>dokumen/edit_dkm/<?= $dkm->id_dok; ?>" class="btn bg-warning">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="<?= base_url(); ?>dokumen/hapus_dkm/<?= $dkm->id_dok; ?>" class="btn bg-danger" onclick="return confirm ('Yakin?');">
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
  </div>
</section>