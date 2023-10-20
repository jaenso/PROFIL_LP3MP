<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama" />
						<small class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
						<label>Format</label>
						<select name="format" class="form-control">
							<option value="">Pilih Format</option>
							<option value="pdf.png">PDF</option>
							<option value="doc.png">WORD</option>
						</select>
						<small class="form-text text-danger"><?= form_error('format'); ?></small>
					</div>
					<div class="form-group">
						<label>Link Drive</label>
						<input type="text" name="link" class="form-control" placeholder="Link Drive" />
						<small class="form-text text-danger"><?= form_error('link'); ?></small>
					</div>
					<button name="tambah" type="submit" class="btn btn-primary mr-2">Tambah</button>
					<button class="btn btn-light">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</section>