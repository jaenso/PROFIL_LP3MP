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
								<label for="p_studi">Program Studi</label>
								<input type="text" name="p_studi" class="form-control" id="p_studi" placeholder="Masukan program studi">
								<small class="form-text text-danger"><?= form_error('p_studi'); ?></small>
							</div>
							<div class="form-group">
								<label for="strata">Strata</label>
								<input type="text" name="strata" class="form-control" id="strata" placeholder="Masukan strata">
								<small class="form-text text-danger"><?= form_error('strata'); ?></small>
							</div>
							<div class="form-group">
								<label for="fakultas">Fakultas</label>
								<input type="text" name="fakultas" class="form-control" id="fakultas" placeholder="Masukan fakultas">
								<small class="form-text text-danger"><?= form_error('fakultas'); ?></small>
							</div>
							<div class="form-group">
								<label for="no_sk">No. SK</label>
								<input type="text" name="no_sk" class="form-control" id="no_sk" placeholder="Masukan nomor SK">
								<small class="form-text text-danger"><?= form_error('no_sk'); ?></small>
							</div>
							<div class="form-group">
								<label for="peringkat">Peringkat</label>
								<input type="text" name="peringkat" class="form-control" id="peringkat" placeholder="Masukan peringkat">
								<small class="form-text text-danger"><?= form_error('peringkat'); ?></small>
							</div>
							<div class="form-group">
								<label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
								<input type="date" name="tgl_kadaluarsa" class="form-control" id="tgl_kadaluarsa" placeholder="Masukan tanggal kadaluarsa">
								<small class="form-text text-danger"><?= form_error('tgl_kadaluarsa'); ?></small>
							</div>
							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan keterangan">
								<small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
							</div>
							<div class="form-group">
								<label for="status">Status Kadaluarsa</label>
								<input type="text" name="status" class="form-control" id="status" placeholder="Masukan status kadaluarsa">
								<small class="form-text text-danger"><?= form_error('status'); ?></small>
							</div>
							<div class="form-group">
								<label for="link">Link Drive</label>
								<input type="text" name="link" class="form-control" id="link" placeholder="Masukan link drive">
								<small class="form-text text-danger"><?= form_error('link'); ?></small>
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