<?php defined('BASEPATH') OR exit('No direct script access allowed');

class timbulan_M extends CI_model
{

	public function getAllTimbulan()
	{
		//use query builder to get data table "timbulan"
 		return $this->db->get('timbulan')->result();
	}

	public function tambahDataTimbulan($data)
	{

		//use query builder to insert $data to table "timbulan"
		$this->db->insert('timbulan', $data);
		return;
	}

	public function hapusDataTimbulan($id)
	{
		//use query builder to delete data based on id
		$this->db->where('id', $id);
		$this->db->delete('timbulan');
	}

	public function getTimbulanById($id)
	{
		//get data timbulan based on id
		$this->db->where('id', $id);
		return $this->db->get('timbulan')->row_array();
	}

	public function ubahDataTimbulan($id)
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"kota" => $this->input->post('kota', true),
		];
		//use query builder class to update data timbulan based on id
		$this->db->where('id', $id);
		$this->db->update('timbulan', $data);
	}

	public function cariDataTimbulan()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data timbulan based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->like('judul', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		$this->db->or_like('kota', $keyword);

		//return data timbulan that has been searched
		return $this->db->get('timbulan')->result_array();
	}
}
