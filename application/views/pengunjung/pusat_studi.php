<section class="informasi">
  <div class="pengelola container-fluid">
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
        foreach ($informasi as $ps) : ?>
          <h1><?= $ps->judul ?></h1>
          <p>
            <?= htmlspecialchars_decode($ps->isi) ?>
          </p>
        <?php endforeach ?>

        <style>
          .tokoh h2 {
            font-size: 1rem;
          }
        </style>
        <div class="tokoh">
          <h2>1. Pusat Kajian Tanaman Obat dan Tradisional</h2>
          <div class="deskripsi-tokoh">
            <img class="bingkai-pengelola" src="<?= base_url(); ?>assets_pengunjung/images/pengelola.png" />
            <p>Answer to Question 1 goes here.</p>
            <table class="table table-borderless w-auto">
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td>: dr. Nawan</td>
                </tr>
                <tr>
                  <td>NIP</td>
                  <td>: 923123123121</td>
                </tr>
                <tr>
                  <td>Pangkat/Gol.</td>
                  <td>: III-C</td>
                </tr>
                <tr>
                  <td>Email Resmi</td>
                  <td>: nawan@lppm.upr.ac.id</td>
                </tr>
                <tr>
                  <td>Penjelasan Pusat Studi</td>
                  <td>
                    : Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Praesentium perferendis hic facere placeat
                    tenetur id doloribus tempora explicabo velit soluta?
                    Maxime modi harum accusantium delectus consequuntur
                    suscipit velit similique unde?
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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