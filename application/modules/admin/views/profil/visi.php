<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-building"></i><strong> <?= $title ?></strong></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <?php
        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
        ?>

        <form action="<?= base_url('admin/profil/visimisi') ?>" method="post">

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label for="" class="pull-right">Visi</label>
              </div>
              <div class="col-md-9">
                <textarea name="visi" id="editorvisi" class="form-control"><?= $profil->visi ?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label for="" class="pull-right">Misi</label>
              </div>
              <div class="col-md-9">
                <textarea name="misi" id="editormisi" class="form-control"><?= $profil->misi ?></textarea>
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
  CKEDITOR.replace('editorvisi')
  CKEDITOR.replace('editormisi')
</script>