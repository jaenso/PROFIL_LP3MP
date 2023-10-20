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
            <form action="<?= base_url('dokumen/import_excel'); ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <input type="file" name="upload_file" id="upload_file" class="form-control" accept=".csv, .xlsx, .xls">
                  </div>
                </div>
                <div class="col-4">
                  <button type="submit" class="btn btn-primary">Import Excel</button>
                </div>
              </div>
            </form>
            <div class="form-group">
              <a href="<?= base_url(); ?>dokumen/tambah_dkm_srt" class="btn bg-primary"><i class="fas fa-plus"></i> Buat <?= $title ?></a>
            </div>

            <table class="table table-responsive table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Program Studi</th>
                  <th>Strata</th>
                  <th>Fakultas</th>
                  <th>No. SK</th>
                  <th>Peringkat</th>
                  <th>Tanggal Kadaluarsa</th>
                  <th>Status Kadaluarsa</th>
                  <th>Keterangan</th>
                  <th>Link Drive</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php
              foreach ($dokumen as $dkm) : ?>
                <tbody>
                  <tr>
                    <td><?= ++$start; ?></td>
                    <td><?= $dkm->p_studi ?></td>
                    <td><?= $dkm->strata ?></td>
                    <td><?= $dkm->fakultas ?></td>
                    <td><?= $dkm->no_sk ?></td>
                    <td><?= $dkm->peringkat ?></td>
                    <td><?= $dkm->tgl_kadaluarsa ?></td>
                    <td><?= $dkm->status ?></td>
                    <td><?= $dkm->keterangan ?></td>
                    <td><?= $dkm->link ?></td>
                    <td>
                      <a href="<?= base_url(); ?>dokumen/edit_dkm_srt/<?= $dkm->id_dok; ?>" class="btn bg-warning">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="<?= base_url(); ?>dokumen/hapus_dkm_srt/<?= $dkm->id_dok; ?>" class="btn bg-danger" onclick="return confirm ('Yakin?');">
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