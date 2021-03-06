<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
  // declare private variable
  private $_userID;
  private $_name;
  private $_userName;
  private $_email;
  private $_password;
  private $_status;

  public function setUserID($userID) {
    $this->_userID = $userID;
  }
  public function setName($name) {
    $this->_name = $name;
  }
  public function setUserName($userName) {
    $this->_userName = $userName;
  }
  public function setEmail($email) {
    $this->_email = $email;
  }
  public function setPassword($password) {
    $this->_password = $password;
  }
  public function setStatus($status) {
    $this->_status = $status;
  }
  public function cekUser($email, $password){
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('daftar');

    if ($query->num_rows() > 0) {
      return true;
    }
    else{
      return false;
    }
  }

  public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

    public function createUser() {
        $data = array(
            'nama' => $this->_name,
            'email' => $this->_email,
            'username' => $this->_userName,
            'password' => $this->_password,
            'status' => $this->_status,
        );
        $this->db->insert('daftar', $data);
        return $this->db->insert_id();
    }
}
?>
