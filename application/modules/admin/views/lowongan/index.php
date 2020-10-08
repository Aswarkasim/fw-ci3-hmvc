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
          <th>Judul Lowongan</th>
          <th width="200px">Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($lowongan as $row) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><a href="<?= base_url('admin/lowongan/detail/' . $row->id_lowongan) ?>"><strong><?= $row->nama_lowongan; ?></strong></a></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/lowongan/edit/' . $row->id_lowongan) ?>"><i class="fa fa-edit"></i> Edit</a>
              <a class="btn btn-danger tombol-hapus" href="<?= base_url('admin/lowongan/delete/' . $row->id_lowongan) ?>"><i class="fa fa-trash"></i> Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
  <!-- /.box-body -->
</div>