<?php

class Model_connexion extends CI_Model{

    public function getLoginPass(){
        $sql = $this->db->query("select loginUser,pwdUser from users");
           $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
}