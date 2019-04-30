<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Main extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    public function index(){

        $header['title_page'] = "Beranda Raion Community";
        
        $script['nav_menu'] = "index";

        $this->load->view('v2_layout/layoutHeader', $header);
        $this->load->view('v2_layout/layoutNavbar');

        $this->load->view('v2_content/v_beranda');

        $this->load->view('v2_layout/layoutFooter');
        $this->load->view('v2_layout/layoutScript', $script);
    }
    
}



?>