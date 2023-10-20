<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<form method="POST" enctype="multipart/form-data">
					<input type="hidden" name="idw" value="<?= $website['id_website']; ?>">
					<div class="form-group">
						<label>Nama Website</label>
						<input type="text" name="nama" class="form-control" value="<?= $website['nama']; ?>" />
						<small class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
						<label>Deskripsi Website</label>
						<input type="text" name="deskripsi" class="form-control" value="<?= $website['deskripsi']; ?>" />
						<small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
					</div>
					<div class="form-group">
						<label>Logo Website</label>
						<div class="input-group col-xs-12">
							<input type="file" name="logo_userfile" id="logo_userfile" size="20" class="form-control file-upload-info" onchange="previewImage('logo_userfile', 'preview_logo');" />
							<span class="input-group-append">
								<input type="submit" value="Upload" class="file-upload-browse btn btn-primary">
							</span>
						</div>
					</div>
					<div class="form-group">
						<label>Preview Gambar</label>
						<img id="preview_logo" style="display:none; max-height: 800px; max-width: 300px;" src="" alt="">
					</div>

					<div class="form-group">
						<label>Background Website</label>
						<div class="input-group col-xs-12">
							<input type="file" name="background_userfile" id="background_userfile" size="20" class="form-control file-upload-info" onchange="previewImage('background_userfile', 'preview_background');" />
							<span class="input-group-append">
								<input type="submit" value="Upload" class="file-upload-browse btn btn-primary">
							</span>
						</div>
					</div>
					<div class="form-group">
						<label>Preview Gambar</label>
						<img id="preview_background" style="display:none; max-height: 800px; max-width: 300px;" src="" alt="">
					</div>

					<div class="form-group">
						<label>Link Fakultas Keguruan dan Ilmu Pendidikan</label>
						<input type="text" name="fkip" class="form-control" value="<?= $website['fkip']; ?>" />
						<small class="form-text text-danger"><?= form_error('fkip'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Ekonomi Bisnis</label>
						<input type="text" name="feb" class="form-control" value="<?= $website['feb']; ?>" />
						<small class="form-text text-danger"><?= form_error('feb'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Pertanian</label>
						<input type="text" name="fp" class="form-control" value="<?= $website['fp']; ?>" />
						<small class="form-text text-danger"><?= form_error('fp'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Teknik</label>
						<input type="text" name="ft" class="form-control" value="<?= $website['ft']; ?>" />
						<small class="form-text text-danger"><?= form_error('ft'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Hukum</label>
						<input type="text" name="fh" class="form-control" value="<?= $website['fh']; ?>" />
						<small class="form-text text-danger"><?= form_error('fh'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Ilmu Sosial Politik</label>
						<input type="text" name="fisip" class="form-control" value="<?= $website['fisip']; ?>" />
						<small class="form-text text-danger"><?= form_error('fisip'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Kedokteran</label>
						<input type="text" name="fk" class="form-control" value="<?= $website['fk']; ?>" />
						<small class="form-text text-danger"><?= form_error('fk'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Fakultas Matematikan dan Ilmu Pengetahuan</label>
						<input type="text" name="fmipa" class="form-control" value="<?= $website['fmipa']; ?>" />
						<small class="form-text text-danger"><?= form_error('fmipa'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Program Pasca Sarjana</label>
						<input type="text" name="pps" class="form-control" value="<?= $website['pps']; ?>" />
						<small class="form-text text-danger"><?= form_error('pps'); ?></small>
					</div>
					<div class="form-group">
						<label>Link UPT TIK</label>
						<input type="text" name="tik" class="form-control" value="<?= $website['tik']; ?>" />
						<small class="form-text text-danger"><?= form_error('tik'); ?></small>
					</div>
					<div class="form-group">
						<label>Link UPT Bahasa</label>
						<input type="text" name="bahasa" class="form-control" value="<?= $website['bahasa']; ?>" />
						<small class="form-text text-danger"><?= form_error('bahasa'); ?></small>
					</div>
					<div class="form-group">
						<label>Link UPT Perpustakaan</label>
						<input type="text" name="perpustakaan" class="form-control" value="<?= $website['perpustakaan']; ?>" />
						<small class="form-text text-danger"><?= form_error('perpustakaan'); ?></small>
					</div>
					<div class="form-group">
						<label>Link UPT Lab Lahan Gambut</label>
						<input type="text" name="gambut" class="form-control" value="<?= $website['gambut']; ?>" />
						<small class="form-text text-danger"><?= form_error('gambut'); ?></small>
					</div>
					<div class="form-group">
						<label>Link UPT Lab Terpadu</label>
						<input type="text" name="terpadu" class="form-control" value="<?= $website['terpadu']; ?>" />
						<small class="form-text text-danger"><?= form_error('terpadu'); ?></small>
					</div>
					<div class="form-group">
						<label>Link LPPM</label>
						<input type="text" name="lppm" class="form-control" value="<?= $website['lppm']; ?>" />
						<small class="form-text text-danger"><?= form_error('lppm'); ?></small>
					</div>

					<button type="submit" name="ubah" class="btn btn-primary mr-2">Simpan</button>

					<script type="text/javascript">
						function previewImage(inputId, previewId) {
							var fileInput = document.getElementById(inputId);
							var preview = document.getElementById(previewId);

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