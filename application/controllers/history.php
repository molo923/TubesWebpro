<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {

  public function __construct()
  {
    parent::__construct();


  }

	public function index()
	{
    $data['judul'] = 'History';
		$this->load->view('templates/header', $data);
    $this->load->view('history/index');
    $this->load->view('templates/footer');
	}
}
