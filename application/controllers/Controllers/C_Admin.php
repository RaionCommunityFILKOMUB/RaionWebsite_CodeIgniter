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
    use App\Models\M_portofolio;
    use App\Models\M_portofolio_member;
    use App\Models\M_proker;


    class C_Admin extends Controller
    {     
        /**
         * Create a new controller instance.
         *
         * @return void
         */

        public function __construct()
        {   
            //ini guard
            $this->middleware('auth:adminguard');
        }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */

        public function index(){

            $contentTitle = 'Admin Raion';
        
            // Method dd() digunakan untuk debugging, menampilkan hasil query Database, 
            // method dd() akan mencegah baris kode di bawah method tersebut untuk dieksekusi, dan
            // menampilkan hasil query
            // dd($result);
            // dibawah ini method dd() tidak akan dieksekusi

            // return view('admin/dashboard', ['title' => $judul, 'members' => $result ] );
            return view('admin/admin_dashboard', ['content-title' => $contentTitle ] );
            
        }

        // ======================Menu Anggota=============================

        // Menampilkan Tabel Anggota Pada Menu : MENU UTAMA - Anggota
        function getMenuAnggota($parameterMenu){

            // MENU UTAMA - Anggota - Anggota Aktif
            if ($parameterMenu == 'anggota_aktif') {

                $contentTitle = "Anggota Aktif";
                
                $menuSubmenu = "anggota_aktif";

                // Query : SELECT * FROM 'tb_member'
                $selectQuery = DB::table('tb_member')->get();
                // dd($hasilQuery);
                
                return view('admin/anggota/v_anggota', 
                        [ 
                            'anggotas' => $selectQuery ,
                            'menu_submenu' => $menuSubmenu,
                            'content_title' => $contentTitle
                        ]);
            
            // MENU UTAMA - Anggota - Pengurus
            } elseif ($parameterMenu == 'anggota_pengurus') {

                $contentTitle = "Pengurus";
                // Query : SELECT * FROM 'tb_member' WHERE 'member_nonfcdivision' != "" 
                $selectQuery = DB::table('tb_member')
                                ->where('member_jabatan', '!=' , '')
                                ->get();
                // dd($hasilQuery);

                return view('admin/anggota/v_anggota', 
                        [ 
                            'anggotas' => $selectQuery ,
                            'content_title' => $contentTitle
                        ]);
            
            // Anggota - Edit Data Anggota maupun Tambah Anggota Baru (Tidak terlihat di MENU UTAMA)
            } elseif ($parameterMenu == 'tambah_anggota') {

                $contentTitle = "Tambah Anggota";

                return view('admin/anggota/v_anggotaEdit', 
                        [ 
                            'content_title' => $contentTitle
                        ]);

            // Anggota - Edit Data Anggota berdasarkan NIM (Tidak terlihat di MENU UTAMA)
            // Pada Bagan Else ini, nilai : $parameterMenu adalah NIM anggota yang dimasukkan via URL
            } else {
                
                $contentTitle = "Edit Anggota";

                // Query : SELECT * FROM 'tb_member' WHERE 'member_id' = "<NIM Anggota>" 
                $selectQuery = DB::table('tb_member')
                                ->where('member_id', '=' , $parameterMenu)
                                ->get();
                // dd($hasilQuery);
                return view('admin/anggota/v_anggotaEdit', 
                        [ 
                            'anggotas' => $selectQuery,
                            'content_title' => $contentTitle
                        ]);

                return NULL;
            }
        }

        // INSERT Anggota Baru ke Tabel Anggota
        function insertAnggota(Request $request){

            // Jika hasil request Tidak NULL
            if ($request) {

                // Inisiasi Objek $member dari kelas M_member
                $member = new M_member;
                
                // Masukkan data2 ke dalam tb_member
                // Query : INSERT INTO tb_member VALUES (member_id, etc.)
                $member->member_id          = $request->form_tambah_nim;
                $member->member_name        = $request->form_tambah_nama;
                $member->member_angkatan    = $request->form_tambah_angkatan;
                $member->member_prodi       = $request->form_tambah_prodi;
                $member->member_division    = $request->form_tambah_divisi;
                $member->member_jabatan     = $request->form_tambah_jabatan;
                $member->member_ig          = $request->form_tambah_ig;
                $member->member_fb          = $request->form_tambah_fb;
                $member->member_sosmed3     = $request->form_tambah_twitter;
                $member->member_photo       = $request->form_tambah_foto;

                $member->save();

                // dd($member);
                
                return redirect('admin/anggota/anggota_aktif');
                
            }

        }

        // UPDATE Anggota yang id-nya=$nimAnggota dari Tabel Anggota
        // data2 yang digunakan untuk update di masukkan dalam paramater $request
        function updateAnggota(Request $request, $nimAnggota){
            // dd($request);
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
                $member->member_jabatan     = $request->form_edit_jabatan;
                $member->member_ig          = $request->form_edit_ig;
                $member->member_fb          = $request->form_edit_fb;
                $member->member_sosmed3     = $request->form_edit_twitter;
                $member->member_photo       = $request->form_edit_foto;

                $member->save();

                // dd($member);
                
                return redirect('admin/anggota/anggota_aktif');
                
            }

        }
        
        // DELETE Anggota dengan id : $nimAnggota dari Tabel Anggota
        function deleteAnggota($nimAnggota){

            // Query : DELETE * FROM tb_member WHERE member_id = <nimAnggota>
            $member = M_member::find($nimAnggota);
            // dd($member);
            $member->delete();

            // dd($member);

            return redirect('admin/anggota/anggota_aktif');
            
        }



        // ====================== Menu Portofolio =========================

        // Menampilkan Tabel Portofolio : MENU UTAMA - Portofolio, menampilkan menu sesuai dengan parameter
        function getMenuPortofolio($parameterMenu){
            // MENU UTAMA - Portofolio > Raion Produktif
            if ($parameterMenu == 'raion_produktif') {

                $contentTitle = "Daftar Portofolio";
                
                $selectQuery = DB::select(
                'SELECT 
                P.portofolio_id, P.portofolio_title, P.portofolio_category, 
                P.portofolio_date_start, 
                C.client_name,
                M.member_name
                FROM tb_portofolio P, tb_member M, tb_client C
                WHERE 
                P.portofolio_manager_id = M.member_id
                AND
                P.portofolio_client_id = C.client_id');

                // dd($selectQuery);
                
                return view('admin/portofolio/v_portofolio', 
                        [ 
                            'portofolios' => $selectQuery ,
                            'content_title' => $contentTitle
                        ]);
            
            // MENU UTAMA - Portofolio : Tambah Portofolio
            } elseif ($parameterMenu == 'tambah_portofolio') {

                $contentTitle = "Tambah Portofolio";

                // Select Data Member untuk Dropdown
                $selectMemberQuery = DB::select(
                    'SELECT M.member_id, M.member_name 
                    FROM tb_member M 
                    ORDER BY `member_id` ASC');

                    // dd($selectMemberQuery);

                // Select Data Klien untuk Dropdown
                $selectClientQuery = DB::select(
                    'SELECT C.client_id, C.client_name 
                    FROM tb_client C');

                    // dd($selectClientQuery);

                return view('admin/portofolio/v_portofolioEdit', 
                        [ 
                            'content_title' => $contentTitle,
                            'anggotas' => $selectMemberQuery,
                            'kliens' => $selectClientQuery
                        ]);

            // Anggota - Edit Data Anggota berdasarkan NIM (Tidak terlihat di MENU UTAMA)
            // Pada Bagan Else ini, nilai : $parameterMenu adalah NIM anggota yang dimasukkan via URL
            } else {
                
                $contentTitle = "Edit Portofolio";

                // Query : SELECT * FROM 'tb_portofolio' WHERE 'portofolio_id' = "<Portofolio ID>" 
                $selectQuery = DB::table('tb_portofolio')
                                ->where('portofolio_id', '=' , $parameterMenu)
                                ->get();
                
                // Select Data Member untuk Dropdown
                $selectMemberQuery = DB::select(
                    'SELECT M.member_id, M.member_name 
                    FROM tb_member M 
                    ORDER BY `member_id` ASC');

                // Select Data Klien untuk Dropdown
                $selectClientQuery = DB::select(
                    'SELECT C.client_id, C.client_name 
                    FROM tb_client C');

                return view('admin/portofolio/v_portofolioEdit', 
                        [ 
                            'portofolios' => $selectQuery,
                            'content_title' => $contentTitle,
                            'anggotas' => $selectMemberQuery,
                            'kliens' => $selectClientQuery
                        ]);

                return NULL;
            }
        }

         // INSERT Portofolio Baru ke Tabel Portofolio
         function insertPortofolio(Request $request){

            // Jika hasil request Tidak NULL
            if ($request) {

                // Inisiasi Objek $member dari kelas M_portofolio & M_portofolio_member
                $portofolio = new M_portofolio;
                $portofolio_member = new M_portofolio_member;

                
                // Masukkan data2 ke dalam tb_portofolio
                // Query : INSERT INTO tb_portofolio VALUES (..., etc.)
                $temp_title_id = md5($request->form_tambah_title);
                $portofolio->portofolio_id              = $temp_title_id;
                $portofolio->portofolio_title           = $request->form_tambah_title;
                $portofolio->portofolio_category        = $request->form_tambah_kategori;
                $portofolio->portofolio_date_start      = $request->form_tambah_date_start;
                $portofolio->portofolio_date_end        = $request->form_tambah_date_end;
                $portofolio->portofolio_description     = $request->form_tambah_deskripsi;
                $portofolio->portofolio_client_id       = substr($request->form_tambah_client_id, 0, 32); //ambil 32 huruf pertama dimulai dari huruf ke-0
                $portofolio->portofolio_manager_id      = substr($request->form_tambah_manager_id, 0, 15); //ambil 15 huruf pertama dimulai dari huruf ke-0
                $portofolio->portofolio_img_thumb       = $request->form_tambah_img_thumb;
                $portofolio->portofolio_slug            = str_slug($request->form_edit_title, '-');
                 
                $portofolio->save();

                // Memasukkan data nama2 anggota projek ke table berbeda
                $data = array(
                    array('portofolio_id'=>$temp_title_id, 'member_id'=> substr($request->form_tambah_anggota_1, 0, 15)),
                    array('portofolio_id'=>$temp_title_id, 'member_id'=> substr($request->form_tambah_anggota_2, 0, 15)),
                    array('portofolio_id'=>$temp_title_id, 'member_id'=> substr($request->form_tambah_anggota_3, 0, 15)),
                    array('portofolio_id'=>$temp_title_id, 'member_id'=> substr($request->form_tambah_anggota_4, 0, 15)),
                    array('portofolio_id'=>$temp_title_id, 'member_id'=> substr($request->form_tambah_anggota_5, 0, 15)),
                );

                $portofolio_member::insert($data); //Eloquent Approach

                
                return redirect('admin/portofolio/raion_produktif');
                
            }

        }

        // UPDATE Portofolio yang id-nya=$nimAnggota dari Tabel Anggota
        // data2 yang digunakan untuk update di masukkan dalam paramater $request
        function updatePortofolio(Request $request, $portofolioID){
            // dd($request);
            // Jika hasil request Tidak NULL
            if ($request) {
                // Masukkan data2 ke dalam tb_member
                // Query : UPDATE FROM tb_member WHERE member_id = <nimAnggota> VALUES (member_id, etc.)
                $portofolio = M_portofolio::find($portofolioID);
                $portofolio_member = new M_portofolio_member;

                // Data langsung di masukkan ke baris dengan kolom dari method find(), IT'S MAGIC :o
                
                // Cek, jika terjadi perubahan pada Judul Portofolio

                // Jika Judul portofolio tidak ada perubahan, portofolio id tetap
                if ($request->form_edit_id == md5($request->form_edit_title)) {
                    $portofolio->portofolio_id  = $request->form_edit_id;
                } 
                // Jika Judul portofolio ada perubahan, portofolio id ikut diubah
                else {
                    $portofolio->portofolio_id = md5($request->form_edit_title);
                }

                $portofolio->portofolio_title           = $request->form_edit_title;
                $portofolio->portofolio_category        = $request->form_edit_kategori;
                $portofolio->portofolio_date_start      = $request->form_edit_date_start;
                $portofolio->portofolio_date_end        = $request->form_edit_date_end;
                $portofolio->portofolio_description     = $request->form_edit_deskripsi;
                $portofolio->portofolio_client_id       = substr($request->form_edit_client_id, 0, 32); //ambil 32 huruf pertama dimulai dari huruf ke-0
                $portofolio->portofolio_manager_id      = substr($request->form_edit_manager_id, 0, 15); //ambil 15 huruf pertama dimulai dari huruf ke-0
                $portofolio->portofolio_img_thumb       = $request->form_edit_img_thumb;
                $portofolio->portofolio_slug            = str_slug($request->form_edit_title, '-'); 
                $portofolio->save();

                $portofolio_member::where('portofolio_id', $request->form_edit_id)
                ->update(['portofolio_id' => md5($request->form_edit_title)]);
                
                return redirect('admin/portofolio/raion_produktif');
                
            }

        }

        // DELETE Portofolio dengan id : $portofolioID dari Tabel Portofolio
        function deletePortofolio($portofolioID){

            // Query : DELETE * FROM tb_member WHERE member_id = <nimAnggota>
            $portofolio = M_portofolio::find($portofolioID);
            // dd($member);
            $portofolio->delete();

            // dd($member);

            return redirect('admin/portofolio/raion_produktif');
            
        }

        // ====================== Menu Proker =========================

        // Menampilkan Tabel Proker : MENU UTAMA - Proker, menampilkan menu sesuai dengan parameter
        function getMenuProker($parameterMenu){
            // MENU UTAMA - Proker > Internal/Eksternal
            if ($parameterMenu == 'program_kerja') {

                $contentTitle = "Daftar Program Kerja";
                
                $selectQuery = DB::select(
                'SELECT P.proker_id, P.proker_title, P.proker_date, P.proker_category, P.proker_status 
                FROM tb_proker P');

                // dd($selectQuery);
                
                return view('admin/proker/v_proker', 
                        [ 
                            'prokers' => $selectQuery ,
                            'content_title' => $contentTitle
                        ]);
            
            // MENU UTAMA - Portofolio : Tambah Portofolio
            } elseif ($parameterMenu == 'tambah_proker') {

                $contentTitle = "Tambah Program Kerja";

                return view('admin/proker/v_prokerEdit', 
                        [ 
                            'content_title' => $contentTitle
                        ]);

            // Anggota - Edit Data Anggota berdasarkan NIM (Tidak terlihat di MENU UTAMA)
            // Pada Bagan Else ini, nilai : $parameterMenu adalah NIM anggota yang dimasukkan via URL
            } else {
                
                $contentTitle = "Edit Program Kerja";

                // Query : SELECT * FROM 'tb_proker' WHERE 'proker_id' = "<Proker ID>" 
                $selectQuery = DB::table('tb_proker')
                                ->where('proker_id', '=' , $parameterMenu)
                                ->get();
                
                return view('admin/proker/v_prokerEdit', 
                        [ 
                            'prokers' => $selectQuery,
                            'content_title' => $contentTitle
                        ]);

                return NULL;
            }
        }

        // INSERT Proker Baru ke Tabel Proker
        function insertProker(Request $request){

            // Jika hasil request Tidak NULL
            if ($request) {

                // Inisiasi Objek $proker dari kelas M_proker
                $proker = new M_proker;
                
                // Masukkan data2 ke dalam tb_proker
                // Query : INSERT INTO tb_proker VALUES (..., etc.)
                $proker->proker_id                      = md5($request->form_tambah_title);
                $proker->proker_title                   = $request->form_tambah_title;
                $proker->proker_date                    = $request->form_tambah_date;
                $proker->proker_category                = $request->form_tambah_kategori;
                $proker->proker_description             = $request->form_tambah_deskripsi;
                $proker->proker_description_singkat     = $request->form_tambah_deskripsi_singkat;
                $proker->proker_status                  = $request->form_tambah_status;
                $proker->proker_img_thumb_id            = $request->form_tambah_img_thumb;
                $proker->proker_slug                    = str_slug($request->form_tambah_title, '-'); 
                
                $proker->save();
                
                return redirect('admin/proker/program_kerja');
                
            }

        }

        // UPDATE Proker yang id-nya=$nimAnggota dari Tabel Anggota
        // data2 yang digunakan untuk update di masukkan dalam paramater $request
        function updateProker(Request $request, $prokerID){
            // dd($request);
            // Jika hasil request Tidak NULL
            if ($request) {
                // Masukkan data2 ke dalam tb_proker
                // Query : UPDATE FROM tb_proker WHERE proker_id = <prokerID> VALUES (member_id, etc.)
                $proker = M_proker::find($prokerID);

                // Data langsung di masukkan ke baris dengan kolom dari method find(), IT'S MAGIC :o
                
                // Cek, jika terjadi perubahan pada Judul Portofolio

                // Jika Judul proker tidak ada perubahan, proker id tetap
                if ($request->form_edit_id == md5($request->form_edit_title)) {
                    $proker->proker_id  = $request->form_edit_id;
                } 
                // Jika Judul proker ada perubahan, proker id ikut diubah
                else {
                    $proker->proker_id = md5($request->form_edit_title);
                }

                $proker->proker_id                      = md5($request->form_edit_title);
                $proker->proker_title                   = $request->form_edit_title;
                $proker->proker_date                    = $request->form_edit_date;
                $proker->proker_category                = $request->form_edit_kategori;
                $proker->proker_description             = $request->form_edit_deskripsi;
                $proker->proker_description_singkat     = $request->form_edit_deskripsi_singkat;
                $proker->proker_status                  = $request->form_edit_status;
                $proker->proker_img_thumb_id            = $request->form_edit_img_thumb;
                $proker->proker_slug                    = str_slug($request->form_edit_title, '-'); 
                
                $proker->save();
                
                return redirect('admin/proker/program_kerja');
                
            }

        }

        // DELETE Proker dengan id : $ProkerID dari Tabel Proker
        function deleteProker($prokerID){

            // Query : DELETE * FROM tb_proker WHERE member_id = <nimAnggota>
            $proker = M_proker::find($prokerID);
            // dd($member);
            $proker->delete();

            // dd($member);

            return redirect('admin/proker/program_kerja');
            
        }
    }
    

?>