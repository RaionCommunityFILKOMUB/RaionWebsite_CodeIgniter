<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Artist Game </title>
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div id= "logoHolder">
                <h1>Test Online Artist Game </h1>
                  <img id="logoArtist" src="<?php echo base_url()?>assets/img/non-projek/logo-artist.png">
            </div>
            <div class="jumbotron-fluid">
                <form action="<?php echo base_url()?>oprec/Jawab" method="POST">
                            <h3 class="bold">Game Story</h3>
                        <p>
                            Pada tahun 1989, terjadi perang dunia yang sangat dahsyat. Perang tersebut melibatkan lebih dari 10 
                        negara sehingga meninggalkan banyak kekacauan dan memakan banyak korban. Seorang bocah laki-laki 
                        bernama Audric beserta adik perempuannya Audrey secara terpaksa ditempatkan dalam sebuah panti 
                        asuhan. Orang tua mereka merupakan salah satu korban dari peperangan tersebut sehingga mereka 
                        dibawa ke panti asuhan oleh pemerintah setempat. Suatu ketika, Audric yang mulai menginjak umur 16 
                        diharuskan untuk melakukan wajib militer oleh Negara. Dengan berat hati Audric pun meninggalkan adik 
                        satu-satunya di dalam panti asuhan tersebut dan pergi melakukan tugas Negara      
                        </p>
                        <p>
                            Beberapa tahun kemudian, Audric kembali setelah mendengar bahwa panti asuhan tersebut diserang 
                                oleh penjajah. Panti asuhan dimana adiknya tinggal kini hanya tersisa puing-puing reruntuhan dan tidak 
                                ada satupun orang yang tersisa. Kabar burung mengatakan bahwa semua penghuni panti asuhan 
                                diungsikan ke tempat yang lebih aman. Dari sinilah Audric memulai petualangannya dalam mencari 
                                Audrey di segala penjuru kota tanpa tahu bahwa sebetulnya adik perempuannya tersebut sudah 
                                menjadi korban jiwa pada peristiwa itu.
                        </p>
                        <h3 class="bold">2D Artist</h3> 
                        <p> Buatlah aset-aset game dari deskripsi tersebut. Aset game berupa manual/sketsa dan digital: </p>
                        <ol type="A">
                            <li>Desain karakter dengan pose istirahat ditempat seperti pada saat upacara (hadap depan, samping, dan belakang) (wajib</li>
                            <li>Environment dan obstacle (wajib)</li>
                            <li>Item-item yg digunakan pada game (power up, dll) (opsional) </li>
                            <li>Animasi sederhana, memakai sprite atau skeleton (opsional) </li>
                        </ol>
                        <p class = "kecil">Kerjakan Minimal 1 soal wajib</p>
                        <p class="note2">Note</p>
                        <ol type="1">
                            <li>gambar versi digital akan digunakan sebagai nilai tambah </li>
                            <li>dapat mengumpulkan dalam bentuk file mentahan (.psd, .ai, .cdr) atau file export (.jpg, .png) atau sketsa hasil scan.</li>

                        </ol>
                        <hr>
                        <!-- 3D Artist -->
                        <h3 class="bold">3D Artist</h3> 
                        <p> pilihlah salah satu soal dibawah ini (boleh dikerjakan semua). kerjakan berdasarkan story game diatas: </p>
                        <ol type="A">
                            <li>buatlah karakter Audric atau Audrey berdasarkan story diatas dengan model low poly (rig opsional)</li>
                            <li>buatlah environment yang menggambarkan suasana dalam story di atas)</li>
                        </ol>

                        <p class="note2">Note</p>
                        <ol type="1">
                            <li>Style art boleh apapun (realistik, anime, kartun, dll) </li>
                            <li>Mengumpulkan dalam bentuk file mentahan (.blend, .mb, max, .3ds) dn file export (.fbx) File yang dikumpulkan dikompresi ke rar, termasuk file tambahan (texture, normal_map, Spectacular_map) jika ada.</li>
                        </ol>
                        <hr>
                        <!-- Music Artist -->
                        <h3 class="bold">Music Artist</h3> 
                        <p> Kerjakan soal di bawah ini:  </p>
                        <ol type="A">
                            <li>Dari story game tersebut, Buatlah background Music (BGM) untuk gameplaynya. Setting tempat/stage dan suasana bisa di mana saja. Minimal 30 detik</li>
                           
                        </ol>

                        <p class="note2">Note</p>
                        <ol type="1">
                            <li> dikumpulkan dalam bentuk file (.mp3 atau .wav)  </li>
                           
                        </ol>
                        <hr>
                        <div class="form-group">
                                <label for="link-drive-helper">Link Drive</label>
                                <input type="text" name="jawaban" class="form-control" name="jawaban" id="link-drive" required placeholder="Link google drive">
                                <small id="link-dirve-helper" class="form-text text-muted">upload file pada google drive dan sertakan linknya.</small>
                         </div>
                        <div class="buttonHolder">
                                <button id = "buttonSubmitForm" type="submit" class="btn btn-primary" >Submit</button>
                        </div>

                </form>

        </div>
    </div>
    



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>