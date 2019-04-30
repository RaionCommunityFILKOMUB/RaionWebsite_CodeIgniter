<div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Tambah Portofolio</h3>
        </div>

        <form role="form" action="tambah_portofolio/submit_tambah_portofolio" 
            method="POST" 
            enctype="multipart/form-data">
                
            <div class="box-body">
                
                    <div class="form-group">
                    <label for="">Judul <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_tambah_judul" 
                        placeholder="Tuliskan Judul" 
                        value="" required>
                    </div>
        
                    <!-- Kategori (Dropdown) -->
                    <div class="form-group">
                        <label>Kategori <code class="">(*)</code></label>
                        <select class="form-control input-lg" name="form_tambah_kategori" required>
                            <option>Aplikasi</option>
                            <option>Game</option>
                            <option>Tambah</option>
                        </select>
                    </div>
                    
                    <hr>
                    
                    <div class="col-md-6">
                        <!-- Angkatan (Dropdown) -->
                        <div class="form-group">
                            <label>Tanggal Mulai <code class="">(*)</code></label>
                            <input type="date" name="form_tambah_datestart" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Selesai </label>
                            <input type="date" name="form_tambah_dateend">
                        </div>
                    </div>

                    <hr>
        
                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label>Deskripsi <code class="">(*)</code></label>
                        <br>
                        <textarea name="form_tambah_deskripsi" cols="100" rows="15" required></textarea>
                    </div>
                    
                    <hr>
        
                    <div class="form-group">
                        <label for="">Gambar Thumbnail : </label>
                        <br>
                        <input class="form-control input-lg" type="file" name="form_tambah_thumbnail" multiple="multiple" required>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Screenshot 1 : </label>
                            <br>
                            <input class="form-control input-lg" type="file" name="form_tambah_ss1" multiple="multiple" >
                        </div>
                        <div class="col-md-4">
                            <label for="">Screenshot 2 : </label>
                            <br>
                            <input class="form-control input-lg" type="file" name="form_tambah_ss2" multiple="multiple">
                        </div>
                        <div class="col-md-4">
                            <label for="">Screenshot 3 : </label>
                            <br>
                            <input class="form-control input-lg" type="file" name="form_tambah_ss3" multiple="multiple">
                        </div>
                    </div>

            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    EDIT
                </button>

                <a type="button" class="btn btn-warning" 
                    href="<?php echo base_url() ?>admin/portofolio/produk">Batal
                </a>
                
            </div>
            <!-- /.box-footer -->

        </form>
        <!-- /.form-Edit -->
                    
    </div>