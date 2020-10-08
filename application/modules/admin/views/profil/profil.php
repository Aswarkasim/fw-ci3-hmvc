<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-building"></i> <?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <?php
        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
        ?>

        <form action="<?= base_url('admin/profil') ?>" method="post">

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label for="" class="pull-right">Nama Instansi</label>
              </div>
              <div class="col-md-9">
                <input type="text" value="<?= $profil->nama_instansi ?>" placeholder="Nama Instansi" name="nama_instansi" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label for="" class="pull-right">Sejarah</label>
              </div>
              <div class="col-md-9">
                <textarea name="sejarah" id="editor1" class="form-control"><?= $profil->sejarah ?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md-8">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </div>
          </div>

        </form>



      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>

<script src="<?= base_url('assets/admin/') ?>bower_components/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor1')
</script>