<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Bibit</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form action="<?php echo route_to('pembibitupdatebibit', $bibit['id']); ?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="id" class="form-control" value="<?php echo $bibit['id']; ?>">
              <label>Nama Bibit</label>
              <input type="text" name="namabibit" class="form-control" value="<?php echo $bibit['namabibit']; ?>">
            </div>
            <div class="form-group">
              <label>Harga Satuan</label>
              <input type="number" name="hargasatuan" class="form-control" placeholder="Harga Satuan" value="<?php echo $bibit['harga']; ?>">
            </div>
            <div class="form-group">
              <label>Satuan</label>
              <select name="satuan" class="form-control">
                <?php foreach ($satuan as $item) : ?>
                <option value="<?php echo $item['id'] ?>" <?php if($bibit['satuan']==$item['id']) { ?> selected <?php } ?>> <?= $item['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="<?= base_url('pembibit/menubibit') ?>" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Simpan</button> <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
        </div>
          <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>