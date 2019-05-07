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

  public function aksi_login(){
  		$email = $this->input->post('email');
  		$password = $this->input->post('password');
  		$where = array(
  			'email' => $email,
  			'password' => $password
  			);
  		$cek = $this->Users_model->cek_login("daftar",$where)->num_rows();
  		if($cek > 0){

  			$data_session = array(
  				'nama' => $email,
  				'status' => "login"
  				);

  			$this->session->set_userdata($data_session);

  			redirect(base_url("Home"));

  		}else{
  			echo "Username dan password salah !";
  		}
  	}

  public function logout(){
    $this->session->sess_destroy();
		redirect(base_url('login'));
  }

}
