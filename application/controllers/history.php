<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('timbulan_M');

  }

	public function index()
	{
    $data['judul'] = 'History';
		$this->load->view('templates/header', $data);
    $this->timbulan();
    $this->load->view('templates/footer');
	}

  public function timbulan()
	{
		$data['timbul'] = $this->timbulan_M->getAllTimbulan();
		$this->load->view('history/index',$data);
	}

  public function hapustimbulan($id)
  {
  $this->timbulan_M->hapus_timbulan($id);
  redirect('index.php/history');
  }

  public function edittimbulan()
	{
    $id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$kota = $this->input->post('kota');
		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'kota' => $kota,
		);
		$this->timbulan_M->edit_timbulan($id,$data);

		redirect('history');
	}
}
