<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Agrowisata Porlak Parna</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- logosmall -->
  <link href="<?= base_url() ?>/template/landingpage/assets/img/logo-small.png" rel="icon">
  <link href="<?= base_url() ?>/template/landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('template/landingpage/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/venobox/venobox.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/owl.carousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('template/landingpage/assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="<?php echo base_url(); ?>">Argowisata Porlak Parna</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="<template/landingpage/assets/img/logo-app.png" alt="" class="img-fluid"></a> -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="#profile">Tentang Danau Toba</a></li>
          <li><a href="#product">Product</a></li>
          <li><a href="#pkbl">PKBL</a></li>
          <li class="drop-down"><a href="#donatur">Donatur</a>
            <ul>
              <li><a href="#paket">Paket Donatur</a></li>
            </ul>
          </li>
          <li><a href="#mitra">Mitra</a></li>
          <li class="drop-down"><a href="#pengadopsi">Pengadopsi</a>
            <ul>
              <li><a href="#adopsi">Paket Adopsi</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- .nav-menu -->
      <a href="<?php echo route_to('login'); ?>" class="get-started-btn scrollto">Login</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Gerakan Penyelamat Danau Toba</h1>
          <a data-aos="fade-up " data-aos-delay="2000">
            <h2>Jika Anda merawat saya hari ini,itu berarti Anda sedang mempersiapkan hidup Anda untuk 20 tahun ke depan.</h2>
          </a>
          <div class="d-lg-flex" data-aos="fade-up" data-aos-delay="2000">
            <a href="<?php echo route_to('register'); ?>" class="btn-get-started scrollto">Mari Bergabung</a>
            <a href="https://youtu.be/LCZvgQkS_yM" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= base_url() ?>/template/landingpage/assets/img/logo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= Profile Section ======= -->
    <section id="profile" class="profile">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Danau Toba</h2>
        </div>

        <div class="row content text-justify">
          <div class="col-lg-6">
            <div class="card shadow gallery-item" data-aos="fade-up" data-aos-delay="200">
              <div class="gallery-img"><img src="<?= base_url('template/landingpage/assets/img/t3.jpeg'); ?>" class="card-img-top"></div>
              <div class="title text-center">
                <p>Danau Toba, Sumatra Utara</p>
              </div>
            </div><br>
            <p>Danau Toba yang terletak di Sumatera Utara ini merupakan salah satu danau vulkanik terindah yang dimiliki Indonesia. Dengan luas yang mencapai 1.145 kilometer persegi, Danau Toba tampak seperti sebuah lautan yang berada di ketinggian 900 meter di atas permukaan laut. Selain disebut sebagai danau terluas di Asia Tenggara, danau yang memiliki kedalaman 450 meter ini juga menjadi danau terdalam di dunia.</p>
            <p>Di tengah Danau Toba, terdapat sebuah pulau yang bernama Pulau Samosir. Pulau Samosir memiliki dua danau kecil yaitu Danau Aek Natonang dan Danau Sidihoni.</p>
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0">
            <p> Pulau Samosir yang memiliki luas hampir sama dengan luas negara Singapura ini bukanlah pulau kosong, pulau ini menjadi tempat tinggal suku Batak Samosir. Suku Batak yang tinggal d Pulau Samosir masih memegang teguh kepercayaan leluhur. Mereka juga masih menjalankan berbagai ritual yang biasa dilakukan nenek moyang dahulu.</p>
            <p>Di Pulau Samosir terdapat dua desa yang banyak dikunjungi wisatawan yaitu Tomok dan Tuktuk. Tomok merupakan desa yang memiliki banyak objek wisata menarik seperti Makam Raja Sidabutar, Museum Batak dan pertunjukan tari boneka Sigale-gale yang populer. Berbeda dengan Tomok yang memiliki banyak tempat wisata sejarah, Tuktuk adalah desa di mana terdapat banyak penginapan untuk wisatawan.</p>
            <p>Tak hanya Pulau Samosir yang menjadi daya tarik tempat wisata ini, Danau Toba juga dikelilingi oleh hutan pinus dan beberapa air terjun dan juga pemandian air hangat di dalam hutan. Pemandangan di sekeliling danau ini sangat indah dengan udara yang relatif sejuk sehingga Anda akan betah berlama-lama di sini.</p>
            <p>Bagi masyarakat Batak yang berada di sekitar lokasi danau ini, Danau Toba bukan hanya tempat wisata alam yang memiliki keindahan luar biasa. Mereka percaya bahwa Danau Toba menjadi tempat bersemayamnya tujuh dewi suku Batak atau yang biasa disebut dengan Namborru. Setiap kali akan melakukan kegiatan di sekitar danau, masyarakat akan berdoa dan meminta izin terlebih dahulu agar acara mendapat berkah dan dapat berjalan dengan lancar.</p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End Profile Section -->

    <!-- ======= Services Section ======= -->
    <section id="product" class="product section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
          <p>Bersama kita tanami lahan gundul dengan tanaman produktif untuk menghijaukan lingkungan Danau Toba sekaligus mendatangkan wisatawan menikmati keindahan Danau Toba sembari menikmati hasil tanaman berupa buah-buahan segar maupun olahan.</p>
        </div>

        <div class="row text-center">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-tree bg-lg bx-flashing"></i></div>
              <h4><a href="">Porlak</a></h4>
              <div class="card-group">
                <div class="card shadow gallery-item" data-aos="fade-up" data-aos-delay="600">
                  <div class="gallery-img"><img src="<?= base_url() ?>/template/landingpage/assets/img/pohon.jpg" class="card-img-top"></div>
                </div>
              </div>
              <p>Melakukan penghijauan dengan cara menanam pohon buah-buahan di atas tanah milik petani dan tanah terlantar berbasis porlak. Seluruh hasil porlak menjadi hak petani dan bebas dijual sesuai keinginan petani.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-droplet bg-lg bx-fade-up"></i></div>
              <h4><a href="">Bibit</a></h4>
              <div class="card-group">
                <div class="card shadow gallery-item" data-aos="fade-up" data-aos-delay="600">
                  <div class="gallery-img"><img src="<?= base_url() ?>/template/landingpage/assets/img/durian.png" class="card-img-top"></div>
                </div>
              </div>
              <p>Bibit yang akan ditanam adalah bibit unggul yang telah disertifikasi oleh instansi yang berwenang. Untuk tujuan ini perusahaan akan bermitra dengan petani mengembangkan pembibitan.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-florist bg-lg bx-fade-down"></i></div>
              <h4><a href="">Pupuk Organik</a></h4>
              <div class="card-group">
                <div class="card shadow gallery-item" data-aos="fade-up" data-aos-delay="600">
                  <div class="gallery-img"><img src="<?= base_url() ?>/template/landingpage/assets/img/kompos.png" class="card-img-top"></div>
                </div>
              </div>
              <p>Pupuk kompos tanaman akan dipenuhi dari gulma enceng gondok yang dimasukkan kedalam Biopori. Kebutuhan enceng gondok ini akan di supply melalui kemitraan dengan petani.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Bergabung Membangun Danau Toba</h3>
            <p> Kegiatan Pelestarian dan Pemberdayaan Ekonomi Kerakyatan di Kawasan Danau Toba melalui Gerakan 1000 Porlak Tanaman Produktif dan Agrowisata. Siapapun Anda dapat berkontribusi membangun Danau Toba. Danau Toba dan Pulau Samosir adalah aset bangsa dan aset kita.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo route_to('register'); ?>">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </section><!-- End Cta Section -->


    <!-- PKBL ( Program Kemitraan Bina Lingkungan ) -->
    <section id="pkbl" class="donation section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Program Kemitraan Bina Lingkungan ( PKBL )</h2>
          <h3 class="text-center">Apa itu PKBL ?</h3>
          <p>PKBL atau Program Kemitraan Bina Lingkungan adalah sebuah program untuk meningkatkan
            kemampuan usaha kecil agar menjadi tangguh dan mandiri.
          </p>
        </div>
      </div>
    </section>
    <!-- end PKBL -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Bergabung Membangun Danau Toba</h3>
            <p> Kegiatan Pelestarian dan Pemberdayaan Ekonomi Kerakyatan di Kawasan Danau Toba melalui Gerakan 1000 Porlak Tanaman Produktif dan Agrowisata. Siapapun Anda dapat berkontribusi membangun Danau Toba. Danau Toba dan Pulau Samosir adalah aset bangsa dan aset kita.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo route_to('register'); ?>">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Donation Section ======= -->
    <section id="donatur" class="donatur section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Donatur</h2>
          <p>Anda tidak perlu turut menanam pohon, cukup berpartisipasi memberikan Donasi penanaman pohon untuk dikelola oleh keluarga yang Anda tunjuk. Kami akan melakukan penanaman dan pemeliharaan selama xx bulan di lahan keluarga yang anda tunjuk.<p>
        </div>
      </div>
    </section><!-- ======= End Donation Section ======= -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Bergabung Membangun Danau Toba</h3>
            <p> Kegiatan Pelestarian dan Pemberdayaan Ekonomi Kerakyatan di Kawasan Danau Toba melalui Gerakan 1000 Porlak Tanaman Produktif dan Agrowisata. Siapapun Anda dapat berkontribusi membangun Danau Toba. Danau Toba dan Pulau Samosir adalah aset bangsa dan aset kita.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo route_to('register'); ?>">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </section><!-- End Cta Section -->
    <!-- ======= Paket Section ======= -->
    <section id="adopsi" class="adopsi">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Paket Tersedia</h2>
          <p>Setelah pemilik lahan teredukasi dengan baik, pemeliharaan kami serahkan kepada pemilik lahan. Semua hasil tanaman tersebut akan menjadi hak pemilik lahan Anda sebagai Donatur akan diberikan Sertifikat Penghargaan dan nama Anda diabadikan pada tanaman di lahan keluarga yang Anda tunjuk. Semua dokumentasi dan progress tanaman tersebut akan dilaporkan secara online di Website Kami.</p>
        </div>

        <!-- Flip -->
        <div class="card-deck">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h5 style="font-family: 'Times New Roman', Times, serif; margin-top:100px">PAKET DONASI</h5>
                <h1>A</h1>
              </div>
              <div class="flip-card-back">
                <img src="<?= base_url() ?>/template/landingpage/assets/img/paket.png" style="width: 298px; height: 190px; margin-bottom: -100px;">
                <h1 class=" card-title text-center">Paket A</h1>
                <p class="card-text text-center">10 - 15 Tanaman</p>

              </div>
            </div>
          </div>
          <div class="flip-card ">

            <div class="flip-card-inner ">
              <div class="flip-card-front text-center">
                <h5 style="font-family: 'Times New Roman', Times, serif; margin-top:100px">PAKET DONASI
                </h5>
                <h1>B</h1>
              </div>
              <div class="flip-card-back" style="background-color: rgb(119, 136, 153);">
                <img src="<?= base_url() ?>/template/landingpage/assets/img/paket.png" style="width: 298px; height: 190px; margin-bottom: -100px;">
                <h1 class=" card-title text-center">Paket B</h1>
                <p class="card-text text-center">25 - 30 Tanaman</p>

              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h5 style="font-family: 'Times New Roman', Times, serif; margin-top:100px">PAKET DONASI</h5>
                <h1>C</h1>
              </div>
              <div class="flip-card-back" style="background-color: rgb(240, 128, 128);">
                <img src="<?= base_url() ?>/template/landingpage/assets/img/paket.png" style="width: 298px; height: 190px; margin-bottom: -100px;">
                <h1 class=" card-title text-center">Paket C</h1>
                <p class="card-text text-center">50 - 60 Tanaman</p>

              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- Bagian 2 -->
        <div class="column">
          <div class="card-deck">
            <div class=" flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <h5 style="font-family: 'Times New Roman', Times, serif; margin-top:100px">PAKET DONASI</h5>
                  <h1>D</h1>
                </div>
                <div class="flip-card-back" style="background-color: rgb(252, 165, 3);">
                  <img src="<?= base_url() ?>/template/landingpage/assets/img/paket.png" style="width: 298px; height: 190px; margin-bottom: -100px;">
                  <h1 class=" card-title text-center">Paket D</h1>
                  <p class="card-text text-center">100 - 120 Tanaman</p>

                </div>
              </div>
            </div>
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <h5 style="font-family: 'Times New Roman', Times, serif; margin-top:100px">PAKET DONASI</h5>
                  <h1>E</h1>
                </div>
                <div class="flip-card-back" style="background-color: rgb(205, 133, 63);">
                  <img src="<?= base_url() ?>/template/landingpage/assets/img/paket.png" style="width: 298px; height: 190px; margin-bottom: -100px;">
                  <h1 class=" card-title text-center">Paket E</h1>
                  <p class="card-text text-center">150 - 200 Tanaman</p>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End Paket Section -->

    <!-- ======= Mitra Section ======= -->
    <section id="mitra" class="mitra section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mitra</h2>
          <p>Menyediakan bibit unggul bersertifikat melalui usaha pembibitan bermitra dengan petani dibawah supervise perusahaan. Bibit yang akan ditanam adalah bibit unggul yang telah disertifikasi oleh instansi yang berwenang. Untuk tujuan ini perusahaan akan bermitra dengan petani mengembangkan pembibitan.</p>
        </div>
      </div>
    </section><!-- End Mitra Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Bergabung Membangun Danau Toba</h3>
            <p> Kegiatan Pelestarian dan Pemberdayaan Ekonomi Kerakyatan di Kawasan Danau Toba melalui Gerakan 1000 Porlak Tanaman Produktif dan Agrowisata. Siapapun Anda dapat berkontribusi membangun Danau Toba. Danau Toba dan Pulau Samosir adalah aset bangsa dan aset kita.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo route_to('register'); ?>">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pengadopsi Section ======= -->
    <section id="pengadopsi" class="donation section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Adopsi Pohon</h2>
          <p>Perusahaan memberi kesempatan kepada individu dan organisasi, baik
            dalam maupun luar negeri untuk mengadopsi pohon yang akan ditanam
            dengan kompensasi memberikan Sertifikat dan pengabadian nama di
            porlak yang diadopsi.</p>
        </div>
      </div>
    </section>
    <!-- End Pengadopsi Section -->
    <!-- Testimoni Section -->
    <section id="testimoni" class="paket">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Berikut ini adalah bukti Testimoni</p>
        </div>
        <div class="card-deck">
          <div class="card shadow " data-aos="fade-up" data-aos-delay="100">
            <img src="<?= base_url() ?>/template/landingpage/assets/img/testimoni.png" class="card-img-top" alt="Card img cap">

          </div>
          <div class="card shadow" data-aos="fade-up" data-aos-delay="200">
            <img src="<?= base_url() ?>/template/landingpage/assets/img/testimoni.png" class="card-img-top" alt="Card img cap">

          </div>
          <div class="card shadow" data-aos="fade-up" data-aos-delay="300">
            <img src="<?= base_url() ?>/template/landingpage/assets/img/testimoni.png" class="card-img-top" alt="Card img cap">

          </div>
        </div>
        <br>
        <div class="card-deck">
          <div class="card shadow " data-aos="fade-up" data-aos-delay="400">
            <img src="<?= base_url() ?>/template/landingpage/assets/img/testimoni.png" class="card-img-top" alt="Card img cap">

          </div>
          <div class="card shadow" data-aos="fade-up" data-aos-delay="500">
            <img src="<?= base_url() ?>/template/landingpage/assets/img/testimoni.png" class="card-img-top" alt="Card img cap">

          </div>
          <div class="card shadow" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url() ?>/template/landingpage/assets/img/testimoni.png" class="card-img-top" alt="Card img cap">

          </div>
        </div>
      </div>
    </section><!-- End Paket Section -->
    <!-- End Testimoni Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Bergabung Membangun Danau Toba</h3>
            <p> Kegiatan Pelestarian dan Pemberdayaan Ekonomi Kerakyatan di Kawasan Danau Toba melalui Gerakan 1000 Porlak Tanaman Produktif dan Agrowisata. Siapapun Anda dapat berkontribusi membangun Danau Toba. Danau Toba dan Pulau Samosir adalah aset bangsa dan aset kita.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo route_to('register'); ?>">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- end video section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class=" col-md-6 footer-contact">
            <h3>Argowisata Porlak Parna</h3>
            <p>
              Kec. Pangururan, Kab. Samosir<br>
              Indonesia <br>
              <strong>Phone:</strong> <a href="https://bit.ly/37ijbPI">
                <p>+62821 6487 0988</p>
              </a><br>
              <strong>Email:</strong> <a href="mailto: agrowisataporlakparna@gmail.com">
                <p>agrowisataporlakparna@gmail.com</P>
              </a>
              <a href="mailto: infoapp@agrowistaporlakparna.com">
                <p>infoapp@agrowistaporlakparna.com</P>
              </a>
              <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#profile">Tentang Danau Toba</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#product">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pkbl">PKBL</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#donatur">Donatur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#mitra">Mitra</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pengadopsi">Pengadopsi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jaringan Sosial Kami</h4>
            <p>Kunjungi kami</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/argowisataporlakparnaofficial" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/argowisataporlakparnaofficial" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
              <a href="https://www.youtube.com/channel/UCCZdrYFtgiHHdrkiCxsbKjA/featured" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>2020</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <div class="icon-box">
          <div class="icon">
            Designed with <i class="bx bxs-heart bx-burst" style="color:#47b2e4"></i> by <a href="https://agrowisataporlakparna.com/">PT. Argowisata Porlak Parna</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- All the links in the footer should remain intact. -->
  <!-- You can delete the links only if you purchased the pro version. -->
  <!-- Licensing information: https://bootstrapmade.com/license/ -->
  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('template/landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/template/landingpage/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/template/landingpage/assets/js/main.js"></script>
</body>

</html>