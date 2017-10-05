<?php

class Ctrl_GestionTickets extends CI_Controller{
        public function __construct() {
        parent::__construct();
        }
    
        public function index()
	{
            $this->load->helper('url');
            $this->load->helper('form');
           /* $data = array(
            'loginUser' => $this->input->post('loginUser'),
            'pwdUser' => $this->input->post('pwdUser')
            );*/
   
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
                    /*$data['lesLogins'] = $this->Model_connexion->getLogin();
                    $data['lesPass'] = $this->Model_connexion->getPass();
                    print_r($data);*/
                    
                            $dataIn = array( 
                            'loginUserV' => $this->input->post('loginUser'),
                            'pwdUserV' => $this->input->post('pwdUser') 
                            ); 
                            print_r($dataIn); 
                    
                    $lesLogPass =$data['lesLogPass'] = $this->Model_connexion->getLogPass();
                   // print_r($lesLogPass);
                    $tab1=array();
                    $tab=array();
                 // $donne = array_merge($tab1,$data['lesLogPass']);
                 // $donne1 = array_merge($tab,$donne['stdClass Object']);
                  
                 // print_r($donne1);
                //  print_r($donne);
                  
                    foreach ($lesLogPass as $lp){
                        $lp->loginUser;
                        $lp->pwdUser;
                        $donne = array_merge($tab,$lp);
                        print_r($lp);
                    }
                    print_r($donne);
                   
                       /* if($lesLogPass->loginUser==$dataIn['loginUserV']&&$lesLogPass->pwdUser==$dataIn['pwdUserV']){
                             $this->load->view('v_lesTickets', $this->afficherLesTickets());
                             echo "JooooooooooooooooooooooPPPPPP";
                        }
                        else{
                            echo "JJJJJJJJJJJSSSSSSSSSPPPPPPPPPPP";
                            $this->load->helper('url');
                            //$this->load->helper('form');
                            $this->load->view("v_accueil");
                        }*/
                }
                        
                     
                    
                   
                    
                    
                    
                   /* 
                    $tab=array();
                    $tab1=array();
                    $donne = array_merge($tab,$data['lesLogPass']);
                    foreach ($donne as $key => $value){
                         print_r($key);
                         print_r($value);
                           /* foreach ($d as $key => $value){
                               //print_r($value);
                                print_r($key);
                        }*/
                            
                        
                        //$donne1 = array_merge($tab1,$d['stdClass Object']);
                       // print_r($donne1);
                    
                    //print_r($donne);

                 //   $this->load->view('v_lesTickets', $this->afficherLesTickets());//$data);
                
}

        public function afficherLesTickets(){
            $this->load->helper('url');
            $model=$this->load->model("Model_lesTickets");
            $data['lesTickets'] = $this->Model_lesTickets->getLesTickets();
            $this->load->view('v_lesTickets',$data);
        }
    
}