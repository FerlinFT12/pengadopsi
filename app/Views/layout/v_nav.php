  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('img/' . session()->get('foto_user')) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= session()->get('nama_user') ?></p>
          <a href="#"><i class="fa fa-circle text-success">
            </i> <?php if (session()->get('level') == 1) {
                    echo 'Admin Pegawai';
                  } elseif (session()->get('level') == 2) {
                    echo 'Donatur';
                  } elseif (session()->get('level') == 3) {
                    echo 'Mitra';
                  } else {
                    echo 'Pengadopsi';
                  } ?></a>
        </div>
      </div>
      <!-- sidebar menu: style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if (session()->get('level') == 1) { ?>
          <li>
            <a href="<?= base_url('admin') ?>"><i class="fa fa-home"></i> <span>Menu Admin 1</span>
            </a>
          </li>
          <li>
            <a href="../widgets.html">
              <i class="fa fa-th"></i> <span>Menu Admin 2</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('donatur/') ?>">
              <i class="fa fa-home"></i> <span>Menu Donatur 1</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('mitra') ?>">
              <i class="fa fa-home"></i> <span>Menu Mitra 1</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('pengadopsi') ?>">
              <i class="fa fa-home"></i> <span>Menu Pengadopsi 1</span>
            </a>
          </li>
        <?php } ?>

        <?php if (session()->get('level') == 2) { ?>
          <li>
            <a href="<?= base_url('donatur/') ?>">
              <i class="fa fa-home"></i> <span>Menu Donatur 1</span>
            </a>
          </li>
          <li>
            <a href="../widgets.html">
              <i class="fa fa-th"></i> <span>Menu Donatur 2</span>
            </a>
          </li>
        <?php } ?>

        <?php if (session()->get('level') == 3) { ?>
          <li>
            <a href="<?= base_url('home') ?>">
              <i class="fa fa-home"></i> <span>Home</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('pembibit/menubibit') ?>">
              <i class="fa fa-th"></i> <span>Menu Bibit</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('pembibit/permintaanpesanan') ?>">
              <i class="fa fa-th"></i> <span>Permintaan Pesanan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('pembibit/transaksipemesanan') ?>">
              <i class="fa fa-th"></i> <span>Transaksi Pemesanan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('pembibit/persediaanbibit') ?>">
              <i class="fa fa-th"></i> <span>Persediaan Bibit</span>
            </a>
          </li>
        <?php } ?>

        <?php if (session()->get('level') == 4) { ?>
          <li>
            <a href="<?= base_url('pengadopsi') ?>">
              <i class="fa fa-home"></i> <span>Menu Pengadopsi 1</span>
            </a>
          </li>
          <li>
            <a href="../widgets.html">
              <i class="fa fa-th"></i> <span>Menu Pengadopsi 2</span>
            </a>
          </li>
        <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
        <small><img src="<?= base_url() ?>/template/a/assets/img/logo-app.png" alt="logo" width="120" class="shadow-light rounded-circle"></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home') ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><?= $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">