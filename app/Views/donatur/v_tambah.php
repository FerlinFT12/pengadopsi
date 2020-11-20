        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border bg-blue">
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url('donatur/save'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input name="nama_user" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label>Alamat Email</label>
                  <input name="email" type="email" class="form-control" placeholder="Alamat email" required>
                </div>
                <div class="form-group">
                  <label>Institusi / Perorangan</label>
                  <select name="institusi" class="form-control" required>
                    <option>Pilih...</option>
                    <option value="Institusi">Institusi</option>
                    <option value="Perorangan">Perorangan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Total</label>
                  <input name="total" class="form-control" placeholder="Total" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn bg-blue">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->