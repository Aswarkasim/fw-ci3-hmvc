<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/tentang/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */