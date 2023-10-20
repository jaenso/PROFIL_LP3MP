<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<form method="POST" enctype="multipart/form-data">
					<input type="hidden" name="idk" value="<?= $dokumen['id_dok']; ?>">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $dokumen['nama']; ?>" />
						<small class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
						<label>Format</label>
						<select name="format" class="form-control">
							<option value="">Pilih Format</option>
							<option value="pdf.png" <?= ($dokumen['format'] == 'pdf.png') ? 'selected' : '' ?>>PDF</option>
							<option value="doc.png" <?= ($dokumen['format'] == 'doc.png') ? 'selected' : '' ?>>WORD</option>
						</select>
						<small class="form-text text-danger"><?= form_error('format'); ?></small>
					</div>

					<div class="form-group">
						<label>Link Drive</label>
						<input type="text" name="link" class="form-control" placeholder="Link Drive" value="<?= $dokumen['link']; ?>" />
						<small class="form-text text-danger"><?= form_error('link'); ?></small>
					</div>
					<button type="submit" name="ubah" class="btn btn-primary mr-2">Ubah</button>
					<button class="btn btn-light">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</section>