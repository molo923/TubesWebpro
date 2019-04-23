<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/registerstyle.css')?>" rel="stylesheet">
</head>
<div class="row page-content">
    <div class="container">
  <div class="col-lg-12">
      <h2 align="center">Register Form</h2>
    <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
    <?php echo form_open('users/actionregister'); ?>
      <div class="form-group" align="center">
         <input type="text" name="name" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group">
         <input type="text" name="username" class="form-control" id="username" placeholder="User Name">
      </div>
      <div class="form-group">
         <input type="text" name="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="form-group">
         <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>
      <div class="form-group">
         <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="Confirm Password">
      </div>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <div class="form-group"> <!--pull-right-->
         <button type="submit" id="register" class="registerbtn">Register</button>
      </div>
      <!--UNTUK BAGOES, JANGAN LUPA ISI LINK SIGN IN/LOGIN DI HREFNYA-->
      <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
      </div>
    </div>
    </div>
    <?php echo form_close(); ?>
</div>
</html>
