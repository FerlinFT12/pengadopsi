<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Bibit</h3>
            <?php
              if(!empty(session()->getFlashdata('success'))){ ?>
      
              <div class="alert alert-success">
                  <?php echo session()->getFlashdata('success');?>
              </div>
                  
              <?php } ?>
              <?php if(!empty(session()->getFlashdata('info'))){ ?>
      
              <div class="alert alert-info">
                  <?php echo session()->getFlashdata('info');?>
              </div>
                  
              <?php } ?>
      
              <?php if(!empty(session()->getFlashdata('warning'))){ ?>
      
              <div class="alert alert-warning">
                  <?php echo session()->getFlashdata('warning');?>
              </div>
                  
              <?php } ?>
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
                  $no=1;
                  foreach($bibit as $data) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['namabibit']; ?></td>
                  <td><?php echo $data['harga']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><a href="<?php echo route_to('pembibiteditbibit', $data['id']); ?>" class="btn btn-warning">Ubah</a> <a href="<?php echo route_to('pembibithapusbibit', $data['id']); ?>" class="btn btn-danger">Hapus</a></td>
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
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>