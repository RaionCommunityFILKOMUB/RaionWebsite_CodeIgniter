<html>
<title> <?php echo $title_page; ?> </title>
<div class="container">
    <div class="row justify-content-center" style="margin-top:100px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>AdminRawr</b>
                
                </div>

                <div class="card-body">
                    <form method="POST" action="admin-login-auth" aria-label="">

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="input-nim" type="text" class="" name="_nim_input" required autofocus
                                placeholder="username" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="input-password" type="password" class="f" name="_password_input" required autofocus
                                placeholder="password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    Buka Kandang
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <br>
            <a href="<?php echo base_url()?>">< Beranda</a>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #EF9A04;
    }
    .card-header {
        background-color: #0D0E5E;
        color: white;
    }
    .btn-warning {
        background-color: #EF9A04;
        color: white;
    }
    a {
        color : white;
    }


</style>

</html>