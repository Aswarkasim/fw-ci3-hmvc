<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{




  public function loginEmail($email, $password)
  {
    $this->db->select('*')
      ->from('tbl_alumni')
      ->where(array(
        'email'      => $email,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }
  public function loginUsername($username, $password)
  {
    $this->db->select('*')
      ->from('tbl_alumni')
      ->where(array(
        'username_alumni'      => $username,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }
}
