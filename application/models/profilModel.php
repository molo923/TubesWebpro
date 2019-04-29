<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profilModel extends CI_Model {
  // declare private variable
  public function getusername()
  	{
  		//get data mahasiswa based on id
    $this->db->select('username');
    $this->db->from('daftar');
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
  public function edit_profile($username,$data)
{
  $this->db->where('username', $username);
  $this->db->update('daftar', $data);
    return;
}
}
?>
