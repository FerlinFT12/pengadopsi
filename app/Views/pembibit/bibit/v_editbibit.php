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
                <option value="<?php if ($bibit['satuan'] == "kg") { selected?> "selected> Kg <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "ons") { ?> "selected> Ons <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "pohon") { ?> "selected> Pohon <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "unit") { ?> "selected> Unit <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "buah") { ?> "selected> Buah <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "tunas") { ?> "selected> Tunas <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "stek") { ?> "selected> Stek <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "liter") { ?> "selected> Liter <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "botol") { ?> "selected> Botol <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "rumpun") { ?> "selected> Rumpun <?php } ?></option>
                <option value="<?php if ($bibit['satuan'] == "polybag") { ?> "selected> Polybag <?php } ?></option>
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