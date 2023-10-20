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
						<a href="<?= base_url(); ?>tokoh/tambah_ps" class="btn bg-primary"><i class="fas fa-plus"></i> Buat <?= $title ?></a>

						<div class="table-responsive pt-3">
							<table class="table table-bordered">
								<?php if (empty($tokoh)) : ?>
									<div class="alert alert-danger" role="alert">
										Data tidak ditemukan
									</div>
								<?php endif; ?>
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>NIP</th>
										<th>Golongan</th>
										<th col="5">Deskripsi Pekerjaan</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<?php
								foreach ($tokoh as $tkh) : ?>
									<tbody>
										<tr>
											<td>
												<?= ++$start; ?>
											</td>
											<td><?= $tkh->nama ?></td>
											<td><?= $tkh->nip ?></td>
											<td><?= $tkh->golongan ?></td>
											<td><?= $tkh->deskripsi ?></td>
											<?php if (empty($tkh->gambar)) { ?>
												<td><img height="150px" width="180px" src="<?= base_url('uploads/default.jpg') ?>" /></td>
											<?php } else { ?>
												<td><img height="150px" width="180px" src="<?= base_url('uploads/' . $tkh->gambar) ?>" />
												<?php } ?></td>
												<td>
													<a href="<?= base_url(); ?>tokoh/edit_ps/<?= $tkh->id_tokoh; ?>" class="btn bg-warning">
														<i class="fas fa-edit"></i>
													</a>
													<a href="<?= base_url(); ?>tokoh/hapus_ps/<?= $tkh->id_tokoh; ?>" class="btn bg-danger " onclick="return confirm ('Yakin?');">
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