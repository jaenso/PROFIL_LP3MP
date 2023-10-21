<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title"><?= $title ?></h3>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<div class="card-body">
							<input type="hidden" name="idt" value="<?= $tokoh['id_tokoh']; ?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control" id="nama" value="<?= $tokoh['nama']; ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label for="nip">NIP</label>
								<input type="number" name="nip" class="form-control" id="nip" value="<?= $tokoh['nip']; ?>">
								<small class="form-text text-danger"><?= form_error('nip'); ?></small>
							</div>
							<div class="form-group">
								<label for="golongan">Golongan</label>
								<input type="text" name="golongan" class="form-control" id="golongan" value="<?= $tokoh['golongan']; ?>">
								<small class="form-text text-danger"><?= form_error('golongan'); ?></small>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi Pekerjaan</label>
								<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $tokoh['deskripsi']; ?>">
								<small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
							</div>
							<div class="form-group">
								<label>Gambar Lama</label>
								<br>
								<?php if (empty($konten['gambar'])) { ?>
									<img style="max-width: 300px; max-height: 800px" src="<?= base_url('uploads/default.jpg') ?>" />
								<?php } else { ?>
									<img style="max-width: 300px; max-height: 800px" src="<?= base_url('uploads/' . $konten['gambar']); ?>" alt="Gambar Lama" width="100">
								<?php } ?></td>
							</div>
							<div class="form-group">
								<label for="userfile">Upload Gambar</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" name="userfile" id="userfile" size="20" class="form-control file-upload-info" onchange="previewImage();" />
										<label class="custom-file-label" for="userfile">Choose file</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text">Upload</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Preview Gambar</label>
								<img id="preview" style="display:none;  max-height: 800px; max-width: 300px;" src="" alt="">
							</div>
						</div>
						<div class="card-footer">
							<button name="tambah" type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	function previewImage() {
		var fileInput = document.getElementById('userfile');
		var preview = document.getElementById('preview');

		if (fileInput.files && fileInput.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				preview.src = e.target.result;
				preview.style.display = 'block';
			};

			reader.readAsDataURL(fileInput.files[0]);
		}
	}
</script>