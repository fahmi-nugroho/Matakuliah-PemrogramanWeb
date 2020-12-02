<?php
  include 'conn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" type="image/png" href="img/title.png">

    <title>Curriculum Vitae</title>
  </head>
  <body>
    <?php
      $query = "SELECT * FROM profil";
      $result = mysqli_query(connection(),$query);
      $data = mysqli_fetch_array($result);
    ?>
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-white">
        <h1><?php echo $data['nama'] ?></h1>
        <img src="img/profil.png" class="foto-profil rounded-circle mt-2 mb-2" alt="">
        <h3><i><?php echo $data['pekerjaan'] ?></i></h3>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p class="aboutme"><?php echo $data['about_me'] ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-between education">
        <div class="col-lg-6">
          <img src="img/toga.png" alt="Workingspace" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h2 class="text-white">Education</h2>
          <div id="data-edu">

          </div>
          <button type="button" class="btn text-white tambah" data-toggle="modal" data-target="#form-tambah" name="button">Tambah</button>
          <div class="modal fade" id="form-tambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formTambahLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mr-auto" id="formTambahLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="tambah-pendidikan" action="tambah.php" method="post">
                    <div class="form-group">
                      <div id="peringatan"></div>
                      <br>
                      <label for="Jenjang">Jenjang Pendidikan</label>
                      <select id="Jenjang" name="jenjang" class="form-control">
                        <option>Pilih Jenjang Pendidikan</option>
                        <?php
                          $query = "SELECT * FROM jenjang_pendidikan";
                          $negara = mysqli_query(connection(),$query);
                          while($data = mysqli_fetch_array($negara)):
                        ?>
                          <option value="<?php echo $data['jenjang'] ?>"><?php echo  $data['jenjang']?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="nama-sekolah">Nama Sekolah</label>
                      <input id="nama-sekolah" name="namaSekolah" class="form-control" type="text" placeholder="Nama Sekolah" required>
                    </div>
                    <div class="form-group">
                      <label for="alamat-sekolah">Alamat Sekolah</label>
                      <input id="alamat-sekolah" name="alamatSekolah" class="form-control" type="text" placeholder="Alamat Sekolah" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-6 mb-3 mt-3 text-center">
          Goals
        </div>
      </div>
      <div class="row row-cols-lg-3 justify-content-center">
          <?php
            $query = "SELECT * FROM goals";
            $result = mysqli_query(connection(),$query);
            while ($data = mysqli_fetch_array($result)):
          ?>
          <div class="col mt-2 mb-2 text-center">
            <div class="card ml-auto mr-auto" style="width: 18rem;">
              <img src="img/<?php echo $data['img'] ?>" class="card-img-top ml-auto mr-auto" alt="...">
              <div class="card-body">
                <p class="card-text"><?php echo $data['goal'] ?></p>
              </div>
            </div>
          </div>
          <?php endwhile ?>
      </div>

      <div class="row">
        <div class="col-6 text-center">
          <p>Skills</p>
          <div class="progress mt-3" style="height: 25px;">
            <div id="progress-1" class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Pemrograman</div>
          </div>
          <div class="progress mt-3" style="height: 25px;">
            <div id="progress-2" class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Bahasa Inggris</div>
          </div>
          <div class="progress mt-3" style="height: 25px;">
            <div id="progress-3" class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Office</div>
          </div>
          <div class="progress mt-3" style="height: 25px;">
            <div id="progress-4" class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Fotografi</div>
          </div>
        </div>
        <div class="col-6 contact">
            <p class="text-center">Contact</p>
            <?php
              $query = "SELECT * FROM contact";
              $result = mysqli_query(connection(),$query);
            ?>
            <ul class="text">
              <?php while ($data = mysqli_fetch_array($result)): ?>
                <li class="mt-1"><a href="<?php echo $data['link'] ?>" target="_blank"><img class="sosmed" src="img/<?php echo $data['gambar'] ?>" alt=""></a> : <?php echo $data['nama_contact'] ?></li>
              <?php endwhile ?>
            </ul>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.5.1.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
