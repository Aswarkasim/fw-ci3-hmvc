<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'AM');
  }


  public function index()
  {
    $galeri = $this->Crud_model->listing('tbl_galeri');
    $data = [
      'title'    => 'List Galeri',
      'add'    => 'admin/galeri/add',
      'edit'    => 'admin/galeri/edit/',
      'galeri'   => $galeri,
      'content'  => 'admin/galeri/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');

    $kategori = $this->Crud_model->listing('tbl_kategori');

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('deskripsi', 'Isi Galeri', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Tambah Galeri',
            'add'    => 'admin/galeri/add',
            'edit'    => 'admin/galeri/edit/',
            'back'    => 'admin/galeri',
            'kategori'    => $kategori,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/galeri/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {


          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_galeri'       => random_string(),
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'            => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_galeri', $data);
          $this->session->set_flashdata('msg', 'Galeri ditambahkan');
          redirect('admin/galeri/add');
        }
      }
    }
    $data = [
      'title'    => 'Tambah Galeri',
      'add'    => 'admin/galeri/add',
      'edit'    => 'admin/galeri/edit/',
      'back'    => 'admin/galeri',
      'kategori'    => $kategori,
      'content'  => 'admin/galeri/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function edit($id_galeri)
  {

    $this->load->helper('string');

    $galeri = $this->Crud_model->listingOne('tbl_galeri', 'id_galeri', $id_galeri);

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('deskripsi', 'deskripsi', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Edit Galeri',
            'add'    => 'admin/galeri/add',
            'edit'    => 'admin/galeri/edit/',
            'back'    => 'admin/galeri',
            'galeri'    => $galeri,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/galeri/edit'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          if ($galeri->gambar != '') {
            unlink($galeri->gambar);
          }

          $i = $this->input;

          $data = [
            'id_galeri'       => $id_galeri,
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_galeri', 'id_galeri', $id_galeri, $data);
          $this->session->set_flashdata('msg', 'Galeri diedit');
          redirect('admin/galeri');
        }
      } else {
        $i = $this->input;

        $data = [
          'id_galeri'       => $id_galeri,
          'deskripsi'         => $i->post('deskripsi'),
        ];
        $this->Crud_model->edit('tbl_galeri', 'id_galeri', $id_galeri, $data);
        $this->session->set_flashdata('msg', 'Galeri diedit');
        redirect('admin/galeri/detail/' . $data['id_galeri']);
      }
    }
    $data = [
      'title'    => 'Tambah Galeri',
      'edit'    => 'admin/galeri/edit/',
      'back'    => 'admin/galeri',
      'galeri'    => $galeri,
      'content'  => 'admin/galeri/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_galeri)
  {
    $d = $this->Crud_model->listingOne('tbl_galeri', 'id_galeri', $id_galeri);
    if ($d->gambar != '') {
      unlink($d->gambar);
    }
    $this->Crud_model->delete('tbl_galeri', 'id_galeri', $id_galeri);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/galeri');
  }
}
