<section class="content">
      <div class="container-fluid">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<input type="hidden" name="idt" value="<?= $tokoh['id_tokoh']; ?>">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" value="<?= $tokoh['nama']; ?>" />
					<small class="form-text text-danger"><?= form_error('nama'); ?></small>
				</div>
				<div class="form-group">
					<label>NIP</label>
					<input type="number" name="nip" class="form-control" value="<?= $tokoh['nip']; ?>" />
					<small class="form-text text-danger"><?= form_error('nip'); ?></small>
				</div>
				<div class="form-group">
					<label>Golongan</label>
					<input type="text" name="golongan" class="form-control" value="<?= $tokoh['golongan']; ?>" />
					<small class="form-text text-danger"><?= form_error('golongan'); ?></small>
				</div>
				<div class="form-group">
					<label>Deskripsi Pekerjaan</label>
					<input type="text" name="deskripsi" class="form-control" value="<?= $tokoh['deskripsi']; ?>" />
					<small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
				</div>
				<div class="form-group">
					<label>Gambar Lama</label>
					<br>
					<?php if (empty($tokoh['gambar'])) { ?>
						<img style="max-width: 300px; max-height: 800px" src="<?= base_url('uploads/default.jpg') ?>" />
					<?php } else { ?>
						<img style="max-width: 300px; max-height: 800px" src="<?= base_url('uploads/' . $tokoh['gambar']); ?>" alt="Gambar Lama" width="100">
					<?php } ?></td>
				</div>
				<div class="form-group">
					<label>File upload</label>
					<div class="input-group col-xs-12">
						<input type="file" name="userfile" id="userfile" size="20" class="form-control file-upload-info" onchange="previewImage();" />
						<span class="input-group-append">
							<input type="submit" value="Upload" class="file-upload-browse btn btn-primary">

						</span>
					</div>
				</div>
				<div class="form-group">
					<label>Preview Gambar</label>
					<img id="preview" style="display:none;  max-height: 800px; max-width: 300px;" src="" alt="">
				</div>
				<button type="submit" name="ubah" class="btn btn-primary mr-2">Ubah</button>
				<button class="btn btn-light">Cancel</button>
			</form>
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
		</div>
	</div>
</div>
</section>