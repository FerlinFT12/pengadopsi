<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Argowisata Porlak Parna | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- logosmall -->
  <link href="<?= base_url() ?>/template/a/assets/img/logo-small.png" rel="icon">
  <link href="<?= base_url() ?>/template/a/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
    <div class="register-logo">
      <a href="../../index2.html"><b>Form Pendaftaran</b><img src="<?= base_url() ?>/template/a/assets/img/logo-app.png" alt="logo" width="300" class="shadow-light rounded-circle"></a>
    </div>

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

      <div class="box-body">
        <form role="form">
          <div class="form-group">
            <label for="nama_depan">Nama Depan</label>
            <input type="text" class="form-control" name="nm_dpn" id="nm_dpn">
          </div>


          <div class="form-group">
            <label for="nama_belakang">Nama Belakang</label>
            <input type="text" class="form-control" name="nm_blkg" id="nm_blkg">
          </div>

          <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>

          <div class="form-group">
            <label>Institusi / Perorangan</label>
            <select name="institusi" class="form-control">
              <option>Pilih...</option>
              <option value="Institusi">Institusi</option>
              <option value="Perorangan">Perorangan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="no_hp">No Handphone</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp">
          </div>

          <div class="form-group">
            <label for="no_whatsapp">No Whatsapp</label>
            <input type="text" class="form-control" name="no_wa" id="no_wa">
          </div>

          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
          </div>

          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
          </div>

          <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" name="provinsi" id="provinsi">
          </div>

          <div class="form-group">
            <label for="kab_kota">Kabupaten/Kota</label>
            <input type="text" class="form-control" name="kab_kota" id="kab_kota">
          </div>

          <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" name="kec" id="kec">
          </div>

          <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" name="kel" id="kel">
          </div>

          <div class="form-group">
            <label for="alamat">Nama Jalan</label>
            <input type="text" class="form-control" name="nm_jl" id="nm_jl">
          </div>

          <div class="form-group">
            <label>Jenis</label>
            <select name="level" id="level" class="form-control">
              <option>Pilih...</option>
              <option value="2">Donatur</option>
              <option value="3">Mitra</option>
              <option value="4">Pengadopsi</option>

            </select>
          </div>

          <div id="form_pengadopsi" hidden>

            <div class="row">
              <div class="box-body">


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



                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" id="harga_paket" class="form-control" disabled>
                </div>


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
            <label for="bukti">Bukti</label>
            <input type="file" name="bukti" id="bukti">

            <p class="help-block">Hanya file gambar yang diperbolehkan untuk unggah disini.</p>
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


          <div class="row">
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
          <?php echo form_close(); ?>
          <a href="<?= base_url('auth/login') ?>" class="text-center">Kembali ke Login</a><br>
          <a href="<?= base_url('/web') ?>" class="text-center">Kembali ke Halaman Web</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <script src="<?= base_url() ?>/template/script.js"></script>
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