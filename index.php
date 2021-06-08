<!doctype html>
<html lang="en">
  <head>
    <?php include 'assets.php'; ?>
  </head>
  <body class="bg-light" data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="0" tabindex="0">

    <?php include 'header.php'; ?>

    <!-- Beranda -->
    <section id="beranda">
      <div class="container p-5">
        <div class="row pt-5 pb-5 justify-content-center">
          <div class="col-md-12 col-lg-5 align-self-center">
            <div class="">
              <h1 class="color-green">Jajanan Pasar</h1>
              <h3 class="color-black my-4">Cobain Jajanan terlaris minggu ini</h3>
              <button type="button" class="btn my-2 bg-green" style="color: whitesmoke;">Lihat Menu</button>
            </div>
          </div>
          <div class="col-md-12 col-lg-5 align-self-center">
            <div class="">
              <img src="Images/home1.png" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Beranda Ends -->

    <!-- Tentang -->
    <section id="tentang">
      <div class="container p-5">
        <div class="row pt-5 pb-5 justify-content-center">
          <div class="col-md-12 col-lg-5 align-self-center">
            <div class="pb-5">
              <img src="Images/home2.png" class="card-img-top w-75" alt="...">
            </div>
          </div>
          <div class="col-md-12 col-lg-5 align-self-center">
            <div class="">
              <span class="fs-6 fw-bolder color-green">Tentang Kami</span>
            </div>
            <div class="">
              <h2 class="color-black lh-base">Kami menyediakan berbagai makanan enak</h2>
            </div>
            <p class="color-grey">Kami menyediakan makanan terbaik di seluruh kota, dengan layanan pelanggan yang sangat baik, makanan terbaik dengan harga terbaik, kunjungi kami</p>
            <div class="">
              <button type="button" class="btn my-2 bg-green" style="color: whitesmoke;">Explore History</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Ends -->

    <!-- Kontak Kami -->
    <section id="kontak-kami">
      <div class="container p-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-7 align-self-center">
            <div class="mb-2">
              <span class="fs-6 fw-bolder color-green">Let's talk</span>
            </div>
            <div class="mb-3">
              <h2 class="color-black lh-base">Kontak Kami</h2>
            </div>
            <p class="color-grey">Jika Anda ingin memesan jajanan kami, hubungi kami dan kami akan segera melayani Anda dengan layanan obrolan 7x24 jam kami.</p>
          </div>
          <div class="col-md-12 col-lg-3 align-self-center">
            <button type="button" class="btn my-2 bg-green" style="color: whitesmoke;">Kontak Kami sekarang</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Kontak Kami Ends -->

    <?php include 'footer.php'; ?>

    <!-- To Top Button -->
    <button type="button" class="btn bg-green btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up color-white"></i>
    </button>
    <!-- To Top Button Ends -->

    <script>
      var status = 'Light';

      $(document).ready(function() {
      });

      function changeMode() {
        if (status == 'Light') {
          // Change to Dark
          status = 'Dark';
          $('.bg-light').addClass('bg-dark');
          $('.bg-light').removeClass('bg-light');
          $('.color-black').addClass('color-white');
          $('.color-black').removeClass('color-black');
          $('.color-grey').addClass('color-white2');
          $('.color-grey').removeClass('color-grey');
          $('.navbar-light').addClass('navbar-dark');
          $('.navbar-light').removeClass('navbar-light');
        } else {
          // Change to Light
          status = 'Light';
          $('.bg-dark').addClass('bg-light');
          $('.bg-dark').removeClass('bg-dark');
          $('.color-white').addClass('color-black');
          $('.color-white').removeClass('color-white');
          $('.color-white2').addClass('color-grey');
          $('.color-white2').removeClass('color-white2');
          $('.navbar-dark').addClass('navbar-light');
          $('.navbar-dark').removeClass('navbar-dark');
        }
      }
      
      let mybutton = document.getElementById("btn-back-to-top");

      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
  </body>
</html>