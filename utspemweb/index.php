<?php
  include 'conn.php';
  if (isset($_GET['kategori'])) {
      //query SQL
      $kategori = $_GET['kategori'];
      $query = "SELECT * FROM barang WHERE id_kategori = $kategori";
      //eksekusi query
      $result = mysqli_query(connection(),$query);
  }
  else{
    $query = "SELECT * FROM barang";
    $result = mysqli_query(connection(),$query);
  } ?>
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
      <a class="navbar-brand" href="#">Data Barang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php">Semua</a>
              <?php
                $query1 = "SELECT * FROM kategori";
                $result1 = mysqli_query(connection(),$query1);
                $data1 = mysqli_fetch_array($result1);
                while ($data1 = mysqli_fetch_array($result1)) : ?>
              <a class="dropdown-item" href="<?php echo "index.php?kategori=".$data1['id_kategori']; ?>"><?php echo $data1['nama_kategori'] ?></a>
              <?php endwhile ?>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button type="submit" class="btn btn-success">Search</button>
        </form>
      </div>
    </nav>
    <div class="container mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Stok</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          while ($data = mysqli_fetch_array($result)) : ?>
          <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $data['id_barang'] ?></td>
            <td><?php echo $data['nama_barang'] ?></td>
            <td><?php echo $data['jumlah_stock'] ?></td>
            <td>Rp. <?php echo $data['harga_satuan'] ?>,00</td>
            <td>
              <a href="<?php echo "update.php?id_barang=".$data['id_barang'] ?>" class="btn btn-warning">Ubah</a>
              <a href="<?php echo "hapus.php?id_barang=".$data['id_barang'] ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php
          $i++;
          endwhile ?>
        </tbody>
      </table>
      <a class="btn btn-primary" href="tambah.php">Tambah Data</a>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
