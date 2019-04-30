<?php


    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_oprek extends CI_Model {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
        }
        

      public function Register($nama,$nim,$angkatan,
        $alamat,$email,$notelp,
        $idline,$prodi,$divisi,
        $motivasiDivisi,$software,
        $portofolio,$motivasiRaion,
        $foto,$cv,$fokus,$password){
                $this->load->database();
                $data = array(
                    'nama'=>$nama,
                    'nim'=>$nim,
                    'alamat'=>$alamat,
                    'email'=>$email,
                    'telepon'=>$notelp,
                    'id_line'=>$idline,
                    'divisi'=>$divisi,
                    'motivasiDivisi'=>$motivasiDivisi,
                    'angkatan'=>$angkatan,
                    'software'=>$software,
                    'portofolio'=>$portofolio,
                    'motivasiRaion'=>$motivasiRaion,
                    'foto'=>$foto,
                    'cv'=>$cv,
                    'fokus'=>$fokus,
                    'password'=>$password
                );
            $result;
            if($this->db->insert('oprek',$data)){
                $result["hasil"] = "sukses";
                $result["data"]= $data;
                
            }else{
                $result["hasil"] = "fail";
                $result["data"] = $data;
            }
            return $result;
    
    
        }

    public function SetView($data)
    {
        if($data){
            $divisi = $data[0]->divisi;
            $fokus = $data[0]->fokus;
            $angkatan =  $data[0]->angkatan;
                $array = array(
                'user' => $data,
                'angkatan'=>$angkatan,
                'divisi'=>$divisi
            );
            $this->session->set_userdata( $array );
            if( $divisi =='Programmer'){
                if($fokus == "Game"){
                    if($angkatan==2017){
                        $this->load->view('Oprec/TestOnlineRaion/programmer_game_2017');
                    }else if($angkatan == 2018){
                        $this->load->view('Oprec/TestOnlineRaion/programmer_game_2018');
                    }
                }else{
                    if($angkatan == 2017){
                        $this->load->view('Oprec/TestOnlineRaion/programmer_app_2017');
                    }else if( $angkatan == 2018){
                        $this->load->view('Oprec/TestOnlineRaion/programmer_app_2018');
                    }
                }
            }else if($divisi == 'Artist'){
                if($fokus=="Game"){
                    $this->load->view('Oprec/TestOnlineRaion/artist_game');
                }else{
                    $this->load->view('Oprec/TestOnlineRaion/artist_apps');
                }
            }else if($divisi ==  'Designer'){
                    $this->load->view('Oprec/TestOnlineRaion/designer');
            }
        }else{
            echo '<script>alert("nim atau password salah")</script>';
             redirect('oprec/Login', 'refresh');
        }
      
    }
    public function Login($nim,$password){
        $this->db->select("*");
        $this->db->from("oprek");
        $this->db->where("nim",$nim);
        $this->db->where("password",$password);
        $data = $this->db->get()->result();
        $this->SetView($data);
    }

    public function ProgrammerJawab($jawaban)
    {
        $user = $this->session->userdata('user');
        if($user){
            $this->db->insert('jawabanProgrammer',array(
                'idUser'=> $user[0]->id,
                'jawaban'=> $jawaban
            )
            );
        }
    }

  

    public function DesignerJawab(
        $soal1,$soal2,$soal3,
        $soal4,$soal5,$soal6,
        $soal7a="",$soal7b="",
        $soal8a="")
        {
            $this->db->insert("jawabanDesigner",array(
                'idUser'=>$user = $this->session->userdata('user')[0]->id,
                "soal1"=>$soal1,
                "soal2"=>$soal2,
                "soal3"=>$soal3,
                "soal4"=>$soal4,
                "soal5"=>$soal5,
                "soal6"=>$soal6,
                "soal7a"=>$soal7a,
                "soal7b"=>$soal7b,
                "soal8a"=>$soal8a,
            ));
        }
    

    public function ArtistJawab($jawaban)
    {
          $user = $this->session->userdata('user');
        if($user){
            $this->db->insert('jawabanArtist',array(
                'idUser'=> $user[0]->id,
                'jawaban'=> $jawaban
            )
            );
        }
    }

      public function jawabanProgrammer($tabel)
    {
        $this->db->select("oprek.nim,oprek.nama,oprek.divisi,oprek.fokus,$tabel.*");
        $this->db->from("oprek");
        $this->db->join($tabel, "oprek.id = $tabel.idUser");
        $data = $this->db->get()->result_array();
        echo json_encode($data);
        
    }

}
?>