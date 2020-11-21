<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>0</h3>

        <p>Menu Bibit</p>
      </div>
      <div class="icon">
        <i class="fa fa-user"></i>
      </div>
      <a href="<?= base_url('admin') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3>0</h3>

        <p>Menu Transaksi</p>
      </div>
      <div class="icon">
        <i class="fa fa-gift"></i>
      </div>
      <a href="<?= base_url('donatur') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3>0</h3>

        <p>Landing Page</p>
      </div>
      <div class="icon">
        <i class="fa fa-users"></i>
      </div>
      <a href="<?= base_url('mitra') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-teal">
      <div class="inner">
        <h3>0</h3>

        <p>
          <h4>Pembibit</h4>
        </p>
      </div>
      <div class="icon">
        <i class="fa fa-child"></i>
      </div>
      <a href="<?= base_url('pengadopsi') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- end dashboard -->

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Pendaftaran</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID USER</th>
            <th>NAMA DEPAN</th>
            <th>NAMA BELAKANG</th>
            <th>ALAMAT EMAIL</th>
            <th>INSTITUSI</th>
            <th>NO.HANDPHONE</th>
            <th>NO.WHATSAPP</th>
            <th>NAMA PAKET</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>BUKTI</th>
            <th>CATATAN</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>FOTO</th>
          </tr>
          <tr>
            <td>6</td>
            <td>Rizal</td>
            <td>M</td>
            <td>rizal@gmail.com</td>
            <td>Perorangan</td>
            <td>08199988877</td>
            <td>08123456789</td>
            <td>2</td>
            <td>250.000</td>
            <td>1</td>
            <td>''</td>
            <td>''</td>
            <td>rizal</td>
            <td>12345</td>
            <td><img src="user1.ppng" alt=""></td>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-success">Approved</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>219</td>
            <td>Alexander Pierce</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">Pending</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>657</td>
            <td>Bob Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-primary">Approved</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>175</td>
            <td>Mike Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-danger">Denied</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>