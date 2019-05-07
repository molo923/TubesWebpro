<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

function index(){
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

}
