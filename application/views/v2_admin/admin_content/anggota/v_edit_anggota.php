<div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Edit Biodata Anggota</h3>
        </div>
        
        <?php foreach ($members as $member) { ?>

        <form role="form" action="submit_update_biodata/<?php echo $member['member_id']; ?>" 
            method="POST" 
            enctype="multipart/form-data">
                
            <div class="box-body">
                
                    <div class="form-group">
                    <label for="">NIM <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_edit_nim" 
                        placeholder="Masukkan NIM (15 Digit)" 
                        value="<?php echo $member['member_id'] ?>"
                        disabled>
                    </div>
        
                    <div class="form-group">
                    <label for="">Nama Lengkap <code class="">(*)</code></label>
                    <input type="text" class="form-control input-lg" name="form_edit_nama" 
                        placeholder="Masukkan Nama Lengkap" 
                        value="<?php echo  $member['member_name'] ?>"
                        required>
                    </div>
                    
                    <div class="col-md-6">
                        <!-- Angkatan (Dropdown) -->
                        <div class="form-group">
                            <label>Angkatan <code class="">(*)</code></label>
                            <select class="form-control input-lg" name="form_edit_angkatan" required>
                                <option><?php echo $member['member_angkatan'] ?></option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <!-- Program Studi (Dropdown) -->
                        <div class="form-group">
                            <label>Program Studi <code class="">(*)</code></label>
                            <select class="form-control input-lg" name="form_edit_prodi" required>
                                <option><?php echo $member['member_prodi'] ?></option> 
                                <option>Teknik Informatika</option>
                                <option>Teknik Komputer</option>
                                <option>Pendidikan Teknologi Informasi</option>
                                <option>Sistem Informasi</option>
                                <option>Teknologi Informasi</option>
                            </select>
                        </div>
                    </div>
                    
                    <hr>
        
                    <!-- Divisi Desainer, Artist, Programmer (Dropdown) -->
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Divisi <code class="">(*)</code></label>
                        <select class="form-control input-lg" name="form_edit_divisi" required>
                            <option><?php echo $member['member_division'] ?></option>
                            <option>Programmer</option>
                            <option>Artist</option>
                            <option>Designer</option>
                        </select>
                        </div>
                    </div>

                    <!-- Jabatan,  -->
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control input-lg" name="form_edit_jabatan">
                            <option><?php echo $member['member_jabatan'] ?></option>
                            <option></option>
                            <option>Ketua Umum</option>
                            <option>Wakil Ketua Umum</option>
                            <option>Administrasi</option>
                            <option>Bendahara</option>
                            <option>Kadiv Designer</option>
                            <option>Kadiv Artist</option>
                            <option>Kadiv Programmer</option>
                            <option>Kadiv Produksi</option>
                            <option>Kadiv Pengawasan</option>
                            <option>Kadiv Marketing</option>
                            <option>Kadiv Eksternal</option>
                        </select>
                        </div>
                    </div>
        
                    <hr>
        
                    <!-- Link Sosial Media (Optional) -->
                    <div class="form-group">
                    <label for="">Link (Instagram)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_ig" 
                        value="<?php echo $member['member_ig'] ?>"
                        placeholder="Link Profil Instagram">
                    </div>
                    </div>
        
                    <div class="form-group">
                    <label for="">Link (Twitter)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_twitter" 
                        value="<?php echo $member['member_sosmed3'] ?>"
                        placeholder="Link Profil Linkedin">
                    </div>
                    </div>
        
                    <div class="form-group">
                    <label for="">Link (Facebook)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook-f"></i></span>
                        <input type="url" class="form-control input-lg" name="form_edit_fb" 
                        value="<?php echo $member['member_fb'] ?>"
                        placeholder="Link Profil Facebook">
                    </div>
                    </div>
                    <!-- End Sosial Media -->
        
                    <hr>
        
                    <div class="form-group">

                        <label for="">Foto Profil</label>
                        <br>
                        <?php if (isset($member['member_photo'])) {?>
                            <img class="img-kecil" src="<?php echo base_url('images/member_photo/').$member['member_photo'] ?>" 
                            alt="User Image">
                        <?php } ?>

                        <input class="form-control input-lg" type="file" name="form_edit_foto" 
                            value="<?php echo $member['member_photo'];?>">
                        
                        <p class="help-block">
                            Gunakan Foto Background Putih + Pakai Jaket Raion
                        </p>

                    </div>
                    
            <?php }  ?>
            <!-- endforeach -->
            
            <!-- Kirimkan Method PUT (hidden) jika ingin Update -->
            <!-- <input type="hidden" name="_method" value="PUT"> -->

            </div>
            <!-- /.box-body -->
    
            <div class="box-footer">

                <button type="submit" class="btn btn-primary">
                    SIMPAN PERUBAHAN
                </button>

                <a type="button" class="btn btn-danger" 
                    href="<?php echo base_url() ?>admin/anggota/edit/hapus_anggota/<?php echo $member['member_id'];?>">HAPUS ANGGOTA
                </a>

                <a type="button" class="btn btn-warning" 
                    href="<?php echo base_url() ?>admin/anggota/anggota_aktif">Batal
                </a>
                
            </div>
            <!-- /.box-footer -->

        </form>
        <!-- /.form-Edit -->
            
            
        
    </div>