<?php
  include 'conn.php';

  if (isset($_POST['kategori_barang'])) {
    $kategori = $_POST['kategori_barang'];
    $query = "INSERT INTO kategori (id_kategori, nama_kategori) VALUES(NULL,'$kategori')";

    $result = mysqli_query(connection(),$query);
    if ($result) {
      echo "<script>
              alert('Data Kategori Berhasil Disimpan !');
              window.location = 'kategori.php';
            </script>";
    }
    else {
      echo "<script>
              alert('Data Kategori Gagal Disimpan !');
              window.location = 'kategori.php';
            </script>";
    }
  }

  if (isset($_POST['kategori'])) {
    $idkategori = $_POST['idkategori'];
    $nama = $_POST['kategori'];
    $query = "UPDATE kategori SET id_kategori='$idkategori', nama_kategori='$nama' WHERE id_kategori='$idkategori'";

    $result = mysqli_query(connection(),$query);
    if ($result) {
      echo "<script>
              alert('Data Kategori Berhasil Diupdate !');
              window.location = 'kategori.php';
            </script>";
    }
    else {
      echo "<script>
              alert('Data Kategori Gagal Diupdate !');
              window.location = 'kategori.php';
            </script>";
    }
  }

  if (isset($_GET['id_kategori'])) {

    $id = $_GET['id_kategori'];
    $query = "DELETE FROM kategori WHERE id_kategori = '$id'";

    $result = mysqli_query(connection(),$query);

    if ($result) {
      echo "<script>
              alert('Data Kategori Berhasil Dihapus !');
              window.location = 'kategori.php';
            </script>";
    }
    else{
      echo "<script>
              alert('Data Kategori Gagal Dihapus !');
              window.location = 'kategori.php';
            </script>";
    }
  }

  if (isset($_GET['id'])) {
    $id_kategori = $_GET['id'];
    $query1 = "SELECT * FROM kategori WHERE id_kategori = $id_kategori";
    $result1 = mysqli_query(connection(),$query1);
    $data1 = mysqli_fetch_array($result1);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <title>Toko Pak Adi</title>
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Kembali Ke Menu Barang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <div class="container mt-5" id="tempat-muncul">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID_Kategori</th>
            <th scope="col">Nama_Kategori</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM kategori";
          $result = mysqli_query(connection(),$query);
          while ($data = mysqli_fetch_array($result)) : ?>
          <tr>
            <th scope="row"><?php echo $data['id_kategori'] ?></th>
            <td><?php echo $data['nama_kategori'] ?></td>
            <td>
              <a href="<?php echo "kategori.php?id=".$data['id_kategori'] ?>" class="btn btn-warning">Ubah</a>
              <a href="<?php echo "kategori.php?id_kategori=".$data['id_kategori'] ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php
          endwhile ?>
        </tbody>
      </table>
      <?php if (isset($_GET['id'])) : ?>
        <form action="kategori.php" method="post">
          <div class="form-group">
            <!-- <label for="input_idkategori">ID Kategori</label> -->
            <input type="hidden" class="form-control" id="input_idkategori" name="idkategori" value="<?php echo $data1['id_kategori'] ?>" placeholder="Kategori Barang" required>
          </div>
          <div class="form-group">
            <label for="input_kategori">Kategori Barang</label>
            <input type="text" class="form-control" id="input_kategori" name="kategori" value="<?php echo $data1['nama_kategori'] ?>" placeholder="Kategori Barang" required>
          </div>
          <button type="submit" class="btn btn-warning">Ubah Kategori</button>
        </form>
      <?php else : ?>
        <form action="kategori.php" method="post">
          <div class="form-group">
            <label for="input_kategori">Kategori Barang</label>
            <input type="text" class="form-control" id="input_kategori" name="kategori_barang" placeholder="Kategori Barang" required>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Kategori</button>
        </form>
      <?php endif ?>
    </div>
  </body>
</html>
