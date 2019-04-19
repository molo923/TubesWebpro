<html>

<head>
<title>Upload Form</title>
<!-- Dropzone CSS & JS -->
<link href='<?= base_url(); ?>assets/css/dropzone.css' type='text/css' rel='stylesheet'>
<script src='<?= base_url(); ?>assets/js/dropzone.js' type='text/javascript'></script>

<!-- Dropzone CDN -->
    <!--
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    -->

<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
<script>
    // Add restrictions
    Dropzone.options.fileupload = {
      acceptedFiles: 'image/*',
      maxFilesize: 0
    };
</script>

</head>

<body>
	<div class='content'>
      <form action="<?= base_url(); ?> upload/do_upload" class="dropzone" id="fileupload">
      </form>
  </div>
</body>
</html>
