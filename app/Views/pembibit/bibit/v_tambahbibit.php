<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Input Data Bibit</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form action="<?php echo route_to('prosestambahbibit'); ?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Bibit</label>
              <input type="text" name="namabibit" class="form-control" placeholder="Nama Bibit">
            </div>
            <div class="form-group">
              <label>Harga Satuan</label>
              <input type="number" name="hargasatuan" class="form-control" placeholder="Harga Satuan">
            </div>
            <div class="form-group">
              <label>Satuan</label>
              <select name="satuan" class="form-control">
                <?php foreach ($satuan as $item) : ?>
                <option value="<?= $item['id'] ?>"><?= $item['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="<?php echo route_to('pembibitmenubibit') ?>" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
        </div>
          <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>