<div class="container">

  <hr>

  <div class="row">
    <div class="col-md-8">
      <ul class="list-unstyled">

        <?php foreach ($berita as $row) { ?>
          <li class="media">
            <img src="<?= base_url($row->gambar); ?>" width="100px" class="mr-3" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="<?= base_url('home/berita/detail/' . $row->slug); ?>"><strong><?= $row->judul_berita; ?></strong></a></h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </li>
          <hr>
        <?php } ?>

      </ul>
    </div>

    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Kategori</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-unstyled mb-0">
                <?php foreach ($kategori as $row) { ?>
                  <li>
                    <a href="<?= base_url('admin/berita/kategori/' . $row->id_kategori . $row->nama_kategori); ?>"><?= $row->nama_kategori; ?></a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>