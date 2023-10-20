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
            <li><a href="">FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN</a></li>
            <li><a href="">FAKULTAS EKONOMI & BISNIS</a></li>
            <li><a href="">FAKULTAS PERTANIAN</a></li>
            <li><a href="">FAKULTAS TEKNIK</a></li>
            <li><a href="">FAKULTAS HUKUM</a></li>
            <li><a href=""></a>FAKULTAS ILMU SOSIAL DAN POLITIK</li>
            <li><a href=""></a>FAKULTAS KEDOKTERAN</li>
            <li><a href=""></a>FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</li>
            <li><a href=""></a>PROGRAM PASCA SARJANA</li>
          </ul>
        </div>
        <div class="col-lg-3 mb-3">
          <h3 class="text-white">UNIT PELAYANAN TEKNIS & LEMBAGA</h3>
          <ul>
            <li><a href="">UPT. TIK</a></li>
            <li><a href="">UPT. PERPUSTAKAAN</a></li>
            <li><a href="">UPT. LAB LAHAN GAMBUT</a></li>
            <li><a href="">UPT. LAB TERPADU</a></li>
            <li><a href="">LPPM</a></li>
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
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
      prevEl: ".btn-prev",
      nextEl: ".btn-next",
    },
    autoplay: {
      delay: 4000, // Atur delay dalam milidetik (misalnya 3000ms atau 3 detik)
      disableOnInteraction: false, // Biarkan autoplay berlanjut bahkan setelah interaksi pengguna
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
<script src="<?= base_url(); ?>assets_pengunjung/vendors/dist/NavOnScroll.min.js"></script>
<script>
  hide_on_scroll({
    nav_id: "scrollNavbar",
  });
</script>
</body>

</html>