<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class C_Anggota extends CI_Controller {

    private $namaTabel;
    private $namaKolomJabatan;

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('M_member');
    }
    

    public function index()
    {
        $header['title_page'] = "Anggota Raion Community";

        $script['nav_menu'] = "anggota";

        $this->load->view('v2_layout/layoutHeader', $header);
        $this->load->view('v2_layout/layoutNavbar');

        $namaTabel = "tb_member";
        $namaKolomJabatan = "member_jabatan";
        $namaKolomDivisi = "member_division";
        $content['data_ketum_waketum']          = $this->getKetumWaketum($namaTabel, $namaKolomJabatan);
        $content['data_sekertaris_bendahara']   = $this->getSekertarisBendahara($namaTabel, $namaKolomJabatan);
        $content['data_kadiv_fungsional']       = $this->getKadivFungsional($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        $content['data_kadiv_non_fungsional']   = $this->getKadivNonFungsional($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        $content['data_desainer']               = $this->getAnggotaDesainer($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        $content['data_artist']                 = $this->getAnggotaArtist($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        $content['data_programmer']             = $this->getAnggotaProgrammer($namaTabel, $namaKolomJabatan, $namaKolomDivisi);

        $this->load->view('v2_content/v_anggota', $content);

        $this->load->view('v2_layout/layoutFooter');
        $this->load->view('v2_layout/layoutScript', $script);
    }

    public function getKetumWaketum($namaTabel, $namaKolomJabatan){
        $dataKetumWaketum = $this->M_member->getKetumWaketum($namaTabel, $namaKolomJabatan);
        return $dataKetumWaketum;
    }

    public function getSekertarisBendahara($namaTabel, $namaKolomJabatan){
        $dataSekertarisBendahara = $this->M_member->getSekertarisBendahara($namaTabel, $namaKolomJabatan);
        return $dataSekertarisBendahara;
    }

    public function getKadivFungsional($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        $dataKadivFungsional = $this->M_member->getKadivFungsional($namaTabel, $namaKolomJabatan);
        return $dataKadivFungsional;
    }

    public function getKadivNonFungsional($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        $dataKadivNonFungsional = $this->M_member->getKadivNonFungsional($namaTabel, $namaKolomJabatan);
        return $dataKadivNonFungsional;
    }

    public function getAnggotaDesainer($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        $dataAnggotaDesainer = $this->M_member->getAnggotaDesainer($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        return $dataAnggotaDesainer;
    }

    public function getAnggotaArtist($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        $dataAnggotaArtist = $this->M_member->getAnggotaArtist($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        return $dataAnggotaArtist;
    }

    public function getAnggotaProgrammer($namaTabel, $namaKolomJabatan, $namaKolomDivisi){
        $dataAnggotaProgrammer = $this->M_member->getAnggotaProgrammer($namaTabel, $namaKolomJabatan, $namaKolomDivisi);
        return $dataAnggotaProgrammer;
    }

}

/* End of file C_Anggota.php */
?>