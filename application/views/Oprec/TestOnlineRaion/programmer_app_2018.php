<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Programmer Apps 2018</title>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div id= "logoHolder">
                <h1>Test Online Programmer Apps Angkatan 2018</h1>
                <img id="logoDesigner" src="<?php echo base_url()?>assets/img/non-projek/logo-programmer.png">
            </div>
            <div class="jumbotron-fluid">
                <form action="<?php echo base_url()?>oprec/Jawab" method="POST">
                        <h3>Buatlah sebuah program manajemen buku di perpustakaan sesuai dengan ketentuan dibawah!</h3>
                        <div class="form-group">
                                <label for="ketentuan-program">1.1 Ketentuan Program</label>
                                <ol>
                                        <li>
                                        Menggunakan bahasa pemrograman Java  
                                        </li>
                                        <li>
                                        Menerapkan pemrograman Prosedural
                                        </li>
                                </ol>
                        </div>
                        <div class="form-group">
                                        <label for="ketentuan-program">1.2 Ketentuan Apps</label>
                                        <div id="soal">
                                                <p>1. Pengguna dapat</p>
                                                <ol type="A"> 
                                                        <li>
                                                        Menambah Buku
                                                        </li>
                                                        <li>
                                                        Melihat Daftar Buku
                                                        </li>
                                                        <li>
                                                        Melihat suatu buku tertentu
                                                        </li>
                                                        <li>
                                                        Merubah data suatu buku tertentu
                                                        </li>
                                                        <li>
                                                        Menghapus suatu buku tertent
                                                        </li>
                                                </ol>
                                                <p>2. Data Buku Disimpan didalam Array dua dimensi dengan format</p>
                                                <p class="solid">String[][] books = [
                                                    <br> [“id”, “Judul”, “Penulis”, “Tahun Terbit”], <br>
                                                    [“id”, “Judul”, “Penulis”, “Tahun Terbit”] ];</p>
                                                <p>3. Untuk Menambahkan Buku, pengguna harus memasukan input dengan format</p>
                                                <p id="format-input">POST /book Judul/Penulis/TahunTerbit</p>
                                                <p>4. Untuk melihat daftar buku, pengguna harus memasukan input dengan format</p>
                                                <p id="format-input">GET /book</p>
                                                <p>5. Untuk melihat suatu buku tertentu, pengguna harus memasukan input dengan format</p>
                                                <p id="format-input">GET /book/{id_buku}</p>
                                                <p class="helper">(id_buku diganti sesuai dengan id dari data buku)</p>
                                                <p class="helper">Contoh : Untuk melihat data buku dengan id 1, pengguna memasukan input GET /book/</p>
                                                <p>6. Untuk merubah data suatu buku tertentu, pengguna harus memasukan input dengan format</p>
                                                <p id="format-input">UPDATE /book/{id_buku} Judul/Penulis/TahunTerbit </p>
                                                <p class="helper">(id_buku diganti sesuai dengan id dari data buku)</p>
                                                <p class="helper">Contoh : Untuk merubah data buku dengan id 1, pengguna memasukan input </p>
                                                <p id="format-input">UPDATE /book/1 JudulBaru/PenulisBaru<br>/TahunTerbitBaru </p>
                                                <!-- nomor 7 -->
                                                <p>7. Untuk menghapus suatu buku tertentu, pengguna harus memasukan input dengan format
                                                    </p>
                                                <p id="format-input">DELETE /book/{id_buku}</p>
                                                <p class="helper">(id_buku diganti sesuai dengan id dari data buku)</p>
                                                <p class="helper">Contoh : Untuk menghapus buku dengan id 1, pengguna memasukan input DELETE /book/1</p>
                                                <hr>


                                        </div>
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