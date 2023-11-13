<footer>
  <div class="main-footer py-5 px-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 mb-3">
          <img src="<?= base_url(); ?>assets_pengunjung/images/logo.png" class="logo-footer" />
        </div>
        <div class="col-lg-3 mb-3">
          <h3 class="text-white">CONTACT US</h3>
          <p>KAMPUS UPR TANJUNG NYAHO</p>
          <p>Jln. Yos Sudarso Palangka Raya 73111, Kalimantan Tengah</p>
          <p>Email: -@gmail.com</p>
          <p>Whatsapp: -</p>
        </div>
        <div class="col-lg-3 mb-3">
          <h3 class="text-white">FAKULTAS</h3>
          <ul>
            <li><a href="https://fkip.upr.ac.id/">FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN</a></li>
            <li><a href="https://feb.upr.ac.id/">FAKULTAS EKONOMI & BISNIS</a></li>
            <li><a href="https://faperta.upr.ac.id/">FAKULTAS PERTANIAN</a></li>
            <li><a href="https://ft.upr.ac.id/">FAKULTAS TEKNIK</a></li>
            <li><a href="https://fh.upr.ac.id/">FAKULTAS HUKUM</a></li>
            <li><a href="https://fisip.upr.ac.id/">FAKULTAS ILMU SOSIAL DAN POLITIK</a></li>
            <li><a href="https://medical.upr.ac.id/">FAKULTAS KEDOKTERAN</a></li>
            <li><a href="https://fmipa.upr.ac.id/">FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</a></li>
            <li><a href="https://pps.upr.ac.id/">PROGRAM PASCA SARJANA</a></li>
          </ul>
        </div>
        <div class="col-lg-3 mb-3">
          <h3 class="text-white">UNIT PELAYANAN TEKNIS & LEMBAGA</h3>
          <ul>
            <li><a href="https://tik.upr.ac.id/">UPT. TIK</a></li>
            <li><a href="https://uptbahasaupr.wordpress.com/">UPT. BAHASA</a></li>
            <li><a href="http://lib.upr.ac.id/">UPT. PERPUSTAKAAN</a></li>
            <li><a href="https://www.upr.ac.id/#">UPT. LAB LAHAN GAMBUT</a></li>
            <li><a href="http://laboratorium-terpadu.upr.ac.id/">UPT. LAB TERPADU</a></li>
            <li><a href="https://lppm.upr.ac.id/">LPPM</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  var swiper = new Swiper(".berita-swiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      prevEl: ".btn-prev",
      nextEl: ".btn-next",
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 1000,
    breakpoint: {
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
</script>
</body>

</html>