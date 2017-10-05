<?php

class Ctrl_GestionTickets extends CI_Controller{
        public function __construct() {
        parent::__construct();
        }
    
        public function index()
	{
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->view("v_accueil");
	}
        
        public function check(){
          $this->load->library('form_validation');
                 if($this->form_validation->run()==TRUE)
                 {    
                    /*  $this->load->helper('url');
                      $this->load->helper('form');
                      $this->load->view('v_accueil');
                      
                           /* $this->load->model("Model_connexion");
                            $data['lesLogPass'] = $this->Model_connexion->getLoginPass(); 
                            $tab=array();
                            $donne = array_merge($tab,$data['lesLogPass']);
                            print_r($donne);*/
		 }
                else{
                    $this->load->model("Model_connexion");
                    
                            $dataIn = array( 
                            'loginUserV' => $this->input->post('loginUser'),
                            'pwdUserV' => $this->input->post('pwdUser') 
                            ); 
                            //print_r($dataIn); 
                    
                    $lesLogPass =$data['lesLogPass'] = $this->Model_connexion->getLogPass();
                    
                    foreach ($lesLogPass as $lp){
       
                        if($lp->loginUser==$dataIn['loginUserV']&&$lp->pwdUser==$dataIn['pwdUserV']){
                             $this->load->view('v_lesTickets', $this->afficherLesTickets());
                             //echo " + ";
                        }
                        else{
                           // echo " - ";
                            $this->index();
                        }
                     }
                 
                }  
                
        }

        public function afficherLesTickets(){
            $this->load->helper('url');
            $model=$this->load->model("Model_lesTickets");
            $data['lesTickets'] = $this->Model_lesTickets->getLesTickets();
            $this->load->view('v_lesTickets',$data);
        }
    
}