<!doctype html>
<html lang="en">
  <head>
    <?php include 'assets.php'; ?>
  </head>
  <body class="bg-light" data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="0" tabindex="0">

    <?php include 'header.php'; ?>

    <!-- Anggota -->
    <section id="beranda">
      <div class="container p-5 mb-5">
        <div class="row pt-5 pb-3 justify-content-center">
          <div class="col-md-12 col-lg-12 align-self-center">
            <div class="">
              <h1 class="color-green">Anggota</h1>
              <h3 class="color-black my-4">Berikut daftar anggota Kelompok 1</h3>
            </div>
          </div>
        </div>
        <div id="anggota-card" class="row pb-4 justify-content-center"></div>
      </div>
    </section>
    <!-- Anggota Ends -->

    <?php include 'footer.php'; ?>

    <!-- To Top Button -->
    <button type="button" class="btn bg-green btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up color-white"></i>
    </button>
    <!-- To Top Button Ends -->

    <script>
      var status = 'Light';

      $(document).ready(function() {
        var nim = ['20190140087','20190140097','20190140101','20190140089','20190140074','20190140096','20190140083','20190140061',
        '20190140039','20190140002','20190140055','20190140129','20190140077','20190140047','20190140122'];
        var nama = ['Andri Fanky Kurniawan','Faysal Fadel Maulana','Raditya Pratama Putra','Prasetyo Nur Hidayat','Denny Tri Utomo',
        'Amalia Husna','Yusuf Zidane Rukmanda','Bagus Rinu Pangayom','Yoga Paripurna','Nur Afdila Pebriyani','Muhammad Vicky Kurniawan',
        'Rafif Fuaddoshofha','Indra Setyo Wibowo','Fuad Rizkani','Ahmad Qasim Nurseha'];

        for (i = 0; i < nim.length; i++) {
          $('#anggota-card').append('<div class="col-md-3 col-lg-3">'+
            '<div class="card mt-3 mb-3 text-center">'+
              '<center>'+
                '<img class="card-img-top w-50 mt-4 mb-2" src="Images/profile.png" alt="Card image cap">'+
              '</center>'+
              '<div class="card-body">'+
                '<p class="card-text">'+nim[i]+'<br><b>'+nama[i]+'</b></p>'+
              '</div>'+
            '</div>'+
          '</div>');
        }
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