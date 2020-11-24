<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | Argowisata Porlak Parna</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/template/landingpage/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/template/landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- logosmall -->
  <link href="<?= base_url() ?>/template/landingpage/assets/img/logo-small.png" rel="icon">
  <link href="<?= base_url() ?>/template/landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('template/landingpage/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url() ?>/template/landingpage/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/template/landingpage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/template/landingpage/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/template/landingpage/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>/template/landingpage/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('template/landingpage/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('template/landingpage/assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Argowisata Porlak Parna</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      </nav><!-- .nav-menu -->

      <a href="<?= base_url('/web') ?>" class="get-started-btn scrollto">Landing Page</a>
      <a href="<?= base_url('auth/login') ?>" class="get-started-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Register</li>
      </ol>
      <h2>Register</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">

      </main><!-- End #main -->
      <main id="main">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type='text/javascript'>
          $(window).load(function() {
            $("#level").change(function() {
              console.log($("#level option:selected").val());
              if ($("#level option:selected").val() == '4') {
                $('#form_pengadopsi').prop('hidden', false);
                $('#bantuan').prop('hidden', 'true');
              } else {
                $('#form_pengadopsi').prop('hidden', 'true');
                $('#bantuan').prop('hidden', false);
              }
            });
          });
        </script>
        <script type="text/javascript">
          function harga() {
            var tes = document.getElementById("paket").value;
            document.getElementById("harga_paket").value = tes;
          }
        </script>
        </head>

        <body class="hold-transition register-page">
          <div class="register-box box-tools center">
            <div class="register-logo center">
              <a href="../../index2.html"><b></b><img src="<?= base_url() ?>/template/landingpage/assets/img/logo-app.png" width="45%" height="45%" style="display: block; margin: auto;"" class=" shadow-light"></a>
            </div><br>

            <div class="register-box-body">
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
              if (session()->getflashdata('pesan')) {
                echo ' <div class="alert alert-success" role="alert">';
                echo session()->getflashdata('pesan');
                echo '</div>';
              }
              ?>

              <?php
              echo form_open('auth/save_register');
              ?>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" class="form-control" name="nm_dpn" id="nm_dpn">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" class="form-control" name="nm_blkg" id="nm_blkg">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label>Institusi / Perorangan</label>
                    <select name="institusi" class="form-control">
                      <option>Pilih...</option>
                      <option value="Institusi">Institusi</option>
                      <option value="Perorangan">Perorangan</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="no_hp">No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="no_whatsapp">No Whatsapp</label>
                    <input type="text" class="form-control" name="no_wa" id="no_wa">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" id="provinsi">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="kab_kota">Kabupaten/Kota</label>
                    <input type="text" class="form-control" name="kab_kota" id="kab_kota">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" name="kec" id="kec">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <input type="text" class="form-control" name="kel" id="kel">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="alamat">Nama Jalan</label>
                    <input type="text" class="form-control" name="nm_jl" id="nm_jl">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label>Jenis</label>
                    <select name="level" id="level" class="form-control">
                      <option>Pilih...</option>
                      <option value="2">Donatur</option>
                      <option value="3">Mitra</option>
                      <option value="4">Pengadopsi</option>

                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label for="bukti">Bukti</label>
                    <input type="file" name="bukti" id="bukti">

                    <p class="help-block">Hanya file gambar yang diperbolehkan untuk unggah disini.</p>
                  </div>
                </div>
              </div>
              <div id="form_pengadopsi" hidden>

                <div class="row">

                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Nama Paket</label>
                      <select id="paket" name="paket" class="form-control" onchange="harga()">
                        <option value="">Pilih...</option>
                        <option value="250.000">Paket A - Rp.250.000</option>
                        <option value="500.000">Paket B - Rp.500.000</option>
                        <option value="1.000.000">Paket C - Rp.1.000.000</option>
                        <option value="5.000.000">Paket D - Rp.5.000.000</option>
                        <option value="10.000.000">Paket E - Rp.10.000.000</option>
                      </select>
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="text" id="harga_paket" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="harga">Jumlah</label>
                      <input type="text" name="jml" id="jml" class="form-control">
                    </div>
                  </div>

                </div>
              </div>


              <div id="bantuan" class="form-group" hidden>
                <label for="bantuan">Jumlah Bantuan</label>
                <input type="text" class="form-control" name="bantuan" id="bantuan">
              </div>

              <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea class="form-control" name="catatan"></textarea>
              </div>

              <div class="form-group">
                <label for="nama_user">Username</label>
                <input type="text" class="form-control" name="nama_user" id="nama_user">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>



              <!-- /.col -->
              <div class="col-xs-8">
                <button type="submit" class="btn btn-primary ">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </div>
          <?php echo form_close(); ?>
    </div>
    <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
  </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Bergabunglah Bersama Kami</h4>
            <form action="" method="post">
              <input type="email" placeholder="Tidak memiliki akun?" disabled><input type="submit" value="Gabung Sekarang">
            </form>
          </div>
        </div>
      </div>
    </div>

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
  <!-- jQuery 3 -->
  <script src="<?= base_url() ?>/template/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url() ?>/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url() ?>/template/plugins/iCheck/icheck.min.js"></script>
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