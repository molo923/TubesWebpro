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
              <td><?php echo $d->nama ?></td>
              <td><?php echo $d->alamat ?></td>
              <td><?php echo $d->massa ?></td>


              <!--BUTTON EDIT MAHASISWA-->

            </form>
          </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
</div>

<!-- Modal Edit Mahasiswa -->

</html>
