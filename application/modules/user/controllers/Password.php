<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'user/password/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
