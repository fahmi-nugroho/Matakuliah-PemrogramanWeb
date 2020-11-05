<?php
  include '../conn.php';
  $keyword = $_GET["keyword"];
  if (isset($_GET['kategori'])) {
      $kategori = $_GET['kategori'];
      $query = "SELECT * FROM barang WHERE
                  (id_barang LIKE '%$keyword%' OR
                  nama_barang LIKE '%$keyword%')
                  AND id_kategori = $kategori";
      $result = mysqli_query(connection(),$query);
  }
  else{
    $kategori = 0;
    $query = "SELECT * FROM barang WHERE
    id_barang LIKE '%$keyword%' OR
    nama_barang LIKE '%$keyword%'";

    $result = mysqli_query(connection(),$query);
  }

?>
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
