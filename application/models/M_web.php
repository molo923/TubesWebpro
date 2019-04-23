<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	public function Getjemput(){
		$this->db->select('*');
		$this->db->from('jemput');
		$query = $this->db->get();
		return $this->db->get('jemput')->result();
	}

	public function hapusjemput($nama)
	{
		$this->db->delete('jemput', array('nama' => $nama));
	    return;
	}

	public function edit_jemput($nama,$data)
	{
		$this->db->where('nama', $nama);
		$this->db->update('jemput', $data);
	    return;
	}
	public function tambah_jemput($data)
	{
		$this->db->insert('jemput',$data);
	    return;
	}
}
