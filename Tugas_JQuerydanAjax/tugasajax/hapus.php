<?php
include ('conn.php');

if (isset($_POST['id'])) {

  $id = $_POST['id'];
  $query = "DELETE FROM pendidikan WHERE id_pendidikan = $id";

  $result = mysqli_query(connection(),$query);

  return $result;
}
?>
