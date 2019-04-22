<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Landing</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/Landing/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/Landing/css/mdb.min.css')?>" rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/Landing/css/style.css')?>" rel="stylesheet">

</head>

<body>

  <!-- Start your project here-->

<!--Main Navigation-->
<header>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light primary-color bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href=<?= base_url(); ?>>Smash</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>history">History</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>help">Help</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>profile">Profile</a>
                </div>
            </div>
        </div>
    </nav>
<!--/.Navbar-->
</header>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
