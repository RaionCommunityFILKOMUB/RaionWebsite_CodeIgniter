<div class="box box-primary">

        <div class="box-header">
            <a class="btn btn-social btn-default" 
                href="<?php echo base_url() ?>admin/portofolio/tambah_portofolio">
                <i class="fa fa-plus-square"></i>
                Tambah Portofolio
            </a>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped dataTable" role="grid">
                <thead>
                    <tr role="row">
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Menampilkan semua Portofolio ke dalam Tabel -->
                    <?php foreach ($portofolios as $portofolio) { ?>
                        <tr role="row" class="odd">
                            <td> <?php echo $portofolio['portofolio_title'] ?> </td>
                            <td>
                                <?php if ( $portofolio['portofolio_category'] == "Aplikasi" ) {?>
                                    <small class="label bg-green"><?php echo $portofolio['portofolio_category'] ?></small>
                                <?php } elseif( $portofolio['portofolio_category'] == "Game") {?>
                                    <small class="label bg-yellow"><?php echo $portofolio['portofolio_category'] ?></small>
                                <?php } elseif ( $portofolio['portofolio_category'] == "Projek" ) {?>
                                    <small class="label bg-red"><?php echo $portofolio['portofolio_category'] ?></small>
                                <?php } else { ?>
                                    <small class="label bg-blue"><?php echo $portofolio['portofolio_category'] ?></small>
                                <?php } ?>
                                <!-- endif -->
                            </td>
                            <td> <?php echo strftime("%d %B %Y",  strtotime($portofolio['portofolio_date_start']) ); ?> </td>
                            <td>
                                <!-- Edit Data Anggota -->
                                <a class="btn btn-primary" 
                                href="<?php echo base_url();?>admin/portofolio/edit/<?php echo $portofolio['portofolio_id'] ?>">Lihat</a>
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