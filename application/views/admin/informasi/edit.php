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
							<input type="hidden" name="idf" value="<?= $informasi['id_informasi']; ?>">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" name="judul" class="form-control" id="judul" value="<?= $informasi['judul']; ?>">
								<small class="form-text text-danger"><?= form_error('judul'); ?></small>
							</div>
							<div class="form-group">
								<label for="isi">Isi</label>
								<textarea name="isi" id="isi" class="form-control" rows="10"><?php echo $informasi['isi']; ?></textarea>
								<small class="form-text text-danger"><?= form_error('isi'); ?></small>
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