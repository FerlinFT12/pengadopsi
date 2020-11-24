<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detail Permintaan Pesanan</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Pesanan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $pesanan['kode_pesanan']; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Pesanan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $pesanan['tanggal_pesanan']; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pengadopsi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $pesanan['id_pengadopsi']; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Total Transaksi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $pesanan['total_harga']; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $pesanan['status']; ?>" disabled>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Rincian Transaksi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Bibit</th>
                  <th>Jumlah</th>
                  <th>Harga Satuan</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  //$no=1;
                  //foreach($pesanan as $data) {
                ?>
                <tr>
                  <td><?php //echo $no; ?></td>
                  <td><?php //echo $data['kode_pesanan']; ?></td>
                  <td><?php //echo $data['id_pengadopsi']; ?></td>
                  <td><?php //echo $data['tanggal_pesanan']; ?></td>
                  <td><?php //echo $data['total_harga']; ?></td>
                </tr>
                <?php
                  //$no++;
                  //}
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="<?php echo route_to('pembibitpermintaanpesanan') ?>" class="btn btn-warning">Kembali</a> <a href="<?php echo route_to('pembibitpermintaanpesanan') ?>" class="btn btn-primary">Setujui</a> <a href="<?php echo route_to('pembibitpermintaanpesanan') ?>" class="btn btn-danger">Tolak</a>
          </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>