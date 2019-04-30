<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" type="text/css" href="app.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/oprec.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Raion Oprec</title>

    <body>
        <h1>Open Recruitment Anggota Raion Community</h1>
        <h1>2018/2019 </h1>
        <div id="logoHolder">
            <img id="logoArtist" src="<?php echo base_url()?>assets/img/non-projek/logo-artist.png">
            <img id="logoDesigner" src="<?php echo base_url()?>assets/img/non-projek/logo-designer.png">
            <img id="logoProgrammer" src="<?php echo base_url()?>assets/img/non-projek/logo-programmer.png">
        </div>
        <div class="container">
            <div class="jumbotron-fluid">
                <form action="<?php echo base_url()?>oprec/terimakasih" method="POST" enctype="multipart/form-data">
                    <!-- Nama -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" placeholder="contoh : Aditya Negara" required>
                            </div>
                        </div>
                    </div>
                    <!-- NIM -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <label for="nama">Nomor Induk Mahasiswa(NIM)</label>
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="contoh : 165150200111021" required>
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="nama">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                            </div>
                        </div>
                        <!-- Password Ulang-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="nama">Isi Ulang Password</label>
                                    <input type="password" name="password" class="form-control" id="confirm_password" required>
                                    <span id='message'></span>
                                </div>
                            </div>
                        </div>

                        <!-- Angkatan -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="angkatan">Angkatan</label>
                                    <select class="form-control" id="angkatan" name="angkatan">
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                            </select>
                                </div>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input class="form-control" name="alamat" type="text" id="alamat" placeholder="jl ruwet gang buntu" required>
                                </div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="contoh : raion@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <!-- Nomor Telfon -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="nomorTelfon">Nomor Telfon</label>
                                    <input class="form-control" name="telp" type="number" id="noTelfon" placeholder="contoh : 08128950000" required>
                                </div>
                            </div>
                        </div>
                        <!-- idLine -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="idLine">ID Line</label>
                                    <input class="form-control" name="idLine" type="text" id="idLine" placeholder="@raion" required>
                                </div>
                            </div>
                        </div>
                        <!-- Foto DIRI -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="idLine">Foto Diri</label>
                                    <label>Upload Foto Diri (3x4cm)</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" name="foto" id="imgInp" accept=".jpg,.png">
                                            <input  id="hidden" type="text" class="form-control" readonly required >

                                        </span>
                                        </span>

                                    </div>
                                    <img id='img-upload' />
                                </div>
                            </div>
                        </div>
                        <!-- divisi -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="angkatan">Divisi</label>
                                    <select class="form-control" name="divisi">
                                        <option value="Programmer">Programmer</option>
                                        <option value="Artist">Artist</option>
                                        <option value="Designer">Designer</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <!-- Minat -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" value="Game" name="fokus" checked>Game</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" value="Apps" name="fokus">Applikasi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- alasan memilih divisi -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="alasan">Alasan Memilih divisi </label>
                                    <textarea name="alsanDivisi" class="form-control" rows="5" id="alasan" id="alasan" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Software/Framework yang dikuasai -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="softwareYangDikuasai">Software/Framework yang dikuasai </label>
                                    <input name="software" type="text" class="form-control" id="softwareKuasai" placeholder="Android Studio, React Native, dll...">
                                    <small id="softwareKuasaiHelper" class="form-text text-muted">Tidak Wajib Diisi(Optional)</small>
                                </div>
                            </div>
                        </div>
                        <!-- Link Portofolio -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="portofolio">Link Portofolio </label>
                                    <input name="portofolio" type="text" class="form-control" id="portofolio" placeholder="github.com/BooleanMan23">
                                    <small id="linkPortofolionHelper" class="form-text text-muted">Tidak Wajib Diisi(Optional)</small>
                                </div>
                            </div>
                        </div>
                        <!-- CV -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-1q2 col-md-12">
                                    <label for="portofolio">Curiculum Vitae(*.pdf)</label>
                                    <input name="cv" type="file" class="form-control" id="cv" placeholder="github.com/BooleanMan23" required accept=".pdf">

                                </div>
                            </div>
                        </div>
                        <!-- Alasan daftar raion -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <label for="alasan">Alasan Masuk Raion </label>
                                    <textarea name="alasanRaion" class="form-control" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- submit -->
                        <div class="buttonHolder">
                            <button id="buttonSubmitForm" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
                </div>
            </div>





            <script>
                var uploadField = document.getElementById("imgInp");

                uploadField.onchange = function() {
                    if (this.files[0].size > 2200000) {
                        alert("File terlalu besar");
                        alert("maksimal 2MB")
                        this.value = "";
                    };
                };

                var uploadField = document.getElementById("cv");

                uploadField.onchange = function() {
                    if (this.files[0].size > 2200000) {
                        alert("File terlalu besar");
                        alert("maksimal 2MB")
                        this.value = "";
                    };
                };
            </script>
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="<?php echo base_url()?>assets/js/oprec.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </body>

</html>