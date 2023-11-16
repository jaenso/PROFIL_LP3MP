<section class="informasi">
	<div class="pengelola container">
		<div class="row justify-content-center">
			<div class="col-11">
				<?php
				foreach ($informasi as $pgl) : ?>
					<h1><?= $pgl->judul ?></h1>
					<p>
						<?= htmlspecialchars_decode($pgl->isi) ?>
					</p>
				<?php endforeach ?>
				<style>
					.tokoh h2 {
						font-size: 1rem;
					}
				</style>

				<?php foreach ($tokoh as $tkh) : ?>
					<div class="row">
						<div class="col-12 my-2">
							<button class="btn btn-pengelola btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $tkh->id_tokoh ?>" aria-expanded="false" aria-controls="collapseExample">
								<?= $tkh->jabatan ?>
							</button>
						</div>
					</div>
					<div class="collapse" id="collapseExample<?= $tkh->id_tokoh ?>">
						<div class="card card-body">
							<img class="bingkai-pengelola" src="<?= base_url('uploads/' . $tkh->gambar) ?>" />
							<table class="table table-borderless w-auto">
								<tbody>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td>
											<?= $tkh->nama ?>
										</td>
									</tr>
									<tr>
										<td>NIP</td>
										<td>:</td>
										<td>
											<?= $tkh->nip ?>
										</td>
									</tr>
									<tr>
										<td>Jabatan</td>
										<td>:</td>
										<td>
											<?= $tkh->jabatan ?>
										</td>
									</tr>
									<tr>
								</tbody>
							</table>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>
<script>
	const tokohElements = document.querySelectorAll(".tokoh");

	tokohElements.forEach((tokoh) => {
		const deskripsi = tokoh.querySelector(".deskripsi-tokoh");

		tokoh.addEventListener("click", () => {
			tokoh.classList.toggle("active");
		});
	});
</script>

<script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>