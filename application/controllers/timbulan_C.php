<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class timbulan_C extends CI_Controller {

  public function __construct(){

    parent::__construct();
    $this->load->model('timbulan_M');
  }

  public function index(){

    // load view
    $data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
    $this->load->view('timbulan/form');
    $this->load->view('templates/footer');

  }

  // File upload
  public function fileUpload(){

    if(!empty($_FILES['file']['name'])){

     // Set preference
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = '1024'; // max_size in kb
      $config['file_name'] = $_FILES['file']['name'];

      //Load upload library
      $this->load->library('upload',$config);

      // File upload
      if($this->upload->do_upload('file')){
        // Get data about the file
        $uploadData = $this->upload->data();
      }
    }
  }

  public function tambah()
	{


		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');

    $data = [
			"judul" => $this->input->post('judul', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"kota" => $this->input->post('kota', true),
		];
		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if ($this->form_validation->run() == FALSE){
				$this->load->view('timbulan/form', '$data');
		}

		//else, when successed {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
		else{
				$this->timbulan_M->tambahDataTimbulan($data);
				redirect('index.php/timbulan_C');
		}
	}

}
