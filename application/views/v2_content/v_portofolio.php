<body style="margin-top: 100px;">


<div class="container" style="min-width: 95%;">
<section class="wrapper-portofolio">
  <div class="row">
    <div class="col-md-6">
      <h1 class="main-title animated slideInLeft">Jelajahi Karya Kami</h1>
      <p class="desc animated-two zoomIn">Berikut adalah apa saja yang sudah kami kerjakan selama ini baik itu produk berbentuk Aplikasi/Game maupun projek dengan klien</p>
    </div>
  </div>
</section>
</div>

<div class="container-fluid animated-three zoomIn">

<div class="row">
  <div class="col-md-12">
    <nav class="nav nav-pills nav-justified" id="myBtnContainer">
      <a class="nav-link active" href="#" onclick="filterSelection('All');">All</a>
      <a class="nav-link active" href="#" onclick="filterSelection('Aplikasi');">Aplikasi</a>
      <a class="nav-link active" href="#" onclick="filterSelection('Game');">Game</a>
      <a class="nav-link active" href="#" onclick="filterSelection('Projek');">Projek</a>
    </nav>
  </div>
</div>

<div class="row">

    <?php
    $color = 1;
    foreach ($portofolios as $portofolio) {
        # code...
        $backgroundColor;
        
        if ($color>5) {
            $color=1;
        }
        switch ($color) {
            case 1:
                $backgroundColor = "wrapper-circle-four";
                break;
            case 2:
                $backgroundColor = "wrapper-circle-five";
                break;
            
            case 3:
                $backgroundColor = "wrapper-circle-six";
                break;

            case 4:
                $backgroundColor = "wrapper-circle-two";
                break;

            default:
                $backgroundColor = "wrapper-circle";
                break;
        }
        $color++;
    ?>

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 no-padding filterDiv <?php echo  $portofolio['portofolio_category']; ?>">
        <a target="_blank" href="<?php echo base_url(); ?>portofolio/<?php echo $portofolio['portofolio_slug']; ?>">
          <div class="wrapper-projek">
            <img src="<?php echo base_url()."images/portofolio_img_thumb/".$portofolio['portofolio_img_thumb']; ?>" alt="" width="100%" height="auto" class="img-fluid">
            <div class="<?php echo  $backgroundColor; ?>">
              <div class="circle" style="background-image:url('<?php echo  base_url()."images/portofolio_img_thumb/".$portofolio['portofolio_img_thumb']; ?>');"></div>
              <h2 class="main-title-projek"><?php echo $portofolio['portofolio_title'] ; ?></h2>
              <p class="sub-title-projek"><?php echo strftime("%d %B %Y",  strtotime($portofolio['portofolio_date_start']) ); ?></p>
            </div>
          </div>
        </a>
    </div>

    <?php
    } //end foreach
    ?>

</div>
<!-- /.row -->  

</div>
    
</body>