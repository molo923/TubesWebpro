<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();


  }

	public function index()
	{
    $data['judul'] = 'Login';
		$this->load->view('templates/header', $data);
    $this->load->view('Login/LoginPage');
	}
}
