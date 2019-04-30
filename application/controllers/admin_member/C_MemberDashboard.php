<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class C_MemberDashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));

        $this->load->model('M_member');
        
        
        if(isset($_SESSION['memberNIMSessionGlobal'])){

        }else {
            session_destroy();
            redirect('member-login','refresh');
        }
    }
    

    public function index()
    {
        //Sengaja Dikosongkan supaya tidak ada View yg di load ketika method pertama kali dipanggil
    }


    public function loadMemberDashboard(){
    
        $header['title_page'] = "Member Raion";
        
        $namaTabel = "tb_member";
        $namaKolomNIM = "member_id";
        $nimAnggota = $this->session->userdata('memberNIMSessionGlobal');

        $data['data_member'] = $this->getMemberData($namaTabel, $namaKolomNIM, $nimAnggota);
        $data['session_nim'] = $nimAnggota;

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_admin/v_dashboard_member', $data);
        $this->load->view('v2_layout/layoutAdminScript');

    }

    public function loadMemberDashboardLihatBiodata(){
    
        $header['title_page'] = "Member Raion";

        $namaTabel = "tb_member";
        $namaKolomNIM = "member_id";
        $nimAnggota = $this->session->userdata('memberNIMSessionGlobal');
        $data['data_member'] = $this->getMemberData($namaTabel, $namaKolomNIM, $nimAnggota);
        $data['session_nim'] = $nimAnggota;

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_admin/v_dashboard_member_biodata', $data);
        $this->load->view('v2_layout/layoutAdminScript');

    }

    public function loadMemberDashboardEditBiodata(){
    
        $header['title_page'] = "Member Raion";

        $namaTabel = "tb_member";
        $namaKolomNIM = "member_id";
        $nimAnggota = $this->session->userdata('memberNIMSessionGlobal');

        $data['data_member'] = $this->getMemberData($namaTabel, $namaKolomNIM, $nimAnggota);
        $data['session_nim'] = $nimAnggota;
        
        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_admin/v_dashboard_member_biodata_edit', $data);
        $this->load->view('v2_layout/layoutAdminScript');

    }

    public function getMemberData($namaTabel, $namaKolomNIM, $nimAnggota){
        $dataMember = $this->M_member->getMemberData($namaTabel, $namaKolomNIM, $nimAnggota); 
        return $dataMember;
    }

    public function updateBiodataMember($nimAnggota){

        if (!empty($_FILES['form_edit_foto']['name']))
        {
            $config['upload_path']    = './images/member_photo';
            $config['allowed_types']  = 'jpg|png|gif';
            $config['max_size']       = 1000; //KB
            $config['max_width']      = 800; //px
            $config['max_height']     = 800; //px
            $config['overwrite']      = TRUE; //overwrite file lama
            $config['file_name']      = "profile_".$nimAnggota;

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('form_edit_foto')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_edit_foto']['name'], -4);
                $namaFilePhoto = "profile_".$nimAnggota.$file_type;

                $photoDataArray = array(
                    'member_photo'  => $namaFilePhoto
                );
                $this->M_member->updateMemberPhoto('tb_member', 'member_id', $nimAnggota, $photoDataArray);

                $this->errorHandling("berhasil");
                
            }

        }
            
        $postArray = array(
            'member_name'       => $this->input->post('form_edit_nama'),
            'member_angkatan'   => $this->input->post('form_edit_angkatan'),
            'member_prodi'      => $this->input->post('form_edit_prodi'),
            'member_division'   => $this->input->post('form_edit_divisi'),
            'member_ig'         => $this->input->post('form_edit_ig'),
            'member_fb'         => $this->input->post('form_edit_fb'),
            'member_sosmed3'    => $this->input->post('form_edit_twitter'),
            'member_email'      => $this->input->post('form_edit_email')
            // 'member_photo'      => $namaFilePhoto
        );
        $this->M_member->updateBiodataMember('tb_member', 'member_id', $nimAnggota, $postArray);

        if ($this->input->post('form_edit_password') != "") {
            $passwordBaru = $this->input->post('form_edit_password');
            $this->M_member->updatePasswordMember('tb_users', 'email', $nimAnggota, 'password', $passwordBaru);
        }

        // redirect('member/lihat-biodata','refresh');
        
    }

    public function errorHandling($errorType){

        if ($errorType == "gagalUploadFoto") {
            
            $message = 
            "Gagal Upload Foto Profil, 
            <br>
            Pastikan : 
            <li> <b>Format</b> Foto .JPG .PNG atau .GIF </li>
            <li> <b>Besar File</b> Max 1 MB </li>
            <li> <b>Ukuran Foto</b> Max 800px * 800px </li>";

            $data['messages']           = $message;
            $data['ok_button_url']      = "member/edit-biodata";
            $data['cancel_button_url']  = "member/lihat-biodata";
            $data['ok_button_msg']      = "Edit Biodata";
            $data['cancel_button_msg']  = "Batal";
            
            $header['title_page'] = "ERROR";
            $header['title_msg'] = "ERROR";

            $this->load->view('v2_layout/layoutHeader', $header);

            $this->load->view('v2_admin/v_messages', $data);

            $this->load->view('v2_layout/layoutScript');

        } else if($errorType == "berhasil") {

            $message = 
            "<b>Berhasil</b> memperbarui Biodata";

            $data['messages']           = $message;
            $data['ok_button_url']      = "member/lihat-biodata";
            $data['cancel_button_url']  = "#";
            $data['ok_button_msg']      = "OK";
            $data['cancel_button_msg']  = "";
            
            $header['title_page'] = "Messages";
            $header['title_msg'] = "Sukses";

            $this->load->view('v2_layout/layoutHeader', $header);

            $this->load->view('v2_admin/v_messages', $data);

            $this->load->view('v2_layout/layoutScript');

        }
        
    }

}

/* End of file C_MemberDashboard.php */

?>