<?php
$id_alumni = $this->session->userdata('id_alumni');
$alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
?>

<div class="jumbotron pt100 pb80">
  <div class="container">

    <div class="row">
      <div class="col-md-2">
        <img src="<?= base_url('assets/home/'); ?>" alt="author" width="100%">
      </div>
      <div class="col-md-3">
        <h4><strong><?= $alumni->nama_alumni ?></strong></h4>
        <h6 class="author-name"><?= 'Angkatan ' . $alumni->angkatan ?></h6>
      </div>
    </div>

  </div>
</div>



<section id="elements-buttons">
  <div class="container">

    <div class="row">

    </div>

    <div class="row">

      <div class="col-md-10">

        <div class="buttons-tabs-centered">

          <ul class="nav nav-tabs">


            <li class="nav-link <?php if ($this->uri->segment('2') == 'pribadi') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/pribadi'); ?>" role="tab" class="control-item"><strong> Data Pribadi</strong></a>
            </li>
            <li class="nav-link <?php if ($this->uri->segment('2') == 'peminjaman') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/kuliah') ?>" role="tab" class="control-item"><strong>Kuliah</strong></a>

            <li class="nav-link <?php if ($this->uri->segment('2') == 'password') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/password') ?>" role="tab" class="control-item"><strong>Ubah Password</strong></a>
            </li>

          </ul>

        </div>

      </div>

    </div>
  </div>
</section>