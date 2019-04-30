<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Designer</title>
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div id= "logoHolder">
                <h1>Test Online Designer</h1>
                <img id="logoDesigner" src="<?php echo base_url()?>assets/img/non-projek/logo-designer.png">
            </div>
            <div class="jumbotron-fluid">
                <form action="<?php echo base_url()?>oprec/Jawab" method="POST" >
                        <!-- Nomor 1 -->
                        <div class="form-group">
                                <label for="soal1">1.Apa Yang Anda Ketahui Tentang Tugas Seorang Mobile app dan Game Designer</label>
                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal1" required></textarea>
                        </div>
                        <!-- Nomor 2 -->
                        <div class="form-group">
                                <label for="soal2">2.Menurut anda game yang baik itu memiliki aspek apa saja? Jelaskan!</label>
                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal2" required></textarea>
                        </div>
                        <!-- Nomor 3 -->
                        <div class="form-group">
                                <label for="soal3">3.Menurut anda aplikasi yang baik itu memiliki aspek apa saja? Jelaskan!</label>
                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal3" required></textarea>
                        </div>
                        <!-- Nomor 4 -->
                        <div class="form-group">
                                <label for="soal4">4.Menurut anda apa yang membuat sebuah game menarik untuk dimainkan? Berikan 2 contoh game yang anda sukai dan berikan analisismu!</label>
                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal4" required></textarea>
                        </div>
                        <!-- Nomor 5 -->
                        <div class="form-group">
                                <label for="soal5">5.Menurut anda apa yang membuat sebuah aplikasi diminati/digunakan oleh banyak pengguna? Berikan 2 contoh aplikasi yang anda sukai dan berikan analisismu!</label>
                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal5" required></textarea>
                        </div>
                        <!-- Nomor 6 -->
                        <div class="form-group">
                                <label for="soal6">6.Studi Kasus Aplikasi </label><br>
                                <small id="soal6help" class="form-text text-muted">Soal Aplikasi.</small>
                                <br>
                                <p > Indonesia masih memiliki tingkat pengangguran yang cukup tinggi. Dari data yang ada, lulusan sarjana bisa mencapai angka 700 hingga 800 ribu tiap tahunnya. Belum lagi ditambah oleh lulusan dari jenjang pendidikan lain, seperti SMK contohnya. Totalnya, per tahun Indonesia bisa mencetak sekitar 2 juta angkatan kerja baru. Agustus 2018, BPS melaporkan bahwa jumlah pengangguran di Indonesia mencapai 7 juta orang, atau 5,34 persen dari jumlah angkatan kerja mencapai 131,01 juta. Jika dilihat dari tingkat pendidikannya, pengangguran terbesar berada pada level SMK yang mencapai 11,24 persen. Kemudian, setelah itu pada level Diploma I/II/III sebesar 7,92%.
                                Lapangan pekerjaan yang mengalami peningkatan ada pada Penyediaan Akomodasi dan Makan Minum (0,47 persen poin), Industri Pengolahan (0,21 persen poin), dan Transportasi (0,17 persen poin). Sementara lapangan pekerjaan yang mengalami penurunan utamanya pada Pertanian (0,89 persen poin), Jasa Lainnya (0,11 persen poin), dan Jasa Pendidikan (0,05 persen poin).
                                </p>
                                <br>

                                    <ol>
                                        <li>
                                            <p>Berdasarkan data dan permasalahan diatas, buatlah sebuah aplikasi mobile yang ANTI-MAINSTREAM sebagai solusi untuk menyelesaikan masalah tersebut!
                                                Buat dalam bentuk video yang menjelaskan latar belakang ide aplikasi, deskripsi aplikasi, & sketsa/ alur penggunaan fiturnya. (hanya sertakan link video youtube).
                                            </p>
                                            <input class="form-control" type="text" name="jawaban[]" placeholder="Link Vidio Youtube" id="linkYoutubeGame">
                                        </li>
                                        <li>
                                                <p>Dalam pengembangan aplikasi yang anda buat (soal 6 poin a) System Development Life Cycle (SDLC) apa yang anda terapkan? Berikan alasannya
                                                </p>
                                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal6b"></textarea>
                                            </li>
                                    </ol>
                                
                                
                        </div>
                        <!-- Nomor 7 -->
                        <div class="form-group">
                                <label for="soal6">6.Studi Kasus Game </label><br>
                                <small id="soal6help" class="form-text text-muted">Soal Game.</small>
                                <br>
                                <ol>
                                        <li>
                                            <p>Jika anda diberikan kesempatan untuk mengimplementasikan ide anda, jelaskan ide game seunik mungkin yang akan anda buat dalam bentuk video!
                                                    Game yang dibuat minimal memiliki storyline (cerita game), tema, genre, mekanik, gameplay, karakter, dan goals dari game tersebut. (hanya sertakan link video youtube).     
                                            </p>
                                            <input class="form-control" name="jawaban[]" type="text" placeholder="Link Vidio Youtube" id="linkYoutubeGame">
                                        </li>
                                        <li>
                                                <p>Analisis game yang anda buat menggunakan framework MDA (Mechanics Dynamics Aesthetics)!
                                                </p>
                                                <textarea name="jawaban[]" class="form-control" rows="4" id="soal6b"></textarea>
                                            </li>
                                    </ol>
                        </div>
                        <p class="note">Kerjakan Soal No. 6 & 7 Sesuai Fokus Bidang yang Anda Pilih (Game/ Aplikasi)</p>
                        <div class="buttonHolder">
                            <button id = "buttonSubmitForm" type="submit" class="btn btn-primary">Submit</button>
                         </div>
                         
                </form>
                        

                </div>
    </div>
    



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>