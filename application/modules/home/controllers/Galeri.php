<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

  public function index()
  {
    $galeri = $this->Crud_model->listing('tbl_galeri');
    $data = [
      'galeri'  => $galeri,
      'content'  => 'home/galeri/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
