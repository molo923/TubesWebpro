<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet"> -->
  </head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <?php foreach($content->result_array() as $key) { ?>

  <!--
  User Profile Sidebar by @keenthemes
  A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
  Licensed under MIT
  -->

  <div class="container">
      <div class="row profile">
  		<div class="col-md-3">
  			<div class="profile-sidebar">
  				<!-- SIDEBAR USERPIC -->
  				<div class="profile-userpic">
  					<img src="https://cdn2.iconfinder.com/data/icons/user-interface-blue/64/User_Interface_Filled_Outline-01-512.png" class="img-responsive" alt="">
  				</div>
  				<!-- END SIDEBAR USERPIC -->
  				<!-- SIDEBAR USER TITLE -->
  				<div class="profile-usertitle">
  					<div class="profile-usertitle-name">
  						nama : <?php echo $key['nama']?>
  					</div>
  					<div class="profile-usertitle-job">

  					</div>
  				</div>
  				<!-- END SIDEBAR USER TITLE -->
  				<!-- SIDEBAR MENU -->
  				<div class="profile-usermenu">
  					<ul class="nav">
  						<li>
  							<a href="<?= base_url(); ?>help">
  							<i class="glyphicon glyphicon-user"></i>
  							Account Settings </a>
  						</li>
  					</ul>
  				</div>
  				<!-- END MENU -->
  			</div>
  		</div>
  		<div class="col-md-9">
              <div class="profile-content">
  			         <img style="width : 50px; height : 50px;"src="https://cdn1.iconfinder.com/data/icons/mini-solid-icons-vol-11/16/505-512.png">
                  <b style="font-size : 20px;">
                    berat sampah :<?php echo $key['berat sampah'] ?> kg
                  </b>
                  <br>
                  <br>
                  <img style="width : 50px; height : 50px;"src="https://cdn0.iconfinder.com/data/icons/shopping-and-ecommerce-1/38/Shopping_icons_1_Converted-09-512.png">
                   <b style="font-size : 20px;">
                     saldo tunai :Rp<?php echo $key['saldo'] ?>
                   </b>
              </div>
  		</div>
  	</div>
  </div>
<?php } ?>
  <br>
  <br>
</body>
</html>
