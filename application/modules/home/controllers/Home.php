<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $banner = $this->Crud_model->listing('tbl_banner');
        $lowongan = $this->Crud_model->listing('tbl_lowongan');
        $berita = $this->Crud_model->listing('tbl_berita');
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $data = [
            'banner'    => $banner,
            'lowongan'    => $lowongan,
            'berita'    => $berita,
            'kategori'    => $kategori,
            'content'   => 'home/home/index'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
    }
}
