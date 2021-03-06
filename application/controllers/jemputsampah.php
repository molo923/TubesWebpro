<?php defined('BASEPATH') OR exit('No direct script access allowed');

class jemputsampah extends CI_Controller{

	public function __construct()
  {
    parent::__construct();
		$this->load->model('M_web');

  }


	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->jemput();
		$this->load->view('templates/footer');
	}
	public function jemput()
	{
		$data['datajemput'] = $this->M_web->GetJemput();
		$this->load->view('jemput_sampah/index.php',$data);
	}

	public function hapus_jemput($nama)
	{
		$this->M_web->hapusjemput($nama);
		redirect('index.php/jemputsampah/');
	}
	public function tambahjemput()
	{
		$id_jemput = $this->input->post('id_jemput');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$massa_sampah = $this->input->post('massa_sampah');
		$data = array(
			'id_jemput' => $id_jemput,
			'nama' => $nama,
			'alamat' => $alamat,
			'massa_sampah' => $massa_sampah,
		);
		$this->M_web->tambah_jemput($data);

		redirect('index.php/jemputsampah/');

	}

	public function editjemput()
	{
		$id_jemput = $this->input->post('id_jemput');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$massa_sampah = $this->input->post('massa_sampah');
		$data = array(
			'id_jemput' => $id_jemput,
			'nama' => $nama,
			'alamat' => $alamat,
			'massa_sampah' => $massa_sampah,
		);
		$this->M_web->edit_jemput($id_jemput,$data);

		redirect('index.php/jemputsampah/');
	}
}
