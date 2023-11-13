<section class="informasi">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
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