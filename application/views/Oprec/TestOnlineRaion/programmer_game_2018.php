<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Programmer Game 2018</title>
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div id= "logoHolder">
                <h1>Test Online Programmer Game Angkatan 2018</h1>
                <img id="logoDesigner" src="<?php echo base_url()?>assets/img/non-projek/logo-programmer.png">
            </div>
            <div class="jumbotron-fluid">
                <form action="<?php echo base_url()?>oprec/Jawab"  method="POST"> 
                        <h3>Buatlah sebuah Text-Based Game dengan model permainan batu, gunting, kertas</h3>
                        <div class="form-group">
                                <label for="ketentuan-program">1.1 Ketentuan Program</label>
                                <ol>
                                        <li>
                                        Menggunakan bahasa pemrograman Java  
                                        </li>
                                        <li>
                                        Menerapkan pemrograman prosedura
                                        </li>
                                </ol>
                        </div>
                        <div class="form-group">
                                        <label for="ketentuan-gameplay">1.2 Ketentuan Gameplay</label>
                                        <ol>
                                                <li>
                                                Terdapat dua sisi pemain, Demon Lord dan Hero
                                                </li>
                                                <li>
                                                DemonLord dan Hero masing-masingmemiliki health point
                                                </li>
                                                <li>
                                                Demon Lord dan Hero dapat memilih batu, gunting, atau kertas pada setiap turn
                                                </li>
                                                <li>
                                                Demon Lord dimainkan oleh program dan memilih secara acak
                                                </li>
                                                <li>
                                                Hero dimainkan oleh pengguna dan dapat memilih antara ketiga pilihan yang ada
                                                </li>
                                                <li>
                                                Pilihan kedua pemain dan hasilnya akan ditampilkan ketika keduanya telah memilih
                                                </li>
                                                <li>
                                                Pemain yang kalah pada suatu turn, health point nyaakan dikurangi satu
                                                </li>
                                                <li>
                                                Permainan berakhir ketika health point dari salah satu pemain mencapai 0
                                                </li>
                                        </ol>
                                </div>
                                <div class="form-group">
                                                <label for="exampleInputEmail1">Link Drive</label>
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