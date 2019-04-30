<?php

    // Dokumentasi Query Builder Laravel : https://laravel.com/docs/5.6/queries

    namespace App\Http\Controllers;

    // Controller
    use App\Http\Controllers\Controller;

    // URL Helper
    use Illuminate\Routing\UrlGenerator;

    // Database Helper
    use Illuminate\Support\Facades\DB;

    // Request Helper
    use Illuminate\Http\Request;
    use App\Http\Requests;

    // Model Classes
    use App\Models\M_member;

    class C_AdminMember extends Controller
    {     
        /**
         * Create a new controller instance.
         *
         * @return void
         */

        public function __construct()
        {   
            //ini guard
            // $this->middleware('auth:userguard');

            // dd(session('memberNIMSessionGlobalPolos'));

            if (session('memberNIMSessionGlobalPolos') != null) {
                dd(session('memberNIMSessionGlobalPolos'));
            } else {
                
                redirect('/');
                
            }
            
        }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */

        public function index(){
            
            if (session('memberNIMSessionGlobalPolos')) {
                $memberNIM = session('memberNIMSessionGlobalPolos');
                $member = M_member::find($memberNIM);

                $memberNama = $member->member_name;
                $memberFoto = $member->member_photo;
                return view('member/member_dashboard', [
                    'memberData' => $member,
                    'memberNama' => $memberNama,
                    'memberFoto' => $memberFoto
                    ] 
                );
            }
            else {
                
                return redirect('/');
            }
            
        }

        // ======================Menu Anggota=============================

        // Menampilkan Tabel Anggota Pada Menu : MENU UTAMA - Anggota
        function getMenuAnggota($parameterMenu){

            // $parameterMenu = session('memberNIMSession');
            $contentTitle = "Biodata Anggota";

            if (session('memberNIMSessionGlobalPolos')) {

                if ($parameterMenu == "lihat" ) {
                
                    $memberNIM = session('memberNIMSessionGlobalPolos');
                    $member = M_member::find($memberNIM);
                    
                    $memberNama = $member->member_name;
                    
                    $memberFoto = $member->member_photo;
                    // dd($member);
                    return view('member/biodata/v_memberBiodata', 
                            [ 
                                'content_title' => $contentTitle,
                                'memberData' => $member,
                                'memberNama' => $memberNama,
                                'memberFoto' => $memberFoto
                            ]);
    
                // Anggota - Edit Data Anggota berdasarkan NIM (Tidak terlihat di MENU UTAMA)
                // Pada Bagan Else ini, nilai : $parameterMenu adalah NIM anggota yang dimasukkan via URL
                } else {
    
                    $memberNIM = session('memberNIMSessionGlobalPolos');
                    $member = M_member::find($memberNIM);
                   
                    $memberNama = $member->member_name;
                    
                    $memberFoto = $member->member_photo;
                    // dd($member);
                    return view('member/biodata/v_memberBiodataEdit', 
                            [ 
                                'content_title' => $contentTitle,
                                'memberData' => $member,
                                'memberNama' => $memberNama,
                                'memberFoto' => $memberFoto
                            ]);
                }

            } else {

               return redirect('/');
                
            }
            

            
        }

        // UPDATE Anggota yang id-nya=$nimAnggota dari Tabel Anggota
        // data2 yang digunakan untuk update di masukkan dalam paramater $request
        function updateAnggota(Request $request, $nimAnggota){
            // dd($request);

            if (session('memberNIMSessionGlobalPolos')) {
                // Jika hasil request Tidak NULL
                if ($request) {
                    // Masukkan data2 ke dalam tb_member
                    // Query : UPDATE FROM tb_member WHERE member_id = <nimAnggota> VALUES (member_id, etc.)
                    $member = M_member::find($nimAnggota);

                    // Data langsung di masukkan ke baris dengan kolom dari method find(), IT'S MAGIC :o
                    // $member->member_id          = $request->form_edit_nim; //kolom member_id tidak boleh diutak-atik, karena merupakan Primary Key
                    $member->member_name        = $request->form_edit_nama;
                    $member->member_angkatan    = $request->form_edit_angkatan;
                    $member->member_prodi       = $request->form_edit_prodi;
                    $member->member_division    = $request->form_edit_divisi;
                    // $member->member_jabatan     = $request->form_edit_jabatan;
                    $member->member_ig          = $request->form_edit_ig;
                    $member->member_fb          = $request->form_edit_fb;
                    $member->member_sosmed3     = $request->form_edit_twitter;
                    $member->member_photo       = $request->form_edit_foto;

                    $member->save();

                    // dd($member);
                    
                    return redirect('/member/biodata/lihat');
                    
                }
            }
            else {
                return redirect('/');
            }
            
        }
       
    } //End-Class C_Admin_Member
    

?>