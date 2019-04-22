<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>history</title>
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  </head>
  <body>
    <h1>HISTORY</h1>
    <table class="table">
      <thead>
        <tr>
          <th>JUDUL</th>
          <th>DESKRIPSI</th>
          <th>KOTA</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($timbul as $t ) {?>
        <tr>
          <td><?php echo $t->judul ?></td>
          <td><?php echo $t->deskripsi ?></td>
          <td><?php echo $t->kota ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
