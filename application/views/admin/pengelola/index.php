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

			<div class="table-responsive pt-3">
				<table class="table table-bordered">
					<?php if(empty($informasi)) : ?>
					<div class="alert alert-danger" role="alert">
						Data tidak ditemukan
					</div>
					<?php endif;?>
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Isi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<?php 
            foreach ($informasi as $pgl) : ?>
					<tbody>
						<tr>
							<td>
								<?= ++$start; ?>
							</td>
							<td><?= $pgl->judul ?></td>
							<td><?= htmlspecialchars_decode($pgl->isi) ?></td>
							<td>
								<a
									href="<?= base_url();?>pengelola/edit/<?= $pgl->id_informasi;?>"
									class="btn btn-warning"
									><i class="mdi mdi-tooltip-edit"></i
								></a>
								<a
									href="<?= base_url();?>pengelola/hapus/<?= $pgl->id_informasi;?>"
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
