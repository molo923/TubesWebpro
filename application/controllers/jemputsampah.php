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


<<<<<<< HEAD
=======
		$this->load->library('googlemaps');
				$config=array();
				$config['center']="37.4419, -122.1419";
				$config['zoom']=17;
				$config['map_height']="400px";
				$this->googlemaps->initialize($config);
				$marker=array();
				$marker['position']="37.4419, -122.1419";
				$this->googlemaps->add_marker($marker);
				$data['map']=$this->googlemaps->create_map();
		$this->load->view('jemput_sampah/index',$data);
>>>>>>> 4c8bf504576698a03d3dd1028a46b1226fd19092
	}

}
