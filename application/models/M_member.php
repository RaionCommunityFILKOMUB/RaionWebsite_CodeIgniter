<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {
    
    public function getAllMember($namaTabel){
        $query = $this->db->get($namaTabel);
        return $query->result_array();
    }

    public function getKetumWaketum($namaTabel, $namaKolomJabatan){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomJabatan." LIKE 'Ketua Umum' 
        OR 
        M.".$namaKolomJabatan." LIKE 'Wakil Ketua Umum' 
        LIMIT 2";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;

    }

    public function getSekertarisBendahara($namaTabel, $namaKolomJabatan){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomJabatan." LIKE 'Administrasi' 
        OR 
        M.".$namaKolomJabatan." LIKE 'Bendahara' 
        LIMIT 2";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
        
    }

    public function getKadivFungsional($namaTabel, $namaKolomJabatan){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomJabatan." LIKE 'Kadiv Designer' 
        OR 
        M.".$namaKolomJabatan." LIKE 'Kadiv Artist'
        OR
        M.".$namaKolomJabatan." LIKE 'Kadiv Programmer' 
        LIMIT 3";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
        
    }

    public function getKadivNonFungsional($namaTabel, $namaKolomJabatan){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomJabatan." LIKE 'Kadiv Marketing' 
        OR 
        M.".$namaKolomJabatan." LIKE 'Kadiv Eksternal' 
        OR 
        M.".$namaKolomJabatan." LIKE 'Kadiv Pengawasan' 
        OR 
        M.".$namaKolomJabatan." LIKE 'Kadiv Produksi' 
        LIMIT 4";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
        
    }

    public function getAnggotaDesainer($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomDivisi." LIKE 'Designer' 
        AND M.".$namaKolomJabatan." IS NULL";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
        
    }

    public function getAnggotaArtist($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomDivisi." LIKE 'Artist' 
        AND M.".$namaKolomJabatan." IS NULL";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
        
    }

    public function getAnggotaProgrammer($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        
        $query = 
        "SELECT * FROM ".$namaTabel." M 
        WHERE 
        M.".$namaKolomDivisi." LIKE 'Programmer' 
        AND M.".$namaKolomJabatan." IS NULL";

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
        
    }

    public function getMemberData($namaTabel, $namaKolomNIM, $nimAnggota){

        $query = "SELECT * FROM ".$namaTabel." M WHERE M.".$namaKolomNIM." = '".$nimAnggota."'";
        $hasilQuery = $this->db->query($query);
        $hasilQueryRow = $hasilQuery->row();
        return $hasilQueryRow;

    }

    public function getMemberDataArray($namaTabel, $namaKolomNIM, $nimAnggota){

        $query = "SELECT * FROM ".$namaTabel." M WHERE M.".$namaKolomNIM." = '".$nimAnggota."'";
        $hasilQuery = $this->db->query($query);
        $hasilQueryArray = $hasilQuery->result_array();
        return $hasilQueryArray;

    }

//------------------ UPDATE ---------------------------

    public function updateBiodataMember($namaTabel, $namaKolomNIM, $nimAnggota, $data){
        $this->db->where($namaKolomNIM, $nimAnggota);
        $this->db->update($namaTabel, $data);
        return true;
    }

    public function updatePasswordMember($namaTabel, $namaKolomNIM, $nimAnggota, $namaKolomPassword, $passwordBaru){
        
        $_md5_pass = md5(md5($passwordBaru));

        $query = "UPDATE ".$namaTabel." M SET M.".$namaKolomPassword."='".$_md5_pass."' WHERE M.".$namaKolomNIM."='".$nimAnggota."'";
        $hasilQuery = $this->db->query($query);

        return true;
    }

    public function updateMemberPhoto($namaTabel, $namaKolomNIM, $nimAnggota, $data){
        $this->db->where($namaKolomNIM, $nimAnggota);
        $this->db->update($namaTabel, $data);
        return true;
    }


// ---------------------- INSERT --------------------------

    public function insertMember($namaTabel, $data)
    {  
        $this->db->insert($namaTabel, $data);
    }


// ---------------------- DELETE ---------------------------
    public function deleteMember($namaTabel, $data)
    {
        $this->db->delete($namaTabel, $data);
    }

}

/* End of file M_member.php */


?>