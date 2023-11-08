<section class="informasi">
	<div class="pengelola container">
		<div class="row justify-content-center">
			<div class="col-10">
				<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="bx bxs-home"></i><a href="<?= base_url(); ?>pengunjung">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							<?= $title ?>
						</li>
					</ol>
				</nav>
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
					<div class="tokoh">
						<h2><?= $tkh->jabatan ?></h2>
						<div class="deskripsi-tokoh">
							<img class="bingkai-pengelola" src="<?= base_url('uploads/' . $tkh->gambar) ?>" />
							<table class="table table-borderless w-auto">
								<tbody>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td><?= $tkh->nama ?></td>
									</tr>
									<tr>
										<td>NIP</td>
										<td>:</td>
										<td><?= $tkh->nip ?></td>
									</tr>
									<tr>
										<td>Jabatan</td>
										<td>:</td>
										<td><?= $tkh->jabatan ?></td>
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