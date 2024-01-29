@extends('landingpage.layout.index')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
    <h1>Welcome to The FINANCE</h1>
    <h2>Memudahkan Keuangan Usahamu hanya di The Finance</h2>
    <a href="https://wa.me/6281617789180/?text=Hallo saya ingin bertanya kepada admin?" class="btn-get-started scrollto">
      <i class="fa-solid fa-square-phone fa-xl p-2"></i>Staff Admin</a>
    <img src="{{asset('bikin/assets/img/hero-img.png')}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Fitur</h2>
        <p>Dengan fitur yang tersedia di website <span>The Finance</span> dapat memudahkan kemudahan bagi para karyawan dalam melakukan pendataan</p>
        <!-- <p>UMKM ini bernama Berkah Phone dan mempunyai 3 cabang konter, konter ini menjual berbagai macam aksesoris handphone berdiri sejak tahun 2002 sampai saat ini. Mulai dari cas hp, kabel data, cas mobil, voucher kuota dan juga pulsa.</p> -->
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="fa-regular fa-clipboard"></i></i></div>
            <h4 class="title"><a href="">Pendataan Penjualan</a></h4>
            <p class="description">Atur pendataan penjualan dengan baik</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-user-pen"></i></i></div>
            <h4 class="title"><a href="">Data Karyawan</a></h4>
            <p class="description">Mendata data-data karyawan</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-money-bill-wave"></i></i></div>
            <h4 class="title"><a href="">Gaji Karyawan</a></h4>
            <p class="description">Control gaji karyawan dengan mudah </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 " data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-landmark"></i></div>
            <h4 class="title"><a href=""> keuangan</a></h4>
            <p class="description">Atur data keuangan dengan baik</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4 mx-auto" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-file-invoice"></i></div>
            <h4 class="title"><a href="">Laporan keuangan</a></h4>
            <p class="description">Atur data laporan keunguan dengan rapi</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>Tentang</h2>
        <p>UMKM ini bernama Berkah Phone dan mempunyai 3 cabang konter, konter ini menjual berbagai macam aksesoris handphone berdiri sejak tahun 2002 sampai saat ini. Mulai dari cas hp, kabel data, cas mobil, voucher kuota dan juga pulsa.</p>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('bikin/assets/img/features-1.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
          <h3>Pendataan Penjualan</h3>
          <p>
            Pendataan penjualan adalah data transaksi yang terjadi setiap harinya.data penjualan sangatlah penting bagi pemilik UMKM karena menjadi sumber informasi terkait pengembangan UMKM untuk kedepannya.
          </p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="{{asset('bikin/assets/img/features-2.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3>Data Karyawan</h3>
          <p>
            Data karyawan adalah informasi yang terkait dengan para karyawan yang bekerja disebuah UMKM tersebut
          </p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="{{asset('bikin/assets/img/features-3.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          <h3>Gaji Karyawan</h3>
          <p>
            Gaji karyawan adalah pembayaran rutin setiap bulan yang awalnya bersifat manual diganti menggunakan digital </p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="{{asset('bikin/assets/img/features-4.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3>Keuangan</h3>
          <p>
            berhubungan dengan masalah kas, arus kas, pengeluaran, pendapatan, dan masalah yang terkait dengan mata uang
          </p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="{{asset('bikin/assets/img/features-3.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          <h3>Laporan Keuangan</h3>
          <p>
            Catatan informasi keuangan dari suatu UMKM, yang mana digunakan untuk menggambarkan kinerja UMKM tersebut
          </p>
        </div>
      </div>
    </div>
  </section><!-- End Features Section -->

  <!-- ======= Team Section ======= -->
  <!-- <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Developer</h2> -->
  <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
  <!-- </div>

      <div class="row justify-content-md-center">
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <img src="{{asset('bikin/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->
  <!-- End Team Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
      </div>

      <ul class="faq-list">

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu the finance?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apa saja fitur the finance? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bagaimana pengelolaan gaji karyawan umkm?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>
      </ul>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak</h2>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Alamat</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>info@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-md-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.84305051474!2d110.33466248881972!3d-7.024552223899592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1698916364506!5m2!1sen!2sid" width="100%" height="380" style="border:0;" allowfullscreen></iframe>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection