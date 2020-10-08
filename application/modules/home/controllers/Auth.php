<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('home/Home_model', 'HM');
  }

  public function index()
  {
    $this->load->helper('string');

    if ($this->session->userdata('id_alumni')) {
      redirect('home');
    }
    $valid = $this->form_validation;

    $valid->set_rules('username', 'Username', 'required', array('required' => '%s harus diisi'));
    $valid->set_rules('password', 'Password', 'required|min_length[6]', array('required' => 'Password harus diisi', 'min_length' => 'Password minimal 6 karakter'));

    if ($valid->run() === FALSE) {
      $data = array(
        'content'   => 'home/auth/login'
      );
      $this->load->view('home/layout/wrapper', $data);
    } else {
      $i          = $this->input;
      $username      = $i->post('username');
      $password   = $i->post('password');
      $cek_login  = $this->HM->loginUsername($username, $password);
      //print_r($email); die;

      if (!empty($cek_login) == 1) {
        if ($cek_login->is_active == 1) {
          $s = $this->session;
          $s->set_userdata('id_alumni', $cek_login->id_alumni);
          $s->set_userdata('username_alumni', $cek_login->username_alumni);
          $s->set_userdata('nama_alumni', $cek_login->nama_alumni);
          redirect('user/pribadi', 'refresh');
        } else {
          $data = array(
            'error'     => 'Akun anda belum aktif. Silakan hubungi admin bagian untuk mengaktifkan akun',
            'content'   => 'home/auth/login'
          );
          $this->load->view('home/layout/wrapper', $data);
        }
      } else {
        $data = array(
          'error'     => 'username atau password salah',
          'content'   => 'home/auth/login'
        );
        $this->load->view('home/layout/wrapper', $data);
      }
    }
  }

  public function register()
  {
    $this->load->helper('string');

    $required = '%s tidak boleh kosong';
    $is_username = '%s ' . post('username') . ' telah ada, silakan masukkan %s yang lain';
    $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan %s yang lain';
    $valid = $this->form_validation;
    $valid->set_rules('nama_alumni', 'Nama Lengkap', 'required', array('required' => $required));
    $valid->set_rules('username', 'Username', 'required|is_unique[tbl_user.username]', array('required' => $required, 'is_unique' => $is_username));
    $valid->set_rules('email', 'email', 'required|is_unique[tbl_user.email]|valid_email|is_unique[tbl_user.username]', array('required' => $required, 'is_unique' => $is_email, 'valid_email' => '%s yang anda  masukkan tidak valid'));
    $valid->set_rules('password', 'Password', 'required', array('required' => $required, 'is_unique' => $is_email));
    $valid->set_rules('re_password', 'Konfirmasi Password', 'required|matches[password]', array('required' => $required, 'matches' => '%s password yang anda masukkan tidak sama'));


    $instansi  = $this->Crud_model->listing('tbl_instansi');
    if ($valid->run() === FALSE) {
      $data = [
        'instansi'  => $instansi,
        'content'   => 'home/auth/register'
      ];
      $this->load->view('layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_alumni'        => random_string('numeric', '15'),
        'nama_alumni'       => $i->post('nama_alumni'),

      ];
      $this->Crud_model->add('tbl_alumni', $data);
      $this->session->set_flashdata('msg', 'ditambah');
      redirect('home/auth', 'refersh');
    }
  }

  function logout()
  {
    $s = $this->session;
    $s->unset_userdata('id_alumni');
    $s->unset_userdata('username_alumni');
    $s->unset_userdata('nama_alumni');
    redirect(base_url('home/auth'), 'refresh');
  }
}
