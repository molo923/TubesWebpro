<html>
    <head>
        <title>Registration Succeed!!!</title>
    </head>
    <body>
        <?php
        $this->load->view('templates/header');
        ?>
        <div class="row">
            <div class="col-lg-12">           
            <div class="alert alert-success" style="margin:120px 30px 0 30px">Your registration has completed successfully.</div>
            <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>home"> <i class="fa fa-mail-reply"></i> Proceed to Home</a>
        </div>                   
        </div>
        <?php
        $this->load->view('templates/footer');
        ?>
    </body>
</html>