<?php

class Model_connexion extends CI_Model{

    public function getLogin(){
        $sql = $this->db->query("select loginUser from users");
           $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
    
    public function getPass(){
        $sql = $this->db->query("select pwdUser from users");
           $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
    
    public function getLogPass(){
        $sql = $this->db->query("select loginUser, pwdUser from users");
           $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
}