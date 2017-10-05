<?php
class Model_lesTickets extends CI_Model{
    public function getLesTickets(){
        $sql = $this->db->query("select * from tickets");
           $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
}
}