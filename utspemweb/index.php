<?php
  include 'conn.php';
  if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $query = "SELECT * FROM barang WHERE id_kategori = $kategori";
    $result = mysqli_query(connection(),$query);
  }
  else{
    $kategori = 0;
    $query = "SELECT * FROM barang";
    $result = mysqli_query(connection(),$query);
  }
  if (isset($_POST['minimal'])) {
    $minimal = $_POST['minimal'];
    $maksimal = $_POST['maksimal'];
    $query = "SELECT * FROM barang WHERE harga_satuan >= $minimal AND harga_satuan <= $maksimal";
    if ($kategori != 0) {
      $query = "SELECT * FROM barang WHERE id_kategori = $kategori AND harga_satuan >= $minimal AND harga_satuan <= $maksimal";
    }
    $result = mysqli_query(connection(),$query);
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
      <?php
        if ($kategori == 0) {
          $data2['nama_kategori'] = "Total";
        }
        else{
          $query2 = "SELECT * FROM kategori WHERE id_kategori = $kategori";
          $result2 = mysqli_query(connection(),$query2);
          $data2 = mysqli_fetch_array($result2);
        }
      ?>
      <a class="navbar-brand" href="index.php">Data Barang <?php echo $data2['nama_kategori'] ?></a>
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
              while ($data1 = mysqli_fetch_array($result1)) : ?>
              <a class="dropdown-item" href="<?php echo "index.php?kategori=".$data1['id_kategori']; ?>"><?php echo $data1['nama_kategori'] ?></a>
            <?php endwhile ?>
          </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 col-5">
          <input class="form-control col-8" type="search" placeholder="Pencarian SKU/Nama Barang" aria-label="Search" id="keyword">
        </form>
      </div>
    </nav>
    <div class="container mt-5" id="tempat-muncul">
      <form action="index.php?kategori=<?php echo $kategori ?>" method="post">
        <div class="row justify-content-between mb-2">
          <input class="form-control col-4 mr-2" type="search" placeholder="Harga Minimal" aria-label="Search" name="minimal">
          <input class="form-control col-4 mr-2" type="search" placeholder="harga Maksimal" aria-label="Search" name="maksimal">
          <button type="submit" class="btn btn-primary">Cari Data</button>
        </div>
      </form>
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
