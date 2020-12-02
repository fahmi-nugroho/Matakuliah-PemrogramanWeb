<?php
  include 'conn.php';

  $query = "SELECT * FROM pendidikan";
  $result = mysqli_query(connection(),$query);
  while ($data = mysqli_fetch_array($result)):
 ?>
 <div class="row">
   <div class="col-6">
     <h5><?php echo $data['jenjang'] ?></h5>
   </div>
   <div class="col-6">
     <button type="button" class="btn btn-danger" name="button" onclick="hapus(<?= $data['id_pendidikan'] ?>)">Hapus</button>
   </div>
 </div>
 <p>
   <?php echo $data['nama_sekolah'] ?>
   <br>
   <?php echo $data['alamat'] ?>
 </p>
<?php endwhile ?>
