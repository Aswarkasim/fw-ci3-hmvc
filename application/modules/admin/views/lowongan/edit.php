<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
  <div class="col-md-10">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><strong><?= $title ?></strong></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <div class="row">
          <div class="col-md-12">
            <?php
            echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
            if (isset($error)) {
              echo '<div class="alert alert-warning">';
              echo $error;
              echo '</div>';
            }
            echo form_open_multipart($edit . $lowongan->id_lowongan) ?>
            <form action="" method="post">


              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label for="" class="pull-right">Judul Lowongan</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="nama_lowongan" value="<?= $lowongan->nama_lowongan ?>" placeholder="Nama Lowongan" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label for="" class="pull-right">Perusahaan</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="perusahaan" value="<?= $lowongan->perusahaan ?>" placeholder="Perushaan" class="form-control">
                  </div>
                </div>
              </div>



              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label for="" class="pull-right">Gambar</label>
                  </div>
                  <div class="col-md-9">
                    <input type="file" name="gambar" placeholder="Gambar" class="form-control">

                    <img src="<?= base_url($lowongan->gambar); ?>" width="100px" alt="">
                  </div>
                </div>
              </div>

              <script src="<?= base_url('assets/admin/') ?>bower_components/ckeditor/ckeditor.js"></script>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label for="" class="pull-right">Deskripsi</label>
                  </div>
                  <div class="col-md-9">
                    <textarea name="deskripsi" id="editor1" placeholder="Isi Lowongan" class="form-control">
                    <?= $lowongan->deskripsi; ?>
                    </textarea>
                  </div>
                </div>
              </div>



              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">

                  </div>
                  <div class="col-md-9">
                    <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </div>
              </div>

            </form>
            <?= form_close() ?>
          </div>
          <!-- <div class="col-md-6">

                    </div> -->
        </div>


      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>

<script>
  CKEDITOR.replace('editor1')
</script>