<div class="container">

  <div class="row">

    <?php foreach ($lowongan as $row) { ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title"><?= $row->nama_lowongan; ?></h2>
            <p class="card-text"><?= character_limiter($row->deskripsi, '100') ?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>