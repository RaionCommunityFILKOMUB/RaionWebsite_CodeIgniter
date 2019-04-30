<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tentang extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        
    }
    

    public function index()
    {
        $header['title_page'] = "Tentang Raion Community";

        $script['nav_menu'] = "tentang";

        $this->load->view('v2_layout/layoutHeader', $header);
        $this->load->view('v2_layout/layoutNavbar');

        $this->load->view('v2_content/v_tentang');

        $this->load->view('v2_layout/layoutFooter');
        $this->load->view('v2_layout/layoutScript', $script);
    }

}

/* End of file C_Tentang.php */


?>