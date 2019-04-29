<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
 	{
			parent::__construct();
			$this->load->model('profilModel');

 	}

	public function index()
	{
    $data['judul'] = 'Profile';
		$data['profil'] = $this->db->get('daftar');
		$this->load->view('templates/header', $data);
    $this->load->view('Profile/profilePage');
    $this->load->view('templates/footer');
	}
public function editPage()
{
	$data['judul'] = 'editProfile';
	$data['profil'] = $this->db->get('daftar');
	$this->load->view('templates/header', $data);
	$this->load->view('Profile/editProfile');
	$this->load->view('templates/footer');
	}

	public function editProfil()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$data = array(
			'nama' => $nama,
			'email' => $email,
		);
		$this->profilModel->edit_profile($username,$data);

		redirect('index.php/profile');
	}
}
