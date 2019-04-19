<?php

class upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
               $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('templates/header');
                $this->load->view('timbulan/form', array('error' => ' ' ));
                $this->load->view('templates/footer');
        }


        public function do_upload()
        {
          if(!empty($_FILES['file']['name'])){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '1024';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);

            if($this->upload->do_upload('file')){
              $uploadData = $this->upload->data();
            }
          }
        }
}
?>
