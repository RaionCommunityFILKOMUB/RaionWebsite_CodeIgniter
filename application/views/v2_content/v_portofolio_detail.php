
<?php foreach ($portofolio as $portofolio) {
  # code...
?>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src=" <?php echo base_url().'images/portofolio_img_thumb/'.$portofolio['portofolio_img_thumb']; ?> " alt="First slide">
        </div>
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  
    <div class="container-fluid" id="detail-project">
      <div class="row">
        <div class="col-md-4">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Kategori
                  </button>
                </h5>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <?php echo $portofolio['portofolio_category']; ?>
                </div>
              </div>
            </div>

            <!-- <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Anggota Tim
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p><?php echo $member['member_name'] ?></p>
                </div>
              </div>
            </div> -->

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tanggal
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <?php strftime("%d %B %Y",  strtotime($portofolio['portofolio_date_start']) ) ?> <br>
                  <small>s/d</small> <br>
                  <?php strftime("%d %B %Y",  strtotime($portofolio['portofolio_date_end']) ) ?>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Klien
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  -
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Link
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  -
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-8">
          <h3><?php echo $portofolio['portofolio_title']; ?></h3>
          <p style="text-align : justify;">
            <?php echo $portofolio['portofolio_description'];?>
          </p>
          <img src="<?php echo base_url().'images/portofolio_img_thumb/'.$portofolio['portofolio_img_ss1'];?>" alt="<?php echo $portofolio['portofolio_slug']?>" class="img-thumbnail">
          <img src="<?php echo base_url().'images/portofolio_img_thumb/'.$portofolio['portofolio_img_ss2'];?>" alt="<?php echo $portofolio['portofolio_slug']?>" class="img-thumbnail">
          <img src="<?php echo base_url().'images/portofolio_img_thumb/'.$portofolio['portofolio_img_ss3'];?>" alt="<?php echo $portofolio['portofolio_slug']?>" class="img-thumbnail">
        </div>
      </div>
    </div>

   <?php
  }
  ?>