<?php
    
    // defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Oprek extends CI_Controller {
    
       
       public function __construct()
       {
           parent::__construct();
           $this->load->model("M_oprek");
           $this->load->library('upload');
           $this->load->library("session");
           $this->load->helper('url');
       }
       
       public function index()
       {
           $this->load->view("oprec");
       }
      

       /*
        nama
            nim
            angkatan
            alamt di malang
            email
            notelp
            idline
            prodi
            + foto resmi 3*4
            + divisi + alasan memilih divisi
            TAMBAHAN

            -motivasi masuk raion
            -software/framework yg dikuasai (tidak wajib diisi)
            -portofolio/reference (bisa berupa link behance/instagram/deviantart/git) (tidak wajib diisi)
            -CV (.pdf)
        */
        public function Register()
        {
            $nama = $this->input->post("nama");
            $nim = $this->input->post('nim');
            $angkatan = $this->input->post('angkatan');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $telepon = $this->input->post("telp");
            $idLine = $this->input->post("idLine");
            $prodi = $this->input->post('prodi');
            $divisi = $this->input->post('divisi');
            $alasanDivisi = $this->input->post('alsanDivisi');
            $software = $this->input->post('software');
            $portofolio = $this->input->post('portofolio');
            $alasanRaion = $this->input->post("alasanRaion");
            $foto =  $this->uploadImage('foto');
            $cv  = $this->uploadCV('cv');
            $fokus = $this->input->post('fokus');
            $password = $this->input->post('password');
            $input =  $this->M_oprek->Register($nama,$nim,$angkatan,
            $alamat,$email,$telepon,
            $idLine,$prodi,$divisi,
            $alasanDivisi,$software,
            $portofolio,$alasanRaion,
            $foto,$cv,$fokus,$password);

            // echo  json_encode($input);
        
            $this->load->view('terimakasih.php');
        }

        public function uploadImage($key)
            {
                $config['upload_path']          = './images/oprec_photo/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 20048;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload($key))
                {
                        // $error = array('error' => $this->upload->display_errors());
                        echo $this->upload->display_errors();
                }
                else
                {
                        return base_url('')."images/oprec_photo/".$this->upload->data('file_name'); 

                }
            }

        public function uploadCV($key)
        {
                $config['upload_path']          = './images/CV/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 20048;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload($key))
                {
                        // $error = array('error' => $this->upload->display_errors());
                        echo $this->upload->display_errors();
                }
                else
                {
                        return base_url('')."images/CV/".$this->upload->data('file_name'); 

                }
        }

      // view login
      public function ViewLogin()
      {
            $this->load->view("Oprec/TestOnlineRaion/login");
      }

        public function Login(){
            $nim = $this->input->post("nim");
            $password = $this->input->post("password");
            $this->M_oprek->Login($nim,$password);
        }

        public function Jawab()
        {
            $user = $this->session->userdata('angkatan');
            $jawaban = $this->input->post('jawaban');
            $divisi =  $this->session->userdata('divisi');
            
            if($divisi == "Programmer"){
                $this->M_oprek->ProgrammerJawab($jawaban);
            }else if($divisi == "Designer"){
                $this->M_oprek->DesignerJawab(
                $jawaban[0],$jawaban[1],$jawaban[2],
                $jawaban[3],$jawaban[4],$jawaban[5],
                $jawaban[6],$jawaban[7],$jawaban[8]
               );
            }else if($divisi == "Artist"){
                $this->M_oprek->ArtistJawab($jawaban);
            }
            
            $this->session->sess_destroy();
            echo '<script>alert("Terimakaish Sudah Mengisi")</script>';
            redirect('oprec/Login', 'refresh');
        }

        public function getJawabanProgrammer($tabel)
        {
            
            $this->M_oprek->jawabanProgrammer($tabel);
        }

        
    }
    
    /* End of file C_Oprek.php */
    