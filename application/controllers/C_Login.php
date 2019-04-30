<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        
        $this->load->model('M_user');
        $this->load->model('M_admin');
        
        
    }
    
    public function index()
    {
        
    }

    public function loadFormLoginMember(){

        $header['title_page'] = "Login Anggota Raion";

        $this->load->view('v2_layout/layoutHeader', $header);

        $this->load->view('v2_admin/v_login_member');

        $this->load->view('v2_layout/layoutScript');
    }

    public function memberAuth(){
        
        $nim = $this->input->post('_nim_input');
        $password = $this->input->post('_password_input');

        $authResult = $this->M_user->authUser('tb_users', $nim, $password);

        if ($authResult) {
            $_SESSION['memberNIMSessionGlobal'] = $nim;
            $this->session->mark_as_temp('memberNIMSessionGlobal', 600); // Expire in 10 minutes (600s)
            
            redirect('dashboard-member','refresh');
            
        } else {

            redirect('member-login','refresh');

        }
    }

    public function logoutMember(){
        session_destroy();
        
        redirect('/','refresh');
        
    }



    // =================================ADMIN====================================================
    
    
    public function loadFormLoginAdmin(){

        $header['title_page'] = "Login Admin";

        $this->load->view('v2_layout/layoutHeader', $header);

        $this->load->view('v2_admin/v_login_admin');

        $this->load->view('v2_layout/layoutScript');
    }

    public function adminAuth(){
        
        $username = $this->input->post('_nim_input');
        $password = $this->input->post('_password_input');

        $authResult = $this->M_admin->authAdmin('tb_admins', $username, $password);

        if ($authResult) {
            $_SESSION['adminSessionGlobal'] = $username;
            $this->session->mark_as_temp('adminSessionGlobal', 10800); // Expire in 3 hours (10800s)
            
            redirect('dashboard-admin','refresh');
            
        } else {

            redirect('adminrawr','refresh');

        }
    }

}

/* End of file C_MemberAdmin.php */


?>