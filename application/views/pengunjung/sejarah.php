<section class="informasi">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-10">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <i class="bx bxs-home"></i><a href="<?= base_url(); ?>pengunjung">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?>
            </li>
          </ol>
        </nav>

        <?php
        foreach ($informasi as $sjr) : ?>
          <h1><?= $sjr->judul ?></h1>
          <p>
            <?= htmlspecialchars_decode($sjr->isi) ?>
          </p>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>