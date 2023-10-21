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
							<input type="hidden" name="idw" value="<?= $website['id_website']; ?>">
							<div class="form-group">
								<label for="nama">Nama Website</label>
								<input type="text" name="nama" class="form-control" id="nama" value="<?= $website['nama']; ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi Website</label>
								<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $website['deskripsi']; ?>">
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
								<label>Preview Logo</label>
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
								<label>Preview Background</label>
								<img id="preview_background" style="display:none; max-height: 800px; max-width: 300px;" src="" alt="">
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	function previewImage(inputId, previewId) {
		var fileInput = document.getElementById(inputId);
		var preview = document.getElementById(previewId);

		if (fileInput.files && fileInput.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				preview.src = '';
				preview.style.display = 'none';

				preview.src = e.target.result;
				preview.style.display = 'block';
			};

			reader.readAsDataURL(fileInput.files[0]);
		}
	}
</script>