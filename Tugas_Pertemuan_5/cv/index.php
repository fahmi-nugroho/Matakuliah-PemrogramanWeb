<?php
  include 'conn.php';
  $skill1 = "Pemrograman";
  $skill2 = "Bahas Inggris";
  $skill3 = "Office";
  $skill4 = "Fotografi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/title.png">
  <title>Curriculum Vitae</title>
  <link rel="stylesheet" href="css/960.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/text.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
      $query = "SELECT * FROM profil";
      $result = mysqli_query(connection(),$query);
      $data = mysqli_fetch_array($result);
  ?>
  <div class="container_12">
    <div class="grid_4 prefix_1 suffix_1 nama header">
      <br>
      <h1><?php echo $data['nama'] ?></h1>
      <i><?php echo $data['pekerjaan'] ?></i>
    </div>
    <div class="grid_3 prefix_2 suffix_1 foto header">
      <img src="img/profil.png" alt="">
    </div>
  <div class="grid_6 aboutmecontact">
    <div class="grid_6 aboutme">
      <h2>About Me</h2>
      <p><?php echo $data['about_me'] ?></p>
    </div>
    <div class="grid_6 contact">
      <?php
        $query = "SELECT * FROM contact";
        $result = mysqli_query(connection(),$query);
      ?>
      <h2>Contact</h2>
      <ul class="text">
        <?php while ($data = mysqli_fetch_array($result)): ?>
          <li><a href="<?php echo $data['link'] ?>" target="_blank"><img src="img/<?php echo $data['gambar'] ?>" alt=""></a> : <?php echo $data['nama_contact'] ?></li>
        <?php endwhile ?>
      </ul>
    </div>
  </div>
  <div class="grid_6 education">
    <h2>Education</h2>
    <?php
      $query = "SELECT * FROM pendidikan";
      $result = mysqli_query(connection(),$query);
      while ($data = mysqli_fetch_array($result)):
    ?>
      <h5><?php echo $data['jenjang'] ?></h5>
      <p>
        <?php echo $data['nama_sekolah'] ?>
        <br>
        <?php echo $data['alamat'] ?>
      </p>
    <?php endwhile ?>
  </div>
  <div class="grid_6 skill">
    <div class="grid_6">
      <h2>Skills</h2>
    </div>
    <div class="grid_2">
      <ul>
        <li><?php echo $skill1 ?></li>
        <li><?php echo $skill2 ?></li>
        <li><?php echo $skill3 ?></li>
        <li><?php echo $skill4 ?></li>
      </ul>
    </div>
    <div class="grid_3 bar">
      <ul>
        <li><p class="satu">1</p></li>
        <li><p class="dua">2</p></li>
        <li><p class="tiga">3</3p></li>
        <li><p class="empat">4</4p></li>
      </ul>
    </div>
  </div>
  <div class="grid_6 goal">
    <h2>Goals</h2>
    <div class="grid_6">
      <ul class="text">
        <?php
          $query = "SELECT * FROM goals";
          $result = mysqli_query(connection(),$query);
          while ($data = mysqli_fetch_array($result)):
        ?>
          <li><?php echo $data['goal'] ?></li>
        <?php endwhile ?>
      </ul>
    </div>
  </div>
  <div class="grid_4 prefix_4 suffix_4 copyright">
    Copyright 2020 by Fahmi Nugroho
  </div>
</body>
</html>
