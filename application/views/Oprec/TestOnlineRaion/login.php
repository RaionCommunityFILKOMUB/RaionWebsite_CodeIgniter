<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/test_oprec_app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="logoHolder">
            <h1>Login</h1>
            <img id="logoArtist" src="<?php echo base_url()?>assets/img/non-projek/logo-artist.png">
            <img id="logoDesigner" src="<?php echo base_url()?>assets/img/non-projek/logo-designer.png">
            <img id="logoArtist" src="<?php echo base_url()?>assets/img/non-projek/logo-programmer.png">
        </div>
        <div class="jumbotron-fluid">
            <form action="<?php echo base_url()?>api/oprec/Login" method="POST">
                <div class="form-group">
                    <label for="NIM">Masukan NIM Anda</label>
                    <input type="number" name="nim" class="form-control" id="NIM" required placeholder="Masukan NIM Anda">
                </div>
                <div class="form-group">
                    <label for="PASSWORD">Masukan Password Anda</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <hr>
                <div class="buttonHolder">
                    <button id="buttonSubmitForm" type="submit" class="btn btn-primary">Submit</button>
                </div>




            </form>
        </div>
    </div>