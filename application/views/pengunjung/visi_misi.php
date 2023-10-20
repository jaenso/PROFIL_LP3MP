<section class="informasi">
  <div class="container-fluid">
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
        foreach ($visi as $vs) : ?>
          <h1><?= $vs->judul ?></h1>

          <p>
            <?= htmlspecialchars_decode($vs->isi) ?>
          </p>
        <?php endforeach ?>
        <?php
        foreach ($misi as $ms) : ?>
          <h1><?= $ms->judul ?></h1>
          <p>
            <?= htmlspecialchars_decode($ms->isi) ?>
          </p>
        <?php endforeach ?>
        <?php
        foreach ($tujuan as $tjn) : ?>
          <h1><?= $tjn->judul ?></h1>
          <p>
            <?= htmlspecialchars_decode($tjn->isi) ?>
          </p>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>