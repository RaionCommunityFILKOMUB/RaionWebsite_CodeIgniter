<?php

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

    // Model
    use App\Models\M_portofolio; 
    use App\Models\M_proker; 


    class C_Main extends Controller
    {
        
        public function index(){

            $title = 'Raion Community';
            $menu = 'index';

            // Query : SELECT P.portofolio_title, P.portofolio_category, P.portofolio_date_start, P.portofolio_img_thumb 
            // FROM tb_portofolio P WHERE 1 LIMIT 10 
            $selectQuery = DB::select(
                'SELECT P.portofolio_title, P.portofolio_category, P.portofolio_date_start, P.portofolio_img_thumb, P.portofolio_slug
                FROM tb_portofolio P 
                LIMIT 6');
            
            // dd($selectQuery);

            return view('main/index', 
                [
                    'judul' => $title, 
                    'navmenu' => $menu,
                    'portofolios' => $selectQuery
                ]);
        }

        function portofolio(){

            $title = "Portofolio Raion Community";
            $menu = "portofolio";

            // Query : SELECT P.portofolio_title, P.portofolio_category, P.portofolio_date_start, P.portofolio_img_thumb 
            // FROM tb_portofolio P
            $selectQuery = DB::select(
                'SELECT P.portofolio_title, P.portofolio_category, P.portofolio_date_start, P.portofolio_img_thumb, P.portofolio_slug
                FROM tb_portofolio P' );
            
            // dd($selectQuery);

            return view('main/portofolio', 
                [
                    'judul' => $title, 
                    'navmenu' => $menu,
                    'portofolios' => $selectQuery
                ]);
        }

        function proker(){

            $title = "Proker Raion Community";
            $menu = "proker";
            
            // dd($selectQuery);

            return view('main/proker', 
                [
                    'judul' => $title, 
                    'navmenu' => $menu
                    // 'portofolios' => $selectQuery
                ]);
        }

        function anggota(){

            $title = "Anggota Raion Community";
            $menu = "anggota";

            $selectQueryKetumWaketum = DB::select("SELECT * FROM tb_member M WHERE M.member_jabatan = 'Ketua Umum' OR M.member_jabatan = 'Wakil Ketua Umum' LIMIT 2");

            $selectQueryBendaharaSekretaris = DB::select("SELECT * FROM tb_member M WHERE M.member_jabatan = 'Sekertaris' OR M.member_jabatan = 'Bendahara' LIMIT 2");

            $selectQueryKadivFungsional = 
            DB::select("SELECT * FROM tb_member M WHERE 
            M.member_jabatan = 'Kadiv Designer' 
            OR M.member_jabatan = 'Kadiv Artist' 
            OR M.member_jabatan = 'Kadiv Programmer'
            LIMIT 3");

            $selectQueryKadivNonFungsional = DB::select("SELECT * FROM tb_member M WHERE 
            M.member_jabatan = 'Kadiv Marketing' 
            OR M.member_jabatan = 'Kadiv Eksternal' 
            OR M.member_jabatan = 'Kadiv Produksi' 
            OR M.member_jabatan = 'Kadiv Pengawasan'
            LIMIT 4");

            $selectQueryDesainer = DB::select(
                'SELECT * FROM tb_member WHERE member_division = "Designer" AND member_jabatan IS NULL');
            
            $selectQueryArtist = DB::select(
                'SELECT * FROM tb_member WHERE member_division = "Artist" AND member_jabatan IS NULL');
            
            $selectQueryProgrammer = DB::select(
                'SELECT * FROM tb_member WHERE member_division = "Programmer" AND member_jabatan IS NULL');

            return view('main/member', 
                [
                    'judul' => $title, 
                    'navmenu' => $menu,
                    'desainers' => $selectQueryDesainer,
                    'artists' => $selectQueryArtist,
                    'programmers' => $selectQueryProgrammer,
                    'ketumWaketums' => $selectQueryKetumWaketum,
                    'bendaharaSekertarises' => $selectQueryBendaharaSekretaris,
                    'fungsionals' => $selectQueryKadivFungsional,
                    'nonFungsionals' => $selectQueryKadivNonFungsional
                ]);
        }

        function tentang(){

            $title = "Tentang Raion Community";
            $menu = "tentang";

            return view('main/about', 
                [
                    'judul' => $title, 
                    'navmenu' => $menu
                    // 'portofolios' => $selectQuery
                ]);
        }

        function detailPortofolio($slug_parameter){
            
            $selectQuery = DB::select(
                'SELECT * from tb_portofolio where portofolio_slug = "'.$slug_parameter.'" LIMIT 1');

            $selectQueryMember = DB::select(
                'SELECT  M.member_name 
                FROM tb_portofolio_member PM
                JOIN tb_portofolio P ON PM.portofolio_id = P.portofolio_id
                JOIN tb_member M ON PM.member_id = M.member_id
                WHERE P.portofolio_slug = "'.$slug_parameter.'"');

            $menu = "portofolio";

            return view('main/detailPortofolio', 
                [   
                    'navmenu' => $menu,
                    'portofolios' => $selectQuery,
                    'members' => $selectQueryMember
                ]);

        }

        function detailProker($slug_parameter){

            $selectQuery = DB::select(
                'SELECT * from tb_proker where proker_slug = "'.$slug_parameter.'" LIMIT 1');
            
            $menu = "proker";

            return view('main/detailProker', 
                [   
                    'navmenu' => $menu,
                    'prokers' => $selectQuery
                ]);

        }

    }
    

?>