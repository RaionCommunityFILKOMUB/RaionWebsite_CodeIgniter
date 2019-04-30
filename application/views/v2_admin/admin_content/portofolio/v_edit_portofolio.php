<div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Edit Portofolio</h3>
        </div>

        <?php foreach ($portofolios as $portofolio) { ?>

        <?php 
        $dateStart;
        $dateEnd;
        if ($portofolio['portofolio_date_end']==null) {
            $dateEnd = NULL;
        } else {
            $dateEnd = date('Y-m-d',strtotime($portofolio['portofolio_date_end']));
        }
        if ($portofolio['portofolio_date_start']==null) {
            $dateStart = NULL;
        } else {
            $dateStart = date('Y-m-d',strtotime($portofolio['portofolio_date_start']));
        }
        ?>

        <form role="form" action="submit_edit_portofolio/<?php echo $portofolio['portofolio_id']; ?>" 
            method="POST" 
            enctype="multipart/form-data">
                
            <div class="box-body">

                    <div class="form-group">
                    <label for="">ID <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_edit_judul"
                        value="<?php echo $portofolio['portofolio_id']; ?>" disabled>
                    </div>

                    <div class="form-group">
                    <label for="">Judul <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_edit_judul" 
                        placeholder="Tuliskan Judul" 
                        value="<?php echo $portofolio['portofolio_title']; ?>" required>
                    </div>
        
                    <!-- Kategori (Dropdown) -->
                    <div class="form-group">
                        <label>Kategori <code class="">(*)</code></label>
                        <select class="form-control input-lg" name="form_edit_kategori" required>
                            <option><?php echo $portofolio['portofolio_category']; ?></option>
                            <option>Aplikasi</option>
                            <option>Game</option>
                            <option>Projek</option>
                        </select>
                    </div>
                    
                    <hr>
                    
                    <div class="col-md-6">
                        <!-- Angkatan (Dropdown) -->
                        <div class="form-group">
                            <label>Tanggal Mulai <code class="">(*)</code></label>
                            <input type="date" class="form-control" id="datepicker" 
                            name="form_edit_datestart" 
                            value="<?php echo $dateStart;?>"
                            required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Selesai <code class="">(*)</code></label>
                            <input type="date" class="form-control" id="datepicker"
                            name="form_edit_dateend"
                            value="<?php echo $dateEnd;?>"
                            required>
                        </div>
                    </div>

                    <hr>
        
                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label>Deskripsi <code class="">(*)</code></label>
                        <br>
                        <textarea name="form_edit_deskripsi" cols="100" rows="15" required>
                            <?php echo $portofolio['portofolio_description']; ?>
                        </textarea>
                    </div>
                    
                    <hr>
        
                    <div class="form-group">
                        <label for="">Gambar Thumbnail : </label>
                        <br>
                        <img class="img-kecil" src="<?php echo base_url('images/portofolio_img_thumb/').$portofolio['portofolio_img_thumb']?>">
                        <input class="form-control input-lg" type="file" name="form_edit_thumbnail" multiple="multiple">
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Screenshot 1 : </label>
                            <br>
                            <img class="img-kecil" src="<?php echo base_url('images/portofolio_img_thumb/').$portofolio['portofolio_img_ss1']?>">
                            <input class="form-control input-lg" type="file" name="form_edit_ss1" multiple="multiple">
                        </div>
                        <div class="col-md-4">
                            <label for="">Screenshot 2 : </label>
                            <br>
                            <img class="img-kecil" src="<?php echo base_url('images/portofolio_img_thumb/').$portofolio['portofolio_img_ss2']?>">
                            <input class="form-control input-lg" type="file" name="form_edit_ss2" 
                            multiple="multiple">
                        </div>
                        <div class="col-md-4">
                            <label for="">Screenshot 3 : </label>
                            <br>
                            <img class="img-kecil" src="<?php echo base_url('images/portofolio_img_thumb/').$portofolio['portofolio_img_ss3']?>">
                            <input class="form-control input-lg" type="file" name="form_edit_ss3"
                            multiple="multiple">
                        </div>
                    </div>

        <?php }  ?>
        <!-- endforeach -->

            </div>
            <!-- /.box-body -->
            
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    SIMPAN PERUBAHAN
                </button>

                <a type="button" class="btn btn-danger" 
                    href="<?php echo base_url('admin/portofolio/edit/hapus_portofolio/').$portofolio['portofolio_id']; ?>">HAPUS PORTOFOLIO
                </a>

                <a type="button" class="btn btn-warning" 
                    href="<?php echo base_url() ?>admin/portofolio/produk">Batal
                </a>
                
            </div>
            <!-- /.box-footer -->

        </form>
        <!-- /.form-Edit -->
                    
    </div>