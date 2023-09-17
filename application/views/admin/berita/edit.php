<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<!-- <?php if (validation_errors()) :?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    </div>
                <?php endif; ?> -->
			<form method="POST" enctype="multipart/form-data">
			<input type="hidden" name="idk" value="<?= $konten['id_konten'];?>">
				<div class="form-group">
					<label>Tanggal</label>
					<input name="tanggal" type="date" class="form-control" value="<?= $konten['tanggal'];?>"/>
					<small class="form-text text-danger"
						><?= form_error('tanggal');?></small
					>
				</div>
				<div class="form-group">
					<label>Judul</label>
					<input
						type="text"
						name="judul"
						class="form-control"
						placeholder="Judul" value="<?= $konten['judul'];?>"
					/>
					<small class="form-text text-danger"
						><?= form_error('judul');?></small
					>
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi"  class="form-control" rows="10" id="isi"><?php echo $konten['isi']; ?></textarea>
					<small class="form-text text-danger"><?= form_error('isi');?></small>
				</div>
				<div class="form-group">
					<label>Gambar Lama</label>
					<?php if (empty($konten['gambar'])){?>
						<img src="<?= base_url('uploads/default.jpg') ?>"/>
					<?php } else { ?>
						<img src="<?= base_url('uploads/' . $konten['gambar']); ?>" alt="Gambar Lama" width="100">
					<?php }?></td>
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
