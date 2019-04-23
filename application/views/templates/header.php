<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/Landing/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/Landing/css/mdb.min.css')?>" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/Landing/css/style.css')?>" rel="stylesheet">


    <title><?php echo $judul ?></title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark fixed-top">
          <div class="container">
              <a class="navbar-brand" href="<?= base_url(); ?>home">Smash</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-item nav-link" href="<?= base_url(); ?>home">Home</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>history">History</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>help">Help</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>profile">Profile</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>Landing">Logout</a>
                  </div>
              </div>
          </div>
      </nav>
