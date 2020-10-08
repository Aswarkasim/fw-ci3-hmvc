<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

  public function index()
  {
    $lowongan = $this->Crud_model->listing('tbl_lowongan');
    $data = [
      'lowongan' => $lowongan,
      'content'  => 'home/lowongan/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
