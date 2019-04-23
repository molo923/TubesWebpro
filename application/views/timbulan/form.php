<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>

    <!-- Dropzone CSS & JS -->
    <link href='<?= base_url() ?>assets/dropzone/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='<?= base_url() ?>assets/dropzone/dropzone.js' type='text/javascript'></script>
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" type="text/css">
    <!-- Dropzone CDN -->
    <!--
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    -->

    <script>
    // Add restrictions
    Dropzone.options.fileupload = {
      acceptedFiles: 'image/*',
      maxFilesize: 1 // MB
    };
    </script>
  </head>
  <body class="ftco-section ftco-slant ftco-slant-light  bg-light ftco-slant ftco-slant-white" id="section-help">
    <div class='content'>
      <!-- Dropzone -->
      <form action="<?= base_url('index.php/upload/fileupload') ?>" class="dropzone" id="fileupload">
      </form>
      <form method="POST" action="<?= base_url() ?>timbulan_C/tambah">
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupInput" placeholder="JUDUL" name="judul" required >
        </div>
        <div class="form-group">
          <textarea type="text" class="form-control" id="formGroupInput" placeholder="DESKRIPSI" name="deskripsi" required ></textarea>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupInput" placeholder="KOTA" name="kota" required >
        </div>
        <input type="submit" class="btn btn-primary" id="input" value="input" placeholder="INPUT">
      </form>
    </div>
  </body>
</html>
