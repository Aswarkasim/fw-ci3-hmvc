<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

  public function index()
  {
    $berita = $this->Crud_model->listing('tbl_berita');
    $kategori = $this->Crud_model->listing('tbl_kategori');
    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'content'  => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
