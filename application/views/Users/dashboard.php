<?php
$this->load->view('templates/header');
?>
<header class="page-header">    
   <p>            
        <a href="<?php echo base_url(); ?>register" class="btn btn-primary btn-xs">Register</a>                 
    </p>
</header>
<div class="row">
    <div class="col-lg-12">           
        <div class="alert alert-success">Your registration has completed successfully.</div>            
    </div>                   
</div>
<footer class="entry-meta">
    <span class="edit-link">
        <a class="btn btn-primary btn-sm" href="http://techarise.com/create-registration-form-with-codeigniter-and-bootstrap/"><i class="fa fa-mail-reply"></i> Back To Tutorial</a>        
</footer>
<?php
$this->load->view('templates/footer');
?>