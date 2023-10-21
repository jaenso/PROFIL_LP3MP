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
							<div class="form-group">
								<label for="tanggal">Tanggal</label>
								<input value="<?= date("Y-m-d") ?>" readonly name="tanggal" id="tanggal" type="date" class="form-control" />
								<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
							</div>
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan judul">
								<small class="form-text text-danger"><?= form_error('judul'); ?></small>
							</div>
							<div class="form-group">
								<label for="isi">Isi</label>
								<textarea name="isi" id="isi" class="form-control" rows="10"></textarea>
								<small class="form-text text-danger"><?= form_error('isi'); ?></small>
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
							<button type="submit" class="btn btn-primary">Submit</button>
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