<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">	
	<div class="card">
		<div class="card-body">
			<?php if ($this->session->flashdata('flash')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data pengelola <strong>berhasil</strong>
					<?= $this->session->flashdata('flash'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<div class="table-responsive pt-3">
				<table class="table table-bordered">
					<?php if (empty($informasi)) : ?>
						<div class="alert alert-danger" role="alert">
							Data tidak ditemukan
						</div>
					<?php endif; ?>
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th class="col-8">Isi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<?php
					$i = 1;
					foreach ($informasi as $pgl) : ?>
						<tbody>
							<tr>
								<td>
									<?= $i++; ?>
								</td>
								<td><?= $pgl->judul ?></td>
								<td><?= htmlspecialchars_decode($pgl->isi) ?></td>
								<td>
									<a href="<?= base_url(); ?>informasi/edit_pgl/<?= $pgl->id_informasi; ?>" class="btn bg-warning">
										<i class="fas fa-edit"></i>
									</a>
								</td>
							</tr>
						</tbody>
					<?php endforeach ?>
				</table>
				</div>
		</div>
		</div>
        </div>
      </div>
    </section>