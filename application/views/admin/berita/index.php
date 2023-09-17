<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<?php if ($this->session->flashdata('flash')):?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data berita <strong>berhasil</strong>
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

			<a href="<?= base_url();?>berita/tambah" class="btn btn-primary"
				><i class="mdi mdi-note-plus"></i
			></a>

			<div class="table-responsive pt-3">
				<table class="table table-bordered">
					<?php if(empty($konten)) : ?>
					<div class="alert alert-danger" role="alert">
						Data tidak ditemukan
					</div>
					<?php endif;?>
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Isi</th>
							<th>Tanggal</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<?php 
            foreach ($konten as $brt) : ?>
					<tbody>
						<tr>
							<td>
								<?= ++$start; ?>
							</td>
							<td><?= $brt->judul ?></td>
							<td><?= htmlspecialchars_decode ($brt->isi) ?></td>
							<td><?= date('d-m-Y', strtotime($brt->tanggal)); ?></td>
							<?php if (empty($brt->gambar)){?>
								<td><img class="img-rounded" width="50px" src="<?= base_url('uploads/default.jpg') ?>"/></td>
							<?php } else { ?>
							<td><img class="img-rounded" width="50px" src="<?= base_url('uploads/' . $brt->gambar) ?>"/>
							<?php }?></td>
							<td>
								<a
									href="<?= base_url();?>berita/edit/<?= $brt->id_konten;?>"
									class="btn btn-warning"
									><i class="mdi mdi-tooltip-edit"></i
								></a>
								<a
									href="<?= base_url();?>berita/hapus/<?= $brt->id_konten;?>"
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
