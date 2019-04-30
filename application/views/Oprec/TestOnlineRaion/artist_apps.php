<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Artist Apps </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="logoHolder">
            <h1>Test Online Artist Apps </h1>
            <img id="logoArtist" src="<?php echo base_url()?>assets/img/non-projek/logo-artist.png">
        </div>
        <div class="jumbotron-fluid">
            <form action="<?php echo base_url("oprec/Jawab")?>" method="POST">
                <p>Pilihlah Salah satu dari ke-3 aplikasi dibawah ini</p>
                <ol>
                    <li>Aplikasi Cinemaxx </li>
                    <li>OLX </li>
                    <li>Aplikasi BMKG(Badan Meteorologi dan Geofisika) </li>
                </ol>
                <p>Setelah menentukan aplikasi, lakukan step selanjutnya dibawah ini </p>
                <ol>
                    <li> Desain ulang (Redesign) aplikasi yang telah dipilih, dengan syarat melakukan desain ulang pada:
                        <ol type="A">
                            <li> Logo</li>
                            <li> Minimal 5 Layout</li>

                        </ol>
                        <br>
                    </li>
                    <li>Dengan dasar hasil dari desain ulang berupa aplikasi berbasis mobile Android atau iOS, berikan alasan atau analisa mengapa bagian tersebut didesain ulang</li>
                    <br>
                    <p>contoh: memberikan kenyamanan user yang lebih mudah menggunakan bottom navigation, dibandingkan navigation drawer di pojok kiri atas, dengan menyesuaikan tangan</p>
                </ol>
                <p style="font-weight: bold">note: </p>
                <ol>
                    <li>kamu bisa gunakan referensi seperti google design, dribble, pinterest, behance, dan lainnya (referensi ≠ plagiasi).</li><br>
                    <li>dikumpulkan dalam bentuk file mentahan seperti (.psd, .xd, .ai, .cdr, dan lainnya), jika menambahkan dengan gambaran wireframe akan mendapatkan nilai tambah </li>
                </ol>
                <hr>
                <div class="form-group">
                    <label for="link-drive-helper">Link Drive</label>
                    <input type="text" class="form-control" name="jawaban" id="link-drive" required placeholder="Link google drive">
                    <small id="link-dirve-helper" class="form-text text-muted">upload file pada google drive dan sertakan linknya.</small>
                </div>
                <div class="buttonHolder">
                    <button id="buttonSubmitForm" type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div>
    </div>




    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>