<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function authUser($namaTabel, $nim, $password){
        $_md5_pass = md5(md5($password));
        $query = "SELECT U.name, U.email FROM ".$namaTabel." U WHERE email = '".$nim."' AND  password = '".$_md5_pass."'";
        
        $hasilQuery = $this->db->query($query);
        $hasilQueryArray = $hasilQuery->result_array();
        
        if ($hasilQueryArray) {
            return true;
        } else {
            return false;
        }
        
    }

}


?>