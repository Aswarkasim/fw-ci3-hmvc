
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

  public function index()
  {
    $profil = $this->Crud_model->listingOne('tbl_profil', 'id_profil', '1');
    $valid = $this->form_validation;
    $valid->set_rules('nama_instansi', 'Nama Instansi', 'required', array('required' => '%s tidak boleh kosong'));

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Profil ',
        'profil'    => $profil,
        'content'   => 'admin/profil/profil'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'nama_instansi'   => $i->post('nama_instansi'),
        'sejarah'   => $i->post('sejarah'),
      ];
      $this->Crud_model->edit('tbl_profil', 'id_profil', '1', $data);
      $this->session->set_flashdata('msg', 'Profil diubah');
      redirect('admin/profil');
    }
  }

  public function visimisi()
  {
    $profil = $this->Crud_model->listingOne('tbl_profil', 'id_profil', '1');
    $valid = $this->form_validation;
    $valid->set_rules('visi', 'Visi', 'required', array('required' => '%s tidak boleh kosong'));

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Visi & Misi ',
        'profil'    => $profil,
        'content'   => 'admin/profil/visi'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'visi'   => $i->post('visi'),
        'misi'   => $i->post('misi'),
      ];
      $this->Crud_model->edit('tbl_profil', 'id_profil', '1', $data);
      $this->session->set_flashdata('msg', 'Profil diubah');
      redirect('admin/profil/visimisi');
    }
  }
}
