<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?php if ($this->session->flashdata('flash')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Data pengumuman <strong>berhasil</strong>
								<?= $this->session->flashdata('flash'); ?>.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif; ?>
						<a href="<?= base_url(); ?>konten/tambah_pgm" class="btn bg-primary"><i class="fas fa-plus"></i> Buat <?= $title ?></a>

						<div class="table table-bordered table-striped">
							<table class="table table-bordered">
								<?php if (empty($konten)) : ?>
									<div class="alert alert-danger" role="alert">
										Data tidak ditemukan
									</div>
								<?php endif; ?>
								<thead>
									<tr>
										<th>No</th>
										<th class="col-2">Judul</th>
										<th class="col-4">Isi</th>
										<th>Tanggal</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<?php
								foreach ($konten as $pgm) : ?>
									<tbody>
										<tr>
											<td>
												<?= ++$start; ?>
											</td>
											<td><?= $pgm->judul ?></td>
											<td><?= htmlspecialchars_decode($pgm->isi) ?></td>
											<td><?= date('d-m-Y', strtotime($pgm->tanggal)); ?></td>
											<?php if (empty($pgm->gambar)) { ?>
												<td><img height="150px" width="180px" class="img-rounded" width="50px" src="<?= base_url('uploads/default.jpg') ?>" /></td>
											<?php } else { ?>
												<td><img height="150px" width="180px" class="img-rounded" width="50px" src="<?= base_url('uploads/' . $pgm->gambar) ?>" />
												<?php } ?></td>
												<td>
													<a href="<?= base_url(); ?>pengumuman/detail/<?= $pgm->id_konten; ?>" class="btn bg-success">
														<i class="fas fa-eye"></i>
													</a>
													<a href="<?= base_url(); ?>konten/edit_pgm/<?= $pgm->id_konten; ?>" class="btn bg-warning">
														<i class="fas fa-edit"></i>
													</a>
													<a href="<?= base_url(); ?>konten/hapus_pgm/<?= $pgm->id_konten; ?>" class="btn bg-danger" onclick="return confirm ('Yakin?');">
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