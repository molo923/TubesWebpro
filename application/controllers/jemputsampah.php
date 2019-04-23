<?php defined('BASEPATH') OR exit('No direct script access allowed');

class jemputsampah extends CI_Controller{

	public function __construct()
  {
    parent::__construct();


  }

	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/searchbar');


	}

}
