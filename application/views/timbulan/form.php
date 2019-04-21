<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>

    <!-- Dropzone CSS & JS -->
    <link href='<?= base_url() ?>assets/dropzone/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='<?= base_url() ?>assets/dropzone/dropzone.js' type='text/javascript'></script>
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
  <body>

    <div class='content'>
      <!-- Dropzone -->
      <form action="<?= base_url('index.php/upload/fileupload') ?>" class="dropzone" id="fileupload">
      </form>
      <form class="" action="index.html" method="post">
          <input type="text" name="judul" placeholder="judul">
          <textarea type="text" name="deskripsi" placeholder="deskripsi"></textarea>
          <input type="text" name="kota" placeholder="kota">
      </form>
    </div>

  </body>
</html>
