<html>
<!-- Bagian Script -->
<!-- Script yang sama untuk semua halaman -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<!-- Custom Script -->
<script src="<?php echo base_url();?>assets/js/script.js"></script>

<!-- FadeScroll -->
<script src="<?php echo base_url();?>assets/js/fadeScroll.js"></script>

<!-- {{-- Slick Carousel --}} -->
<script src="<?php echo base_url();?>assets/bower_components/slick/slick/slick.min.js"></script>

<script>
    // Link pada Navbar berubah ketika aktif/nonaktif
        var navParameter = "<?php echo $nav_menu; ?>" ;
        
        // Navigation Menu Active Indicator
        if (navParameter == "index") {
          $('#menu_index').addClass(" link-active");
        }
        else if (navParameter == "portofolio") {
          $('#menu_portofolio').addClass(" link-active");
        }
        else if (navParameter == "anggota") {
          $('#menu_anggota').addClass(" link-active");
        }
        else if (navParameter == "tentang") {
          $('#menu_tentang').addClass(" link-active");
        }
        else if (navParameter == "proker") {
          $('#menu_proker').addClass(" link-active");
        }
        else  {

        }

</script>



</html>