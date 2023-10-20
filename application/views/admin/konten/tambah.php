<section class="content">
      <div class="container-fluid">
        <div class="row">
			<div class="col-12 grid-margin stretch-card">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tanggal</label>
					<input value="<?= date("Y-m-d") ?>" readonly name="tanggal" type="date" class="form-control" />
					<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
				</div>
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Judul" />
					<small class="form-text text-danger"><?= form_error('judul'); ?></small>
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" id="isi" class="form-control" rows="10"></textarea>
					<small class="form-text text-danger"><?= form_error('isi'); ?></small>
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
				<button name="tambah" type="submit" class="btn btn-primary mr-2">Tambah</button>
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