<?php	
    class Peoples extends CI_Controller{

        public function index(){
            $data['judul'] = 'List 0f Peoples';
            $this->load->model('Peoples_model', 'peoples');
            $data['peoples'] = $this->peoples->getAllPeoples();
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index');
            $this->load->view('templates/footer');
        } 

    }
?>