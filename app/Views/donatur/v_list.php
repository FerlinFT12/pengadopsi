<div class="row">
  <div class="col-sm-12">
    <a href="<?= base_url('donatur/tambah') ?>" class="btn btn-primary right">Tambah Datar</a>
    <?php
    if (!empty(session()->getflashdata('success'))) { ?>
      <div class="alert alert-success">
        <?= session()->getflashdata('success'); ?>
      </div>
    <?php } ?>
    <div class=" box box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead class="text-center">
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat Email</th>
            <th>Institusi</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($donatur as $key => $value) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $value['id_donatur'] ?></td>
              <td><?= $value['nama_user'] ?></td>
              <td><?= $value['email'] ?></td>
              <td><?= $value['institusi'] ?></td>
              <td><?= $value['total'] ?></td>
              <td>
                <a href="<?= base_url('donatur/edit/' . $value['id_donatur']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="<?= base_url('donatur/delete/' . $value['id_donatur']) ?>" class="btn btn-danger " onclick="return confirm('Anda Ingin Menghapus data..?')"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
</div>