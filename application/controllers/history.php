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
}
