<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class C_Portofolio extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_portofolio');
        
    }
    

    public function index()
    {
        $header['title_page'] = "Portofolio Raion Community";

        $script['nav_menu'] = "portofolio";

        $this->load->view('v2_layout/layoutHeader', $header);
        $this->load->view('v2_layout/layoutNavbar');

        $content['portofolios'] = $this->getLimitPortofolio('tb_portofolio', 9);
        $this->load->view('v2_content/v_portofolio', $content);

        $this->load->view('v2_layout/layoutFooter');
        $this->load->view('v2_layout/layoutScript', $script);

    }

    public function getLimitPortofolio($namaTabel, $limit){
        
        $dataAllPortofolio = $this->M_portofolio->getLimitPortofolio($namaTabel, $limit);
        
        return $dataAllPortofolio;
    }

    public function getAllPortofolio($namaTabel){
        
        $dataAllPortofolio = $this->M_portofolio->getAllPortofolio($namaTabel);
        
        return $dataAllPortofolio;
    }

    public function getSatuPortofolio($slug){
        
        $dataSatuPortofolio = $this->M_portofolio->getSatuPortofolio('tb_portofolio', 'portofolio_slug', $slug);
        
        return $dataSatuPortofolio;
    }

    public function loadDetailPortofolio($slug){

        $script['nav_menu'] = "portofolio";
        
        $content['portofolio'] = $this->getSatuPortofolio($slug);
        
        foreach ($content['portofolio'] as $portofolio) {
            $title_page = $portofolio['portofolio_title'];
        }
        $header['title_page'] = $title_page;

        $this->load->view('v2_layout/layoutHeader', $header);
        $this->load->view('v2_layout/layoutNavbar');
        
        $this->load->view('v2_content/v_portofolio_detail', $content);

        $this->load->view('v2_layout/layoutFooter');
        $this->load->view('v2_layout/layoutScript', $script);
    }

}

/* End of file Controllername.php */


?>