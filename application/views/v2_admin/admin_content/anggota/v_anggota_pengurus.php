<div class="box box-primary">

        <div class="box-header">
            <a class="btn btn-social btn-success" 
                href="<?php echo base_url() ?>admin/anggota/tambah_anggota">
                <i class="fa fa-plus-square"></i>
                Tambah Anggota
            </a>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Angkatan</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Menampilkan semua Anggota ke dalam Tabel -->
                    <?php foreach ($members as $member) { ?>
                        <tr role="row" class="odd">
                            <td> <?php echo $member['member_id'] ?> </td>
                            <td> <?php echo $member['member_name'] ?> </td>
                            <td> <?php echo $member['member_jabatan'] ?> </td>
                            <td>
                                <?php if ( $member['member_division'] == "Designer" ) {?>
                                    <small class="label bg-green"><?php echo $member['member_division'] ?></small>
                                <?php } elseif( $member['member_division'] == "Artist") {?>
                                    <small class="label bg-yellow"><?php echo $member['member_division'] ?></small>
                                <?php } elseif ( $member['member_division'] == "Programmer" ) {?>
                                    <small class="label bg-red"><?php echo $member['member_division'] ?></small>
                                <?php } else { ?>
                                    <small class="label bg-blue"><?php echo $member['member_division'] ?></small>
                                <?php } ?>
                                <!-- endif -->
                            </td>
                            <td> <?php echo $member['member_angkatan'] ?> </td>
                            <td>
                                <!-- Edit Data Anggota -->
                                <a class="btn btn-primary" 
                                href="<?php echo base_url();?>admin/anggota/edit/<?php echo $member['member_id'] ?>">Lihat</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <!-- endforeach -->

                </tbody>
                <tfoot>

                </tfoot>

            </table>
        </div>
        <div class="box-footer">

        </div>

    </div>

    <script>
        $(document).ready(function () {

            var menuParameter = "<?php echo $content_title ?>" ;
            
            // Left-Menu parameter activation
            if (menuParameter == "Anggota Aktif") {
                $('#menu_anggota').addClass(" active");
                $('#menu_anggota_aktif').addClass("active");
            } else {
                $('#menu_anggota').addClass(" active");
                $('#menu_anggota_pengurus').addClass("active");
            }

            // Data Tables
            $('.dataTable').DataTable();
        });
    </script>