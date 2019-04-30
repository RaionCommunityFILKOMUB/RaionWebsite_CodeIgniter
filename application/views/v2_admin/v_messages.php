<html>
<title> <?php echo $title_page; ?> </title>
<div class="container">
    <div class="row justify-content-center" style="margin-top:100px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><?php echo $title_page?></b>
                
                </div>

                <div class="card-body">
                    <?php echo $messages; ?>
                </div>

                <div class="card-footer">
                    <div class="col-md-10 offset-md-4">
                        <a href="<?php echo base_url($ok_button_url);?>" class="btn btn-primary">
                            <?php echo $ok_button_msg;?>
                        </a>
                        <a href="<?php echo base_url($cancel_button_url);?>" class="btn">
                            <?php echo $cancel_button_msg;?>
                        </a>
                    </div>
                </div>

            </div>
            <br>
        </div>
    </div>
</div>

<style>
    /* body {
        background-color: #0D0E5E;
    }
    .card-header {
        background-color: #EF9A04;
        color: white;
    }
    .btn-warning {
        background-color: #0D0E5E;
        color: white;
    } */


</style>

</html>