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
							<div class="btn-group mb-3">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Tambah Tokoh
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= base_url('tokoh/tambah/pengelola'); ?>">Pengelola</a>
									<a class="dropdown-item" href="<?= base_url('tokoh/tambah/pusat_studi'); ?>">Pusat Manajemen Mutu</a>
									<a class="dropdown-item" href="<?= base_url('tokoh/tambah/akreditasi'); ?>">Pusat Pengelolaan Akreditasi</a>
									<a class="dropdown-item" href="<?= base_url('tokoh/tambah/kompetensi'); ?>">Pusat Pelatihan dan Pengembangan Kompetisi Sumber Daya Manusia</a>
									<a class="dropdown-item" href="<?= base_url('tokoh/tambah/mbkm'); ?>">Pusat Pengelolaan Merdeka Belajar Kampus Merdeka dan Kurikulum</a>
									<a class="dropdown-item" href="<?= base_url('tokoh/tambah/pangkalan_data'); ?>">Pusat Pangkalan Data dan Sistem Informasi Mutu Akademik</a>
								</div>
							</div>
							<table id="example1" class="table table-bordered table-striped">
								<?php if (empty($tokoh)) : ?>
									<div class="alert alert-danger" role="alert">
										Data tidak ditemukan
									</div>
								<?php endif; ?>
								<thead>
									<tr>
										<th>No</th>
										<th>Jabatan</th>
										<th>Nama</th>
										<th>NIP</th>
										<th>Kantor</th>
										<th col="5">Deskripsi Pekerjaan</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($tokoh as $tkh) : ?>
										<tr>
											<td>
												<?= ++$start; ?>
											</td>
											<td><?= $tkh->jabatan ?></td>
											<td><?= $tkh->nama ?></td>
											<td><?= $tkh->nip ?></td>
											<td><?= $tkh->kantor ?></td>
											<td><?= $tkh->deskripsi ?></td>
											<?php if (empty($tkh->gambar)) { ?>
												<td><img height="150px" width="180px" src="<?= base_url('uploads/default.jpg') ?>" /></td>
											<?php } else { ?>
												<td><img height="150px" width="180px" src="<?= base_url('uploads/' . $tkh->gambar) ?>" />
												<?php } ?></td>
												<td>
													<a href="<?= base_url('tokoh/edit/' . $tkh->id_tokoh . '/' . $tkh->kategori); ?>" class="btn bg-warning">
														<i class="fas fa-edit"></i>
													</a>
													<a href="<?= base_url('tokoh/hapus/' . $tkh->id_tokoh . '/' . $tkh->kategori); ?>" class="btn bg-danger " onclick="return confirm ('Yakin?');">
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
		</div>
</section>