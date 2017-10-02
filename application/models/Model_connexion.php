<?php

class Model_connexion extends CI_Model{

    public function getLoginPass(){
    $sql = $this->db->query("select loginUser,pwdUser from users");
       return $sql->result();
    }
}