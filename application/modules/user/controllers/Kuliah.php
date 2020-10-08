<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kuliah extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'user/kuliah/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
