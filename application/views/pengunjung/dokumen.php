<section class="informasi">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11">
				<h1>Dokumen</h1>
				<div class="row justify-content-center">
					<?php foreach ($dokumen as $dkm) : ?>
						<div class="col-12 dokumen mb-4">
							<div class="d-flex">
								<img src="<?= base_url('assets_pengunjung/images/' . $dkm->format); ?>" class="bingkai-format">
								<div>
									<a href="<?= $dkm->link ?>"><?= $dkm->nama ?></a>
									<span class="d-block">1 file(s)</span>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<?= $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</div>
</section>