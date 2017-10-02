<?php

class Ctrl_GestionTickets extends CI_Controller{
    public function __construct() {
    parent::__construct();
    }
    
    public function index()
	{
            $this->load->helper('url');
             $this->load->helper('form');
            $data = array(
            'loginUser' => $this->input->get('loginUser'),
            'pwdUser' => $this->input->get('pwdUser')
            );
   
            $this->load->view("v_accueil", $data);
            print_r($data ) ;
	}
        
        public function check(){
            $login= $this->uri->segment(3);
            $model=$this->load->model("Model_connexion");
            $data['lesLogPass'] = $this->Model_connexion->getLoginPass();
            
              $this->load->view('v_lesTickets');
        }


        public function afficherLesTickets(){
              $this->load->helper('url');
              $model=$this->load->model("Model_lesTickets");
              $data['lesTickets'] = $this->Model_lesTickets->getLesTickets();
              $this->load->view('v_lesTickets',$data);
        }
    
}