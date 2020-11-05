<?php
  include ('conn.php');

  if (isset($_GET['id_barang'])) {

    $id = $_GET['id_barang'];
    $query = "DELETE FROM barang WHERE id_barang = '$id'";

    $result = mysqli_query(connection(),$query);

    if ($result) {
      echo "<script>
              alert('Data Barang Berhasil Dihapus !');
              window.location = 'index.php';
            </script>";
    }
    else{
      echo "<script>
              alert('Data Barang Gagal Dihapus !');
              window.location = 'index.php';
            </script>";
    }
  }
