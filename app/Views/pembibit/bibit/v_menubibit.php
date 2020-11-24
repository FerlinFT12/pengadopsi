<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Bibit</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <a href="<?php echo route_to('pembibittambahbibit'); ?>" class="btn btn-primary">Tambah Bibit</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Bibit</th>
                  <th>Nama Bibit</th>
                  <th>Harga Satuan</th>
                  <th>Satuan</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach($bibit as $key => $data) {
                ?>
                <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $data['namabibit'] ?></td>
                  <td><?php echo $data['harga']; ?></td>
                  <td>  <?php echo $data['satuan'] ?></td>
                  <td><a href="<?php echo route_to('pembibiteditbibit', $data['id']); ?>" class="btn btn-warning">Ubah</a> <a href="<?= base_url('pembibit/hapusbibit/'.$data['id']) ?>" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                  }
                ?>
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