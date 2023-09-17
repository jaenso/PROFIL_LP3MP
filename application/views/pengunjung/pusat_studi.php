
<section class="informasi">
      <div class="pengelola container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-10 main-white mx-5">
          <a href="<?= base_url();?>home/index"><i class='bx bxs-home'></i>Beranda </a> > Pusat Studi

            <h2>PUSAT STUDI</h2>
            <p>
              Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure
              itaque enim pariatur ducimus. Rerum soluta, perspiciatis
              voluptatum cupiditate praesentium repellendus quas expedita
              exercitationem tempora aliquam quaerat in eligendi adipisci harum
              non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero,
              ipsam dicta explicabo nihil, tempore, nulla repellendus eos
              necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque
              numquam aliquam soluta.
            </p>
            <p>
              Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure
              itaque enim pariatur ducimus. Rerum soluta, perspiciatis
              voluptatum cupiditate praesentium repellendus quas expedita
              exercitationem tempora aliquam quaerat in eligendi adipisci harum
              non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero,
              ipsam dicta explicabo nihil, tempore, nulla repellendus eos
              necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque
              numquam aliquam soluta. Lorem ipsum dolor, sit amet consectetur
              adipisicing elit. Adipisci illum autem placeat exercitationem,
              sint totam doloremque velit fugit veniam, deleniti dolor!
              Reprehenderit rerum unde distinctio laborum nisi? Doloribus enim
              perferendis vitae officia ad neque debitis voluptatum rem,
              voluptas expedita dolorum!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem excepturi neque asperiores praesentium porro blanditiis repellendus ex laborum ut explicabo, facilis pariatur velit repellat earum sunt inventore quas nisi quia quaerat nulla qui autem culpa architecto! Laboriosam reiciendis ullam alias, atque optio veritatis nesciunt! Officia hic totam quas dolorum dolores, molestias impedit nesciunt? Cum quis maxime commodi perferendis incidunt amet aut aspernatur accusamus consequuntur magni numquam pariatur, iusto rem asperiores necessitatibus ut voluptatem exercitationem? Quidem aliquam odit consectetur? Incidunt ratione numquam saepe nemo. Eum tempore laborum reprehenderit ullam repudiandae, autem, aspernatur voluptate ducimus quod, pariatur cupiditate consequatur impedit earum voluptatum!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil similique obcaecati ex, tempore recusandae sunt repudiandae ad pariatur tenetur vel, voluptate corrupti odit numquam a. Laudantium repellendus maxime provident asperiores excepturi. Possimus expedita natus veritatis earum deserunt beatae, consequuntur id fugit eos laborum explicabo, dolorem asperiores optio dolor corporis tenetur vero magni sed saepe! Blanditiis temporibus dolor natus debitis esse.</p>
            <div class="row justify-content-center">
              <div
                class="col-md-11 col-sm-11 mb-4 border border-opacity-50 rounded-3 shadow-sm"
              >
                <div class="faq">
                  <div class="tokoh">
                    <h3>1. Pusat Kajian Tanaman Obat dan Tradisional</h3>
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                  <div class="deskripsi">
                    <img class="bingkai-pengelola" src="<?= base_url();?>images/pengelola.png" />
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
        </div>
      </div>
    </section>
    <script>
      // Ambil semua elemen FAQ
      const faqElements = document.querySelectorAll(".faq");

      // Tambahkan event listener untuk setiap elemen FAQ
      faqElements.forEach((faq) => {
        // Tambahkan event click pada judul FAQ
        faq.querySelector(".tokoh").addEventListener("click", () => {
          // Toggle kelas "active" pada elemen FAQ
          faq.classList.toggle("active");
        });
      });
    </script>
    <script src="js/main.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
