<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<?php if ($this->session->flashdata('flash')):?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data pengelola <strong>berhasil</strong>
				<?= $this->session->flashdata('flash');?>.
				<button
					type="button"
					class="close"
					data-dismiss="alert"
					aria-label="Close"
				>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>

			<a href="<?= base_url();?>tokoh_pusat_studi/tambah" class="btn btn-primary"
				><i class="mdi mdi-note-plus"></i
			></a>

			<div class="table-responsive pt-3">
				<table class="table table-bordered">
					<?php if(empty($tokoh)) : ?>
					<div class="alert alert-danger" role="alert">
						Data tidak ditemukan
					</div>
					<?php endif;?>
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NIP</th>
							<th>Golongan</th>
							<th>Deskripsi Pekerjaan</th>
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
							<?php if (empty($tkh->gambar)){?>
								<td><img class="img-rounded" width="50px" src="<?= base_url('uploads/default.jpg') ?>"/></td>
							<?php } else { ?>
							<td><img class="img-rounded" width="50px" src="<?= base_url('uploads/' . $tkh->gambar) ?>"/>
							<?php }?></td>
							<td>
								<a
									href="<?= base_url();?>tokoh_pusat_studi/edit/<?= $tkh->id_tokoh;?>"
									class="btn btn-warning"
									><i class="mdi mdi-tooltip-edit"></i
								></a>
								<a
									href="<?= base_url();?>tokoh_pusat_studi/hapus/<?= $tkh->id_tokoh;?>"
									class="btn btn-danger"
									onclick="return confirm ('Yakin?');"
									><i class="mdi mdi-delete"></i
								></a>
							</td>
						</tr>
					</tbody>
					<?php endforeach?>
				</table>
				<?= $this->pagination->create_links();?>
			</div>
		</div>
	</div>
</div>
