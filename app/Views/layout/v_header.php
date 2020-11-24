<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="http://localhost:8080/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>PP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <h4><b>Argowisata Porlak Parna</b></h4>
        </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('img/' . session()->get('foto_user')) ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= session()->get('nama_user') ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('img/' . session()->get('foto_user')) ?>" class="img-circle" alt="User Image">

                  <p>Hai
                    <?= session()->get('nama_user') ?> |
                    <?= session()->get('email') ?> <br>
                    <?php if (session()->get('level') == 1) {
                      echo 'Admin Pegawai';
                    } elseif (session()->get('level') == 2) {
                      echo 'donatur';
                    } elseif (session()->get('level') == 3) {
                      echo 'mitra';
                    } else {
                      echo 'Pengadopsi';
                    } ?>

                  </p>

                  <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('auth/logout') ?> " class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>
    <!-- =============================================== -->