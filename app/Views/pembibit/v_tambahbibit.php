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
        <form role="form">
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
                <option value="kg">Kg</option>
                <option value="ons">Ons</option>
                <option value="pohon">Pohon</option>
                <option value="batang">Batang</option>
                <option value="unit">Unit</option>
                <option value="buah">Buah</option>
                <option value="tunas">Tunas</option>
                <option value="stek">Stek</option>
                <option value="lt">Lt</option>
                <option value="botol">Botol</option>
                <option value="rumpun">Rumpun</option>
                <option value="polybag">Polybag</option>
                <option value="pohon">Pohon</option>
              </select>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="<?= base_url('pembibit/menubibit') ?>" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
        </div>
          <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>