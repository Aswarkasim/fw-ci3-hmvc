<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pribadi extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'user/pribadi/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }


  public function edit()
  {
    $data = [
      'content'  => 'user/pribadi/edit'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
