<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
  <div class="box-header">
    <h3 class="box-title"><?= $title; ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <p>
      <a href="<?= base_url($add) ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</a>
    </p>

    <table class="table DataTable">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th width="100px">Gambar</th>
          <th>Deskripsi</th>
          <th width="200px">Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($galeri as $row) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td>
              <img src="<?= base_url($row->gambar); ?>" width="100%" alt="">
            </td>
            <td><strong><?= $row->deskripsi; ?></strong></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/galeri/edit/' . $row->id_galeri) ?>"><i class="fa fa-edit"></i> Edit</a>
              <a class="btn btn-danger tombol-hapus" href="<?= base_url('admin/galeri/delete/' . $row->id_galeri) ?>"><i class="fa fa-trash"></i> Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
  <!-- /.box-body -->
</div>