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
							<input type="hidden" name="idk" value="<?= $dokumen['id_dok']; ?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control" id="nama" value="<?= $dokumen['nama']; ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label for="format">Format</label>
								<select name="format" class="form-control">
									<option value="">Pilih Format</option>
									<option value="pdf.png" <?= ($dokumen['format'] == 'pdf.png') ? 'selected' : '' ?>>PDF</option>
									<option value="doc.png" <?= ($dokumen['format'] == 'doc.png') ? 'selected' : '' ?>>WORD</option>
								</select>
								<small class="form-text text-danger"><?= form_error('format'); ?></small>
							</div>
							<div class="form-group">
								<label for="link">Link Drive</label>
								<input type="text" name="link" class="form-control" id="link" value="<?= $dokumen['link']; ?>">
								<small class="form-text text-danger"><?= form_error('link'); ?></small>
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