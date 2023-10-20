<section class="content">
      <div class="container-fluid">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
			<form method="POST" enctype="multipart/form-data">
				<input type="hidden" name="idk" value="<?= $dokumen['id_dok']; ?>">
				<div class="form-group">
					<label>Program Studi</label>
					<input type="text" name="p_studi" class="form-control" placeholder="Program Studi" value="<?= $dokumen['p_studi']; ?>"/>
					<small class="form-text text-danger"><?= form_error('p_studi'); ?></small>
				</div>
				<div class="form-group">
					<label>Strata</label>
					<input type="text" name="strata" class="form-control" placeholder="Strata" value="<?= $dokumen['strata']; ?>"/>
					<small class="form-text text-danger"><?= form_error('strata'); ?></small>
				</div>
				<div class="form-group">
					<label>No. SK</label>
					<input type="text" name="no_sk" class="form-control" placeholder="Nomor SK" value="<?= $dokumen['no_sk']; ?>"/>
					<small class="form-text text-danger"><?= form_error('no_sk'); ?></small>
				</div>
				<div class="form-group">
					<label>Peringkat</label>
					<input type="text" name="peringkat" class="form-control" placeholder="Peringkat" value="<?= $dokumen['peringkat']; ?>"/>
					<small class="form-text text-danger"><?= form_error('peringkat'); ?></small>
				</div>
				<div class="form-group">
					<label>Tanggal Kadaluarsa</label>
					<input name="tgl_kadaluarsa" type="date" class="form-control" value="<?= $dokumen['tgl_kadaluarsa']; ?>"/>
					<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
				</div>
				<div class="form-group">
					<label>Status Kadaluarsa</label>
					<input type="text" name="status" class="form-control" placeholder="Status Kadaluarsa" value="<?= $dokumen['status']; ?>"/>
					<small class="form-text text-danger"><?= form_error('status'); ?></small>
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