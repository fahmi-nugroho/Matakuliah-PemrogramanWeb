<?php
  include 'conn.php';

  if (isset($_POST['jenjang'])) {
    $jenjang = $_POST['jenjang'];
    $namaSekolah = $_POST['namaSekolah'];
    $alamatSekolah = $_POST['alamatSekolah'];

    $query = "INSERT INTO pendidikan VALUES('', '$jenjang','$namaSekolah','$alamatSekolah')";
    $result = mysqli_query(connection(),$query);
    if ($result) {
      echo "<div class='alert alert-success alert-dismissible fade show'>Data Berhasil Ditambahkan
              <button class='close' type='button' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";
    }
    else {
      echo "<div class='alert alert-danger alert-dismissible fade show'>Data Gagal Ditambahkan !
              <button class='close' type='button' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";
    }
  }
 ?>
