<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | Agrowisata Porlak Parna</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>template/landingpage/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>template/landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- logosmall -->
  <link href="<?= base_url() ?>template/landingpage/assets/img/logo-small.png" rel="icon">
  <link href="<?= base_url() ?>template/landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('template/landingpage/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/venobox/venobox.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/owl.carousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('template/landingpage/assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?php echo base_url(); ?>">Agrowisata Porlak Parna</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      </nav><!-- .nav-menu -->

      <a href="<?php echo base_url(); ?>" class="get-started-btn scrollto">Landing Page</a>
      <a href="<?php echo route_to('register'); ?>" class="get-started-btn scrollto">Register</a>

    </div>
  </header><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Login</li>
        </ol>
        <h2>Login</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="hold-transition register-page">
              <div class="register-box">
                <div class="register-logo">
                  <img src="<?= base_url() ?>/template/landingpage/assets/img/logo-app.png" alt="logo" width="500" class="shadow-light"></a>
                </div>

                <?php
                // pesan validasi error
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                  <div class="alert alert-danger" role="alert">
                    <ul>
                      <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                <?php } ?>
                <?php
                // jika pesan gagal
                if (session()->getflashdata('pesan')) {
                  echo ' <div class="alert alert-success" role="alert">';
                  echo session()->getflashdata('pesan');
                  echo '</div>';
                }
                ?>

                <?php
                echo form_open('auth/cek_login');
                ?>

                <div class="form-group has-feedback">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <!-- /.col -->
                <div class="col-xs-8">
                  <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
                <!-- /.col -->
                <br>
                <?php echo form_close(); ?>

              </div>
              <!-- /.form-box -->
            </div>
            <!-- /.register-box -->
          </div>
        </div>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
              <h4>Bergabunglah Bersama Kami</h4>
              <a href="<?php echo route_to('register'); ?>">Tidak memiliki akun?</a> <a href="<?php echo route_to('register'); ?>" class="btn btn-primary">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class=" col-md-6 footer-contact">
            <h3>Agrowisata Porlak Parna</h3>
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
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Tentang Danau Toba</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">PKBL</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Donatur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Mitra</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Pengadopsi</a></li>
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

  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 3000);
  </script>

</body>

</html>