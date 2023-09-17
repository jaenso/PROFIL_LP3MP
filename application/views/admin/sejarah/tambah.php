<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<!-- <?php if (validation_errors()) :?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    </div>
                <?php endif; ?> -->
			<form method="POST">
			<input type="hidden" name="id_ktg" value="3">
				<div class="form-group">
					<label>Judul</label>
					<input
						type="text"
						name="judul"
						class="form-control"
						placeholder="Judul"
					/>
					<small class="form-text text-danger"
						><?= form_error('judul');?></small
					>
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" id="isi" class="form-control" rows="10"></textarea>
					<small class="form-text text-danger"><?= form_error('isi');?></small>
				</div>
				<button name="tambah" type="submit" class="btn btn-primary mr-2">Tambah</button>
				<button class="btn btn-light">Cancel</button>
			</form>
		</div>
	</div>
</div>
