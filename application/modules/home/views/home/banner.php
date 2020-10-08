<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

    <?php foreach ($banner as $row) { ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?= $row->urutan; ?>" class="<?php if ($row->urutan == '1') {
                                                                                                echo "active";
                                                                                              } ?>"></li>
    <?php } ?>
  </ol>
  <div class="carousel-inner">

    <?php foreach ($banner as $row) { ?>
      <div class="carousel-item <?php if ($row->urutan == '1') {
                                  echo "active";
                                } ?>">
        <img src="<?= base_url($row->gambar); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><strong> <?= $row->topik; ?></strong></h1>
          <h3><?= $row->deskripsi; ?></h3>
        </div>
      </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>