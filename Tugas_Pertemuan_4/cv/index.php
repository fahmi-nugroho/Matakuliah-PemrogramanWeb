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
    $nama = "Fahmi Nugroho Alibasyah";
    $aboutme = "Seorang anak yang dari dulu sangat tertarik dengan gadget terutama komputer dan laptop. Saat SMA memutuskan untuk melanjutkan kuliah dibidang informatika karena ingin belajar lebih lanjut mengenai dunia percodingan, dan akhirnya menjadi hobby karena dari dulu sudah senang mengetik apapun didepan laptop.";
    $sd = "SD AL-Kautsar";
    $alamatsd = "Pondok Benowo Indah Blok OO 33-35, Pakal, Babat Jerawat, Kec. Pakal, Kota SBY, Jawa Timur 60197";
    $smp = "SMPN 26 Surabaya";
    $alamatsmp = "Jl. Banjar Sugihan No.21, Banjar Sugihan, Kec. Tandes, Kota SBY, Jawa Timur 60185";
    $sma = "SMAN 11 Surabaya";
    $alamatsma = "Jl. Manukan Tengah, Manukan Kulon, Kec. Tandes, Kota SBY, Jawa Timur 60185";
    $skill1 = "Pemrograman";
    $skill2 = "Bahas Inggris";
    $skill3 = "Office";
    $skill4 = "Fotografi";
    $goal1 = "Pergi haji dengan keluarga";
    $goal2 = "Punya rumah sendiri";
    $goal3 = "Beli PS 5";
    $goal4 = "Beli kamera DSLR";
  ?>
  <div class="container_12">
    <div class="grid_4 prefix_1 suffix_1 nama header">
      <br>
      <h1><?php echo $nama ?></h1>
      <i>Mahasiswa UPN "veteran" Jawa Timur</i>
    </div>
    <div class="grid_3 prefix_2 suffix_1 foto header">
      <img src="img/profil.png" alt="">
    </div>
  <div class="grid_6 aboutmecontact">
    <div class="grid_6 aboutme">
      <h2>About Me</h2>
      <p><?php echo $aboutme ?></p>
    </div>
    <div class="grid_6 contact">
      <h2>Contact</h2>
      <ul class="text">
        <li><a href="https://www.instagram.com/fahmina21/" target="_blank"><img src="img/instagram1.png" alt=""></a> : fahmina21</li>
        <li><a href="https://twitter.com/FahmiNugroho23" target="_blank"><img src="img/twitter1.png" alt=""></a> : FahmiNA</li>
        <li><a href="mailto:fahminugroho23@gmail.com"><img src="img/gmail1.png" alt=""></a> : Fahmi Nugroho</li>
        <li><a href="https://www.linkedin.com/in/fahmi-nugroho-7a1a6b1a0/"><img src="img/linkedin1.png" alt=""></a> : Fahmi Nugroho</li>
      </ul>
    </div>
  </div>
  <div class="grid_6 education">
    <h2>Education</h2>
    <h5>Sekolah Dasar</h5>
    <p>
      <?php echo $sd ?>
      <br>
      <?php echo $alamatsd ?>
    </p>
    <h5>Sekolah Menengah Pertama</h5>
    <p>
      <?php echo $smp ?>
      <br>
      <?php echo $alamatsmp ?>
    </p>
    <h5>Sekolah Menengah Atas</h5>
    <p>
      <?php echo $sma ?>
      <br>
      <?php echo $alamatsma ?>
  </p>
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
        <li><?php echo $goal1 ?></li>
        <li><?php echo $goal2 ?></li>
        <li><?php echo $goal3 ?></li>
        <li><?php echo $goal4 ?></li>
      </ul>
    </div>
  </div>
  <div class="grid_4 prefix_4 suffix_4 copyright">
    Copyright 2020 by Fahmi Nugroho
  </div>
</body>
</html>
