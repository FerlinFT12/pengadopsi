<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Permintaan Pesanan</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Pesanan</th>
                  <th>Nama Pengadopsi</th>
                  <th>Tanggal Pesanan</th>
                  <th>Total Harga Transaksi</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  foreach($pesanan as $data) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['kode_pesanan']; ?></td>
                  <td><?php echo $data['id_pengadopsi']; ?></td>
                  <td><?php echo $data['tanggal_pesanan']; ?></td>
                  <td><?php echo $data['total_harga']; ?></td>
                  <td><?php echo $data['status']; ?></td>
                  <td><a href="<?php echo route_to('pembibitdetailpermintaan', $data['id']); ?>" class="btn btn-info">Lihat Detail</a> <a href="<?= base_url('pembibit/setujuipermintaan') ?>" class="btn btn-success">Setujui</a> <a href="<?= base_url('pembibit/tolakpermintaanbibit') ?>" class="btn btn-danger">Tolak</a></td>
                </tr>
                <?php
                  $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Permintaan Pesanan Disetujui</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Pesanan</th>
                  <th>Nama Pengadopsi</th>
                  <th>Nama Bibit</th>
                  <th>Satuan</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td>4</td>
                  <td>4</td>
                  <td><a href="<?= base_url('pembibit/ubahpermintaanpesanan') ?>" class="btn btn-warning">Ubah</a> <a href="<?= base_url('pembibit/masukkantransaksi') ?>" class="btn btn-primary">Masukkan Transaksi</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>