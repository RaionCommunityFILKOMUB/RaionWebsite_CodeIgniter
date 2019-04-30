<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_portofolio extends CI_Model {

    public function getAllPortofolio($namaTabel){
        $query = 
        'SELECT *
        FROM '.$namaTabel.' P
        WHERE P.portofolio_img_thumb 
        IS NOT NULL';

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
    }

    public function getLimitPortofolio($namaTabel, $limit){
        $query = 
        'SELECT P.portofolio_title, 
        P.portofolio_category, 
        P.portofolio_slug, 
        P.portofolio_img_thumb, 
        P.portofolio_date_start
        FROM '.$namaTabel.' P
        WHERE P.portofolio_img_thumb 
        IS NOT NULL
        ORDER BY P.portofolio_timestamp DESC
        LIMIT '.$limit;

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
    }

    public function getSatuPortofolio($namaTabel, $namaKolomSlug, $slug){
        $query = 
        "SELECT *
        FROM ".$namaTabel." P
        WHERE P.".$namaKolomSlug." = '".$slug."'" ;

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
    }

    public function getPortofolioMembers($slug_parameter){
        $query =
            'SELECT  M.member_name 
            FROM tb_portofolio_member PM
            JOIN tb_portofolio P ON PM.portofolio_id = P.portofolio_id
            JOIN tb_member M ON PM.member_id = M.member_id
            WHERE P.portofolio_slug = "'.$slug_parameter.'"';

        $hasilQuery = $this->db->query($query);

        $hasilQueryArray = $hasilQuery->result_array();

        return $hasilQueryArray;
    }


    public function getPortofolioData($namaTabel, $namaIDPortofolio, $IDPortofolio){
        $query = "SELECT * FROM ".$namaTabel." M WHERE M.".$namaIDPortofolio." = '".$IDPortofolio."'";
        $hasilQuery = $this->db->query($query);
        return $hasilQuery->result_array();
    }

// ---------------------- INSERT --------------------------

    public function insertPortofolio($namaTabel, $data)
    {  
        $this->db->insert($namaTabel, $data);
    }


// ---------------------- DELETE ---------------------------
    public function deletePortofolio($namaTabel, $data)
    {
        $this->db->delete($namaTabel, $data);
    }

// --------------------- UPDATE -----------------------------

    public function updatePortofolioThumbnailAndSS($namaTabel, $namaKolom, $slug, $data){
        $this->db->where($namaKolom, $slug);
        $this->db->update($namaTabel, $data);
        return true;
    }

    public function updatePortofolio($namaTabel, $namaKolomID, $IDPortofolio, $data){
        $this->db->where($namaKolomID, $IDPortofolio);
        $this->db->update($namaTabel, $data);
        return true;
    }

}

/* End of file M_portofolio.php */


?>