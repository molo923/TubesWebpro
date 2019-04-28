<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Users_model');

  }

	public function index()
	{
    $this->load->view('Login/LoginPage');
	}

  public function verifikasi(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    if($this->Users_model->cekUser($email,MD5($password))){
      $this->load->view('home/index');
    }
    else{
      $this->load->view('Landing/LandingPage');
    }

  }
}
