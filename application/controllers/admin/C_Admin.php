<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('session');
        $this->load->helper(array('form', 'url'));

        $this->load->model('M_member');
        $this->load->model('M_portofolio');
        
        
        
        if(isset($_SESSION['adminSessionGlobal'])){

        }else {
            session_destroy();
            redirect('/','refresh');
        }
    }
    

    public function index()
    {
        
    }

    public function loadAdminDashboard(){
        $header['title_page'] = "Admin Raion";

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_admin/v_admin_dashboard');
        $this->load->view('v2_layout/layoutAdminScript');
    }

    // ======================== ANGGOTA ====================================

    public function addAnggota(){

        $header['title_page']   = "Tambah Anggota";

        $data['content_title']  = "Tambah Anggota";
        $data['content_view']   = $this->load->view('v2_admin/admin_content/anggota/v_tambah_anggota', $data, TRUE);

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_layout/layoutAdminScript');
        $this->load->view('v2_admin/v_admin_dashboard', $data);
    }

    public function submitAddAnggota(){
        $nimAnggota = $this->input->post('form_tambah_id');
        $postArray = array(
            'member_id'         => $this->input->post('form_tambah_id'),
            'member_name'       => $this->input->post('form_tambah_nama'),
            'member_angkatan'   => $this->input->post('form_tambah_angkatan'),
            'member_prodi'      => $this->input->post('form_tambah_prodi'),
            'member_division'   => $this->input->post('form_tambah_divisi'),
            'member_jabatan'    => $this->input->post('form_tambah_jabatan'),
            'member_ig'         => $this->input->post('form_tambah_ig'),
            'member_fb'         => $this->input->post('form_tambah_fb'),
            'member_sosmed3'    => $this->input->post('form_tambah_twitter'),
            'member_email'      => $this->input->post('form_tambah_email')
        );

        $this->M_member->insertMember('tb_member', $postArray);

        //Upload Foto
        if (!empty($_FILES['form_tambah_foto']['name']))
        {
            $config['upload_path']    = './images/member_photo';
            $config['allowed_types']  = 'jpg|png|gif';
            $config['max_size']       = 1000; //KB
            $config['max_width']      = 2000; //px
            $config['max_height']     = 2000; //px
            $config['overwrite']      = TRUE; //overwrite file lama
            $config['file_name']      = "profile_".$nimAnggota;

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('form_tambah_foto')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_tambah_foto']['name'], -4);
                $namaFilePhoto = "profile_".$nimAnggota.$file_type;

                $photoDataArray = array(
                    'member_photo'  => $namaFilePhoto
                );

                $this->M_member->updateMemberPhoto('tb_member', 'member_id', $nimAnggota, $photoDataArray);

                // $this->errorHandling("berhasil");
                
            }

        }
    }

    public function loadAllAnggota(){

            $header['title_page']   = "Anggota Aktif";

            $data['content_title']  = "Anggota Aktif";
            $data['members']        = $this->M_member->getAllMember('tb_member');
            $data['content_view']   = $this->load->view('v2_admin/admin_content/anggota/v_anggota_aktif', $data, TRUE);

            $this->load->view('v2_layout/layoutAdminHeader', $header);
            $this->load->view('v2_layout/layoutAdminScript');
            $this->load->view('v2_admin/v_admin_dashboard', $data);
    }

    public function loadEditAnggota($nimAnggota){
        $header['title_page']   = "Edit Anggota";

        $data['content_title']  = "Edit ".$nimAnggota."" ;
        $data['members']        = $this->M_member->getMemberDataArray('tb_member', 'member_id', $nimAnggota);
        $data['content_view']   = $this->load->view('v2_admin/admin_content/anggota/v_edit_anggota', $data, TRUE);

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_layout/layoutAdminScript');
        $this->load->view('v2_admin/v_admin_dashboard', $data);
    }

    public function submitUpdateBiodataAnggota($nimAnggota){
        
        $postArray = array(
            'member_name'       => $this->input->post('form_edit_nama'),
            'member_angkatan'   => $this->input->post('form_edit_angkatan'),
            'member_prodi'      => $this->input->post('form_edit_prodi'),
            'member_division'   => $this->input->post('form_edit_divisi'),
            'member_jabatan'    => $this->input->post('form_edit_jabatan'),
            'member_ig'         => $this->input->post('form_edit_ig'),
            'member_fb'         => $this->input->post('form_edit_fb'),
            'member_sosmed3'    => $this->input->post('form_edit_twitter'),
            'member_email'      => $this->input->post('form_edit_email')
        );
        $this->M_member->updateBiodataMember('tb_member', 'member_id', $nimAnggota, $postArray);

        if (!empty($_FILES['form_edit_foto']['name']))
        {
            $config['upload_path']    = './images/member_photo';
            $config['allowed_types']  = 'jpg|png|gif';
            $config['max_size']       = 1000; //KB
            $config['max_width']      = 2000; //px
            $config['max_height']     = 2000; //px
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
                
            }
        }
        $this->errorHandling('berhasil'); 
    }

    public function deleteAnggota($nimAnggota)
    {
        $data = array(
            'member_id'  => $nimAnggota
        );
        $this->M_member->deleteMember('tb_member', $data);
        $this->loadAllAnggota();
    }


    // ======================== END ANGGOTA ====================================


    // ======================== PORTOFOLIO ====================================

    public function addPortofolio(){

        $header['title_page']   = "Tambah Portofolio";

        $data['content_title']  = "Tambah Portofolio";
        $data['content_view']   = $this->load->view('v2_admin/admin_content/portofolio/v_tambah_portofolio', $data, TRUE);

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_layout/layoutAdminScript');
        $this->load->view('v2_admin/v_admin_dashboard', $data);
    }

    public function submitAddPortofolio()
    {

        $post_slug = slug($this->input->post('form_tambah_judul'));

        $postArray = array(
            'portofolio_id'             => md5($this->input->post('form_tambah_judul')),
            'portofolio_title'          => $this->input->post('form_tambah_judul'),
            'portofolio_date_start'     => $this->input->post('form_tambah_datestart'),
            'portofolio_date_end'       => $this->input->post('form_tambah_dateend'),
            'portofolio_description'    => $this->input->post('form_tambah_deskripsi'),
            'portofolio_category'       => $this->input->post('form_tambah_kategori'),
            'portofolio_slug'           => $post_slug           
        );

        $this->M_portofolio->insertPortofolio('tb_portofolio', $postArray);
        
        //Upload Thumbnail
        if (!empty($_FILES['form_tambah_thumbnail']['name']))
        {
            $configThumb['upload_path']    = './images/portofolio_img_thumb';
            $configThumb['allowed_types']  = 'jpg|png|gif';
            $configThumb['max_size']       = 2000; //KB
            $configThumb['max_width']      = 3000; //px
            $configThumb['max_height']     = 3000; //px
            $configThumb['overwrite']      = TRUE; //overwrite file lama
            $configThumb['file_name']      = "thumb_".$post_slug;

            $this->load->library('upload', $configThumb);
            
            if ( ! $this->upload->do_upload('form_tambah_thumbnail')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_tambah_thumbnail']['name'], -4);
                $namaFilePhoto = "thumb_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_thumb'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
                
            }

        }
            
        // Upload SS1
        if (!empty($_FILES['form_tambah_ss1']['name']))
        {
            $configSS1['upload_path']    = './images/portofolio_img_thumb';
            $configSS1['allowed_types']  = 'jpg|png|gif';
            $configSS1['max_size']       = 1000; //KB
            $configSS1['max_width']      = 2000; //px
            $configSS1['max_height']     = 2000; //px
            $configSS1['overwrite']      = TRUE; //overwrite file lama
            $configSS1['file_name']      = "ss1_".$post_slug;

            $this->load->library('upload', $configSS1);
            $this->upload->initialize($configSS1);
            
            if ( ! $this->upload->do_upload('form_tambah_ss1')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_tambah_ss1']['name'], -4);
                $namaFilePhoto = "ss1_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_ss1'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
            }
        }

        if (!empty($_FILES['form_tambah_ss2']['name']))
        {   
            $configSS2['upload_path']    = './images/portofolio_img_thumb';
            $configSS2['allowed_types']  = 'jpg|png|gif';
            $configSS2['max_size']       = 1000; //KB
            $configSS2['max_width']      = 2000; //px
            $configSS2['max_height']     = 2000; //px
            $configSS2['overwrite']      = TRUE; //overwrite file lama
            $configSS2['file_name']      = "ss2_".$post_slug;

            $this->load->library('upload', $configSS2);
            $this->upload->initialize($configSS2);
            
            if ( ! $this->upload->do_upload('form_tambah_ss2')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_tambah_ss2']['name'], -4);
                $namaFilePhoto = "ss2_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_ss2'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
            }
        }

        if (!empty($_FILES['form_tambah_ss3']['name']))
        {   
            $configSS3['upload_path']    = './images/portofolio_img_thumb';
            $configSS3['allowed_types']  = 'jpg|png|gif';
            $configSS3['max_size']       = 1000; //KB
            $configSS3['max_width']      = 2000; //px
            $configSS3['max_height']     = 2000; //px
            $configSS3['overwrite']      = TRUE; //overwrite file lama
            $configSS3['file_name']      = "ss3_".$post_slug;

            $this->load->library('upload', $configSS3);
            $this->upload->initialize($configSS3);
            
            if ( ! $this->upload->do_upload('form_tambah_ss3')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_tambah_ss3']['name'], -4);
                $namaFilePhoto = "ss3_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_ss3'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
                
            }
        }

    }

    public function loadPortofolio()
    {

        $header['title_page']   = "Portofolio";

        $data['content_title']  = "Portofolio";
        $data['portofolios']    = $this->M_portofolio->getAllPortofolio('tb_portofolio');
        $data['content_view']   = $this->load->view('v2_admin/admin_content/portofolio/v_portofolio_produk', $data, TRUE);

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_layout/layoutAdminScript');
        $this->load->view('v2_admin/v_admin_dashboard', $data);
    }

    public function loadEditPortofolio($idPortofolio)
    {
        $header['title_page']   = "Edit Portoflio";

        $data['content_title']  = "Edit ".$idPortofolio."" ;
        $data['portofolios']    = $this->M_portofolio->getPortofolioData('tb_portofolio', 'portofolio_id', $idPortofolio);
        $data['content_view']   = $this->load->view('v2_admin/admin_content/portofolio/v_edit_portofolio', $data, TRUE);

        $this->load->view('v2_layout/layoutAdminHeader', $header);
        $this->load->view('v2_layout/layoutAdminScript');
        $this->load->view('v2_admin/v_admin_dashboard', $data);
    }

    public function submitEditPortofolio($idPortofolio)
    {

        $portofolioID = $this->input->post('form_edit_id');
        $post_slug    = slug($this->input->post('form_edit_judul'));

        $postArray = array(
            'portofolio_id'             => md5($this->input->post('form_edit_judul')),
            'portofolio_title'          => $this->input->post('form_edit_judul'),
            'portofolio_date_start'     => $this->input->post('form_edit_datestart'),
            'portofolio_date_end'       => $this->input->post('form_edit_dateend'),
            'portofolio_description'    => $this->input->post('form_edit_deskripsi'),
            'portofolio_category'       => $this->input->post('form_edit_kategori'),
            'portofolio_slug'           => $post_slug          
        );
        
        $this->M_portofolio->updatePortofolio('tb_portofolio', 'portofolio_id', $idPortofolio, $postArray);
        // $this->errorHandling('berhasil');

        //Upload Thumbnail
        if (!empty($_FILES['form_edit_thumbnail']['name']))
        {
            $configThumb['upload_path']    = './images/portofolio_img_thumb';
            $configThumb['allowed_types']  = 'jpg|png|gif';
            $configThumb['max_size']       = 2000; //KB
            $configThumb['max_width']      = 3000; //px
            $configThumb['max_height']     = 3000; //px
            $configThumb['overwrite']      = TRUE; //overwrite file lama
            $configThumb['file_name']      = "thumb_".$post_slug;

            $this->load->library('upload', $configThumb);
            
            if ( ! $this->upload->do_upload('form_edit_thumbnail')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_edit_thumbnail']['name'], -4);
                $namaFilePhoto = "thumb_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_thumb'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
                
            }

        }
            
        // Upload SS1
        if (!empty($_FILES['form_edit_ss1']['name']))
        {
            $configSS1['upload_path']    = './images/portofolio_img_thumb';
            $configSS1['allowed_types']  = 'jpg|png|gif';
            $configSS1['max_size']       = 1000; //KB
            $configSS1['max_width']      = 2000; //px
            $configSS1['max_height']     = 2000; //px
            $configSS1['overwrite']      = TRUE; //overwrite file lama
            $configSS1['file_name']      = "ss1_".$post_slug;

            $this->load->library('upload', $configSS1);
            $this->upload->initialize($configSS1);
            
            if ( ! $this->upload->do_upload('form_edit_ss1')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_edit_ss1']['name'], -4);
                $namaFilePhoto = "ss1_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_ss1'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
            }
        }

        // Upload SS2
        if (!empty($_FILES['form_edit_ss2']['name']))
        {   
            $configSS2['upload_path']    = './images/portofolio_img_thumb';
            $configSS2['allowed_types']  = 'jpg|png|gif';
            $configSS2['max_size']       = 1000; //KB
            $configSS2['max_width']      = 2000; //px
            $configSS2['max_height']     = 2000; //px
            $configSS2['overwrite']      = TRUE; //overwrite file lama
            $configSS2['file_name']      = "ss2_".$post_slug;

            $this->load->library('upload', $configSS2);
            $this->upload->initialize($configSS2);
            
            if ( ! $this->upload->do_upload('form_edit_ss2')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_edit_ss2']['name'], -4);
                $namaFilePhoto = "ss2_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_ss2'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
            }
        }

        // Upload SS3
        if (!empty($_FILES['form_edit_ss3']['name']))
        {   
            $configSS3['upload_path']    = './images/portofolio_img_thumb';
            $configSS3['allowed_types']  = 'jpg|png|gif';
            $configSS3['max_size']       = 1000; //KB
            $configSS3['max_width']      = 2000; //px
            $configSS3['max_height']     = 2000; //px
            $configSS3['overwrite']      = TRUE; //overwrite file lama
            $configSS3['file_name']      = "ss3_".$post_slug;

            $this->load->library('upload', $configSS3);
            $this->upload->initialize($configSS3);
            
            if ( ! $this->upload->do_upload('form_edit_ss3')) {
                $error = array('error' => $this->upload->display_errors());
                $namaFilePhoto = "";

                // $this->errorHandling("gagalUploadFoto");

            } else {

                $upload_data = array('upload_data' => $this->upload->data());
                $file_type = substr($_FILES['form_edit_ss3']['name'], -4);
                $namaFilePhoto = "ss3_".$post_slug.$file_type;

                $photoDataArray = array(
                    'portofolio_img_ss3'  => $namaFilePhoto
                );

                $this->M_portofolio->updatePortofolioThumbnailAndSS('tb_portofolio', 'portofolio_slug', $post_slug, $photoDataArray);

                // $this->errorHandling("berhasil");
                
            }
        }

        $this->loadPortofolio();
    }

    public function deletePortofolio($idPortofolio)
    {
        $data = array(
            'portofolio_id'  => $idPortofolio
        );
        $this->M_portofolio->deletePortofolio('tb_portofolio', $data);
        $this->loadPortofolio();
    }

    // ======================== END PORTOFOLIO ====================================

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
            $data['ok_button_url']      = "admin/anggota/anggota_aktif";
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

/* End of file C_Admin.php */

?>