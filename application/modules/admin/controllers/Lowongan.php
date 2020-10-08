<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'AM');
  }


  public function index()
  {
    $lowongan = $this->Crud_model->listing('tbl_lowongan');
    $data = [
      'title'    => 'List Lowongan',
      'add'    => 'admin/lowongan/add',
      'edit'    => 'admin/lowongan/edit/',
      'lowongan'   => $lowongan,
      'content'  => 'admin/lowongan/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function detail($id_lowongan)
  {


    // $lowongan = $this->AM->detailLowongan($id_lowongan)->row();
    $lowongan = $this->Crud_model->listingOne('tbl_lowongan', 'id_lowongan', $id_lowongan);
    $data =
      [
        'lowongan'   =>  $lowongan,
        'content'  => 'admin/lowongan/detail'
      ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');

    $kategori = $this->Crud_model->listing('tbl_kategori');

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_lowongan', 'Judul Lowongan', 'required', ['required' => $required]);
    $valid->set_rules('perusahaan', 'Perusahaan', 'required', ['required' => $required]);
    $valid->set_rules('deskripsi', 'Isi Lowongan', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Tambah Lowongan',
            'add'    => 'admin/lowongan/add',
            'edit'    => 'admin/lowongan/edit/',
            'back'    => 'admin/lowongan',
            'kategori'    => $kategori,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/lowongan/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $slug = random_string() . '-' . url_title($i->post('nama_lowongan', 'dash', true));
          $data = [
            'id_lowongan'       => random_string(),
            'nama_lowongan'    => $i->post('nama_lowongan'),
            'perusahaan'    => $i->post('perusahaan'),
            'slug'              => $slug,
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'            => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_lowongan', $data);
          $this->session->set_flashdata('msg', 'Lowongan ditambahkan');
          redirect('admin/lowongan/add');
        }
      }
    }
    $data = [
      'title'    => 'Tambah Lowongan',
      'add'    => 'admin/lowongan/add',
      'edit'    => 'admin/lowongan/edit/',
      'back'    => 'admin/lowongan',
      'kategori'    => $kategori,
      'content'  => 'admin/lowongan/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function edit($id_lowongan)
  {

    $this->load->helper('string');

    $kategori = $this->Crud_model->listing('tbl_kategori');
    $lowongan = $this->Crud_model->listingOne('tbl_lowongan', 'id_lowongan', $id_lowongan);

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_lowongan', 'Judul Lowongan', 'required', ['required' => $required]);
    $valid->set_rules('perusahaan', 'Perusahaan', 'required', ['required' => $required]);
    $valid->set_rules('deskripsi', 'Isi Lowongan', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Edit Lowongan',
            'add'    => 'admin/lowongan/add',
            'edit'    => 'admin/lowongan/edit/',
            'back'    => 'admin/lowongan',
            'kategori'    => $kategori,
            'lowongan'    => $lowongan,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/lowongan/edit'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $slug = url_title($i->post('judul_lowongan', 'dash', true));
          $data = [
            'id_lowongan'       => $id_lowongan,
            'nama_lowongan'    => $i->post('nama_lowongan'),
            'perusahaan'    => $i->post('perusahaan'),
            'slug'              => $slug,
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_lowongan', 'slug', $slug, $data);
          $this->session->set_flashdata('msg', 'Lowongan diedit');
          redirect('admin/lowongan/detail/' . $data['slug']);
        }
      } else {
        $i = $this->input;

        $slug = url_title($i->post('judul_lowongan', 'dash', true));
        $data = [
          'id_lowongan'       => $id_lowongan,
          'nama_lowongan'    => $i->post('nama_lowongan'),
          'perusahaan'    => $i->post('perusahaan'),
          'slug'              => $slug,
          'deskripsi'         => $i->post('deskripsi'),
        ];
        $this->Crud_model->edit('tbl_lowongan', 'id_lowongan', $id_lowongan, $data);
        $this->session->set_flashdata('msg', 'Lowongan diedit');
        redirect('admin/lowongan/detail/' . $data['id_lowongan']);
      }
    }
    $data = [
      'title'    => 'Tambah Lowongan',
      'edit'    => 'admin/lowongan/edit/',
      'back'    => 'admin/lowongan',
      'kategori'    => $kategori,
      'lowongan'    => $lowongan,
      'content'  => 'admin/lowongan/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_lowongan)
  {
    $d = $this->Crud_model->listingOne('tbl_lowongan', 'id_lowongan', $id_lowongan);
    if ($d->gambar != '') {
      unlink($d->gambar);
    }
    $this->Crud_model->delete('tbl_lowongan', 'id_lowongan', $id_lowongan);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/lowongan');
  }
}
