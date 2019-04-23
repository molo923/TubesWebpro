<div class="container">
  <div class="box">
    <h2>  </br>

    </h2>
    <p></br>  </p>
    <p> </br> </p>
    <p></p>
    <p></p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH MAHASISWA</button>
    <br><br>
    <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th>No</th>
          <th>ID Penjemputan</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Massa</th>
          <th>Edit</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>
        	<?php $no=1; foreach ($datajemput as $d ) {?>
          <tr>
        <!<form action="">

              <td><?php echo $no++ ?></td>
              <td><?php echo $d->id_jemput ?></td>
              <td><?php echo $d->nama ?></td>
              <td><?php echo $d->alamat ?></td>
              <td><?php echo $d->massa_sampah ?></td>


              <!--BUTTON EDIT MAHASISWA-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id_jemput ?>"><i class="fas fa-user-edit"></i></button></td>
            <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
            <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('index.php/jemputsampah/hapus_jemput/'.$d->nama); ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
</div>


<?php $no=1; foreach ($datajemput as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->id_jemput ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA MAHASISWA <?php echo $d->id_jemput ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url('index.php/jemputsampah/editjemput'); ?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id_jemput" name="id_jemput" value="<?php echo $d->id_jemput ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"  value="<?php echo $d->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Kelas</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="alamat" name="alamat" value="<?php echo $d->alamat ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Massa Sampah</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="massa_sampah" name="massa_sampah" value="<?php echo $d->massa_sampah ?>" required>
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


<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA MAHASISWA</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('index.php/jemputsampah/tambahjemput'); ?>">
        <div class="form-group">
          <label for="formGroupExampleInput">ID Jemput</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="id_jemput" name="id_jemput" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Alamat</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="alamat" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Massa Sampah</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="massa_sampah" name="massa_sampah" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>


</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
<!-- Modal Edit Mahasiswa -->

</html>
