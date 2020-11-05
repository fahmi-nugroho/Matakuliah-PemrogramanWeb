<?php
  include ('conn.php');

  if (isset($_GET['id_barang'])) {
    $id = $_GET['id_barang'];
    $query = "SELECT * FROM barang WHERE id_barang = '$id'";

    $result = mysqli_query(connection(),$query);
    $data = mysqli_fetch_array($result);
  }

  if (isset($_POST['sku_barang'])) {
      $sku = $_POST['sku_barang'];
      $nama = $_POST['nama_barang'];
      $kategori = $_POST['kategori'];
      $stok = $_POST['stok_barang'];
      $harga = $_POST['harga_satuan'];

      $sql = "UPDATE barang SET id_barang='$sku', nama_barang='$nama', id_kategori='$kategori', jumlah_stock='$stok', harga_satuan=$harga WHERE id_barang='$sku'";

      $result = mysqli_query(connection(),$sql);
      if ($result) {
        echo "<script>
                alert('Data Barang Berhasil Diupdate !');
                window.location = 'index.php';
              </script>";
      }
      else{
        echo "<script>
                alert('Data Barang Gagal Diupdate !');
                window.location = 'index.php';
              </script>";
      }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <html>
      <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.min.js" charset="utf-8"></script>
        <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
        <title>Toko Pak Adi</title>
      </head>
      <body>
        <nav class="navbar navbar-expand navbar-light bg-light">
          <a class="navbar-brand" href="index.php">Ubah Data Barang</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>

        <div class="container mt-5">
        <form action="update.php" method="post">
          <div class="form-group">
            <label for="input_sku">SKU Barang</label>
            <input type="text" class="form-control" id="input_sku" name="sku_barang" value="<?php echo $data['id_barang'] ?>" placeholder="SKU Barang" required>
          </div>
          <div class="form-group">
            <label for="input_nama">Nama Barang</label>
            <input type="text" class="form-control" id="input_nama" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" placeholder="Nama Barang" required>
          </div>
          <div class="form-group">
            <label for="input_kategori">Kategori</label>
            <select class="custom-select" id="input_kategori" name="kategori" required>
              <?php
                $id = $data['id_kategori'];
                $query2 = "SELECT * FROM kategori WHERE id_kategori = $id";
                $result2 = mysqli_query(connection(),$query2);
                $data2 = mysqli_fetch_array($result2);
              ?>
              <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data2['nama_kategori'] ?></option>
              <?php
                $query1 = "SELECT * FROM kategori";
                $result1 = mysqli_query(connection(),$query1);
                $data1 = mysqli_fetch_array($result1);
                $i = 1;
                while ($data1 = mysqli_fetch_array($result1)) :
              ?>
              <option value="<?php echo $i ?>"><?php echo $data1['nama_kategori'] ?></option>
              <?php
                $i++;
                endwhile
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="input_jumlah">Stok Barang</label>
            <input type="text" class="form-control" id="input_jumlah" name="stok_barang" pattern="^[0-9]*$" value="<?php echo $data['jumlah_stock'] ?>" placeholder="Stok Barang" required>
          </div>
          <div class="form-group">
            <label for="input_harga">Harga Satuan</label>
            <input type="text" class="form-control" id="input_harga" name="harga_satuan" pattern="^[0-9]*$" value="<?php echo $data['harga_satuan'] ?>" placeholder="Harga Satuan" required>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
  </body>
</html>
