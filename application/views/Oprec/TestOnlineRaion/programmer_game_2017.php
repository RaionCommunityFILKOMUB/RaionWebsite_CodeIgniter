<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Programmer Game 2017</title>
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div id= "logoHolder">
                <h1>Test Online Programmer Game Angkatan 2017</h1>
                <img id="logoDesigner" src="<?php echo base_url()?>assets/img/non-projek/logo-programmer.png">
            </div>
            <div class="jumbotron-fluid">
                <form action="<?php echo base_url()?>oprec/Jawab" method="POST">
                        <h3>Buatlah sebuah Text-Based Game sesuai dengan ketentuan dibawah!</h3>
                        <div class="form-group">
                                <label for="ketentuan-program">1.1 Ketentuan Program</label>
                                <ol>
                                        <li>
                                        Menggunakan bahasa pemrograman Java  
                                        </li>
                                        <li>
                                        Menerapkan pemrograman OOP (Object Oriented Programming)
                                        </li>
                                </ol>
                        </div>
                        <div class="form-group">
                                        <label for="ketentuan-gameplay">1.2 Ketentuan Gameplay</label>
                                        <ol>
                                                <li>
                                                Pemain berada pada bidang koordinat Kartesius berukuran 4x4 
                                                </li>
                                                <li>
                                                Pada bidang ini, terdapat harta karun yang koordinatnya ditentukan secara acak dan ditampilkan pada awal permainan
                                                </li>
                                                <li>
                                                 Tujuan dari pemain adalah untuk mencapai koordinat harta karun tersebut 
                                                </li>
                                                <li>
                                                Pemain dapat bergerak ke kanan, kiri, atas, atau bawah sebanyak satu unit setiap kali bergerak
                                                </li>
                                                <li>
                                                Setiap kali pemain bergerak, koordinatdari pemainakan berubah sesuai arah pergerakan
                                                </li>
                                                <li>
                                                Setiap kali pemain bergerak, program akan menampilkan koordinat pemain
                                                </li>
                                                <li>
                                                Setiap kali pemain bergerak, secara random akan ditentukan apakah pemain akan menemui monster atau tida
                                                </li>
                                                <li>
                                                Jika pemain menemui monster, secara random, akan ditentukan apakah pemain menang melawan monster atau tidak
                                                </li>
                                                <li>
                                                 Jika pemain kalah, maka permainan berakhir
                                                </li>
                                                <li>
                                                Jika pemain menang,maka pemain akan mendapat item yang akan disimpan kedalam inventory dan dapat melanjutkan permainan
                                                 </li>
                                                 <li>
                                                Inventory menggunakan struktur data stack
                                                 </li>
                                        </ol>
                                </div>
                                <div class="form-group">
                                                <label for="link-drive-helper">Link Drive</label>
                                                <input type="text" name="jawaban" class="form-control" id="link-drive" required placeholder="Link google drive">
                                                <small id="link-dirve-helper" class="form-text text-muted">upload file pada google drive dan sertakan linknya.</small>
                                </div>
                                <div class="buttonHolder">
                                                <button id = "buttonSubmitForm" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                </form>

        </div>
    </div>
    



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>