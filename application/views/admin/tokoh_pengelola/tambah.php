<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<!-- <?php if (validation_errors()) :?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    </div>
                <?php endif; ?> -->
			<form method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id_ktg" value="6">
			<div class="form-group">
					<label>Nama</label>
					<input
						type="text"
						name="nama"
						class="form-control"
						placeholder="Nama"
					/>
					<small class="form-text text-danger"
						><?= form_error('nama');?></small
					>
				</div>
				<div class="form-group">
					<label>NIP</label>
					<input
						type="number"
						name="nip"
						class="form-control"
						placeholder="NIP"
					/>
					<small class="form-text text-danger"
						><?= form_error('nip');?></small
					>
				</div>
				<div class="form-group">
					<label>Golongan</label>
					<input
						type="text"
						name="golongan"
						class="form-control"
						placeholder="golongan"
					/>
					<small class="form-text text-danger"
						><?= form_error('golongan');?></small
					>
				</div>
				<div class="form-group">
					<label>Deskripsi Pekerjaan</label>
					<input
						type="text"
						name="deskripsi"
						class="form-control"
						placeholder="Deskripsi"
					/>
					<small class="form-text text-danger"
						><?= form_error('deskripsi');?></small
					>
				</div>
				<div class="form-group">
					<label>File upload</label>
					<input class="file-upload-default" />
					<div class="input-group col-xs-12">
						<input
							type="file"
							name="userfile"
							id="userfile"
							size="20"
							class="form-control file-upload-info"
							onchange="previewImage();"
						/>
						<span class="input-group-append">
							<input type="submit" value="Upload" class="file-upload-browse btn btn-primary">
								
						</span>
					</div>
				</div>
				<div class="form-group">
					<label>Preview Gambar</label>
					<img id="preview" style="display:none; max-width: 300px;" src="" alt="">
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
