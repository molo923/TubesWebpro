<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>history</title>
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  </head>
  <body class="ftco-section ftco-slant ftco-slant-light  bg-light ftco-slant ftco-slant-white" id="section-help">
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
          <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('index.php/history/hapustimbulan/'.$t->id); ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
          <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $t->id ?>"><i class="fas fa-user-edit"></i></button></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <!-- Modal Edit Mahasiswa -->

<?php foreach ($timbul as $t ) {?>
  <div class="modal fade" id="edit<?php echo $t->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA TIMBULAN <?php echo $t->id ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url(); ?>history/edittimbulan">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="id" value="<?php echo $t->id ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul"  value="<?php echo $t->kota ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Deskripsi</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi" name="deskripsi" required><?php echo $t->deskripsi ?></textarea>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Kota</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kota" name="kota" value="<?php echo $t->kota ?>" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
  </body>
</html>
