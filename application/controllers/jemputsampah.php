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
		$this->load->view('jemput_sampah/index.php',$data);
		$this->load->view('templates/footer');
	}
	public function jemput()
	{

		$data['datajemput'] = $this->M_web->GetJemput();
	}

	public function hapusjemput($nama)
	{
		$this->M_web->hapusjemput($nama);
		redirect('index.php/web/mahasiswa');
	}
	public function tambahjemput()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$massa = $this->input->post('massa');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'massa' => $massa,
		);
		$this->M_web->tambah_jemput($data);

		redirect('index.php/jemputsampah');

	}

	public function editjemput()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$massa = $this->input->post('massa');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'massa' => $massa,
		);
		$this->M_web->edit_jemput($nama,$data);

		redirect('index.php/web/mahasiswa');
	}
}
