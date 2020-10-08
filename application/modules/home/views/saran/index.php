<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">Berikan saran dan masukan</h2>

      <hr>

      <form action="<?= base_url('home/saran/kirim'); ?>" method="POST">
        <div class="form-group">
          <div class="label"><strong> Saran</strong></div>
          <textarea name="isi_saran" class="form-control" id="editor" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group pull-right">
          <button type="submit" class="btn btn-primary">Kirim <i class="fa fa-telegram"></i></button>
        </div>
      </form>

    </div>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">HTML</a>
                </li>
                <li>
                  <a href="#">Freebies</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Berita</h5>
        <div class="card-body">
          <div class="input-group">
            <h5><strong>Judul</strong></h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, dicta.</p>
            <hr>
          </div>
        </div>
      </div>



    </div>

  </div>
  <!-- /.row -->

</div>


<script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>