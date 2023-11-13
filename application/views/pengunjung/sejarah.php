<section class="informasi">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
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