<section class="content">
      <div class="container-fluid">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<form method="POST">
				<input type="hidden" name="idf" value="<?= $informasi['id_informasi']; ?>">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Judul" value="<?= $informasi['judul']; ?>" />
					<small class="form-text text-danger"><?= form_error('judul'); ?></small>
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" class="form-control" rows="10" id="isi"><?php echo $informasi['isi']; ?></textarea>
					<small class="form-text text-danger"><?= form_error('isi'); ?></small>
				</div>

				<button type="submit" name="ubah" class="btn btn-primary mr-2">Ubah</button>
				<button class="btn btn-light">Cancel</button>
			</form>
		</div>
	</div>
</div>
</div>
			</div>
    </section>