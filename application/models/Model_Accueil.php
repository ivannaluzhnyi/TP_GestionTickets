<?php

class Model_Accueil extends CI_Model{
    public function getLoginAndPass(){
    $sql = $this->db->query("select * from  ");
       
       return $sql->result();
}
}