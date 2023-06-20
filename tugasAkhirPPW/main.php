<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRUVEL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      margin: 0px;
      font-family: 'Manrope', sans-serif;
    }

    .header {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 15px 15%;
      position: sticky;
      background-color: #30A2FF;
      color: #FFE7A0;
    }

    .content {
      padding: 20px 0;
      height: 80%;
      display: flex;
      justify-content: center;
    }

    .content-kiri {
      height: 100%;
      width: 20%;
      background-color: green;
      border-radius: 20px;
      margin-right: 10px;
      border-radius: 15px;
      position: sticky;
      top: 0;
    }

    .content-kanan {
      display: flex;
      height: 100%;
      width: 80%;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .inti {
      width: 80%;
    }

    .form-floating {
      width: 50%;
    }

    .carousel {
      width: 100%;
    }

    .carousel-item {
      height: 300px;
    }

    .carousel {
      height: 300px;
      margin-bottom: 20px;
    }

    .item {
      width: 100%;
      height: fit-content;
      display: flex;
      align-items: end;
      position: relative;
      margin-bottom: 15px;
    }
    .bi{
      width: 35px;
    }
    .kolom{
      width: 47%;
    }
    .deskripsi{
      position: absolute; 
      z-index: 1; 
      color: white; 
      margin-bottom: 5%; 
      margin-left: 5%; 
      padding: 3%; 
      background-color: rgba(255, 255, 255, 0.9); 
      border-radius: 15px;
    }
    .nama-wisata{
      font-size: x-large;
      font-weight: 600; 
      color: #0079FF;
      margin-bottom: 5px;
    }
    .kecil{
      display: none;
      margin-bottom: 15px;
    }
    @media screen and (max-width: 600px) {
      .besar{
        display: none;
      }
      .judul{
        display: none;
      }
      .form-floating{
        width:75%;
      }
      .bi{
        width: 30px;
      }
      .header{
        padding: 15px 10%;
      }
      .carousel{
        height: 200px;
      }
      .carousel-inner{
        height: 100%;
      }
      .content-kiri{
        display: none;
      }
      .content-kanan{
        width: 100%;
        display: inline;
      }
      .kolom{
        width: 100%;
      }
      .deskripsi{
        width: 90%;
      }
      .keterangan{
        font-size: small;
      }
      .nama-wisata{
        font-size: large;
      }
      .kecil{
        display: flex;
      }
      .carousel-item{
        height: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <h1 class="judul" style="font-weight: 600;">Truvel</h1>
    <div class="form-floating">
      <input class="form-control" id="floatingInput" placeholder="Cari tempat...">
      <label for="floatingInput">Search</label>
    </div>
      <div class="dropdown-center besar">
        <button class="btn dropdown-toggle" type="button" style="font-size: large; color:#FFE7A0; padding: 17px;" data-bs-toggle="dropdown" aria-expanded="false">
          Pilih Daerah
        </button>
        <ul class="dropdown-menu" style="z-index: 2;">
          <li><a class="dropdown-item" href="http://localhost/tugasAkhirPPW/main.php">Semua Daerah</a></li>
          <?php
            include'koneksi.php';
            foreach ($lokasi as $values) {
              echo '
              <li><a class="dropdown-item" href="http://localhost/tugasAkhirPPW/main.php/lokasi/'.$values.'">'.$values.'</a></li>';
            }
          ?>
        </ul>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
      </svg>
  </div>
  <div class="content">
    <div class="inti">
      <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" style="position: relative; z-index: -1;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="border-radius: 15px;">
          <div class="carousel-item active" data-bs-interval="2000">
            <img
              src="https://images.unsplash.com/photo-1662553339966-7cda1023db1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
              class="d-block" alt="..." style="width: 100%; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Iklan Pertama</h5>
              <p>Diisi dengan iklan iklan aneh.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img
              src="https://images.unsplash.com/photo-1686255865700-48da8857da15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80"
              class="d-block" alt="..." style="width: 100%; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Iklan Kedua</h5>
              <p>Diisi dengan iklan iklan aneh.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img
              src="https://images.unsplash.com/photo-1671600938989-40d68c9d1c05?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=443&q=80"
              class="d-block" alt="..." style="width: 100%; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Iklan Ketiga</h5>
              <p>Diisi dengan iklan iklan aneh.</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="kecil" style="width: 100%; background-color:#30A2FF; padding: 10px 15px;font-size: medium; border-radius: 15px;justify-content: space-between; align-items: center;">
          <div style="font-size: medium;  color:#FFE7A0;">Pilih Daerah</div>
          <div class="dropdown-center">
            <button class="btn dropdown-toggle" type="button" style="color:#FFE7A0;" data-bs-toggle="dropdown" aria-expanded="false">
              Semua Daerah
            </button>
            <ul class="dropdown-menu" style="z-index: 2;">
              <li><a class="dropdown-item" href="http://localhost/tugasAkhirPPW/main.php">Semua Daerah</a></li>
              <?php
                include'koneksi.php';
                foreach ($lokasi as $values) {
                  echo '
                  <li><a class="dropdown-item" href="http://localhost/tugasAkhirPPW/main.php/lokasi/'.$values.'">'.$values.'</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="kecil" style="padding: 0 15px; padding-top: 10px; border-radius: 15px; border: 2px solid #30A2FF; justify-content: space-between; flex-wrap: wrap;">
          <?php
          foreach ($kategori as $values) { 
            echo '<div style="margin-bottom: 10px; display: flex; align-items:center;">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 10px; margin-right:7px; color:#FFE7A0;" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8"/>
            </svg>
            <a href="http://localhost/tugasAkhirPPW/main.php/kategori/'.$values.'" style="text-decoration: none;">'.$values.'</a>
            </div>';
          }
          ?>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <div class="content-kiri p-4" style="background-color: #00C4FF; color: #FFF5B8;">
          <div style="font-weight: 600; margin-bottom: 10px; font-size: 20px;">Kategori Pilihan :</div>
          <ul>
            <?php
            foreach ($kategori as $values) { 
              echo '<li style="margin-bottom: 5px;">
                <a href="http://localhost/tugasAkhirPPW/main.php/kategori/'.$values.'" style="text-decoration: none;  color: #FFF5B8; ">'.$values.'</a>
              </li>';
            }
            ?>
          </ul>
        </div>
        <div class="content-kanan">
          <div class="kolom">
          <?php
          $query = $_SERVER['REQUEST_URI'];
          $jenis_kategori = explode("/",$query);
          $item_terakhir = end($jenis_kategori);
          if ($item_terakhir != "main.php" or $item_terakhir == "") {
            if ($jenis_kategori[3] == "kategori") {
              $jumlah_data = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah from wisata where id_kategori = (SELECT id_kategori from kategori where nama_kategori = '$item_terakhir')");
              $wisata = mysqli_query($conn, "SELECT * from wisata where id_kategori = (SELECT id_kategori from kategori where nama_kategori = '$item_terakhir')");
            } else {
              $jumlah_data = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah from wisata where id_lokasi = (SELECT id_lokasi from lokasi_wisata where nama_lokasi = '$item_terakhir')");
              $wisata = mysqli_query($conn, "SELECT * from wisata where id_lokasi = (SELECT id_lokasi from lokasi_wisata where nama_lokasi = '$item_terakhir')");
            }
          } else {
            $jumlah_data = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah from wisata");
            $wisata = mysqli_query($conn, "SELECT * from wisata");
          }
          $setengah_jml = 0;
          $no = 1;
          foreach ($jumlah_data as $value) {
            $jumlah_data = $value['jumlah'];
            if ($value['jumlah']%2 != 0) {
              $setengah_jml = ($value['jumlah']/2) + 0.5;
            } else {
              $setengah_jml = $value['jumlah']/2;
            }
          }
          foreach ($wisata as $value){
            if ($no <= $setengah_jml){
          ?>
          <div class="item">
            <img
              src="<?php echo $value['url_gambar']?>"
              style="width: 100%; border-radius: 20px;">
            <div class="deskripsi" style="">
              <div class="nama-wisata"><?php echo $value['nama_wisata']?></div>
              <div style="display: flex; margin-bottom: 10px;">
                <?php 
                if ($value['rating'] >= 4) {
                  echo '<div class="keterangan" style="padding: 5px; border-radius: 10px; background-color: #FF0060; margin-right: 10px; display: flex; align-items: center;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:2px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg> 
                  <label style="margin-right: 7px;">'.
                  $value['rating'].
                  '</label> Recomended</div>';
                } else {
                  echo '<div class="keterangan" style="padding: 5px; border-radius: 10px; background-color: #00DFA2; margin-right: 10px; display: flex; align-items: center;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:2px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>'.
                  $value['rating'].
                  '</div>';
                }
                echo '<div class="keterangan" style="padding: 5px; border-radius: 10px; background-color: #FFE7A0; color: #11009E; display: flex; align-items: center;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:7px;" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                  <circle cx="8" cy="8" r="8"/>
                </svg>'.$kategori[$value['id_kategori']].'</div>';
                ?>
              </div>
              <?php
              echo '<a href="http://localhost/tugasAkhirPPW/detail_wisata.php/'.$value['id_wisata'].'" class="keterangan" style="font-weight: 600; color: #0079FF;">More -></a>'
              ?>
            </div>
          </div>
          <?php
              if (($jumlah_data-$setengah_jml) == 0) {
                $setengah_jml = 0;
              } else {
                $no++;
              }
            } else {
              $setengah_jml = $jumlah_data-$setengah_jml;
              break;
            }
          }
          ?>
          </div>
          <div class="kolom">
          <?php
          if ($item_terakhir != "main.php" or $item_terakhir == "") {
            if ($jenis_kategori[3] == "kategori") {
              $wisata = mysqli_query($conn, "SELECT * from wisata where id_kategori = (SELECT id_kategori from kategori where nama_kategori = '$item_terakhir') ORDER BY id_wisata desc");
            } else {
              $wisata = mysqli_query($conn, "SELECT * from wisata where id_lokasi = (SELECT id_lokasi from lokasi_wisata where nama_lokasi = '$item_terakhir') ORDER BY id_wisata desc");
            }
          } else {
            $wisata = mysqli_query($conn, "SELECT * from wisata ORDER BY id_wisata desc");
          }
          $no = 1;
          foreach ($wisata as $value){
            if ($no <= $setengah_jml and $setengah_jml != 0){
          ?>
            <div class="item">
              <img
                src="<?php echo $value['url_gambar']?>"
                style="width: 100%; border-radius: 20px;">
              <div style="position: absolute; z-index: 1; color: white; margin-bottom: 5%; margin-left: 5%; padding: 3%; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px;">
                <div class="nama-wisata"><?php echo $value['nama_wisata']?></div>
                <div style="display: flex; margin-bottom: 10px; flex-wrap: wrap;">
                  <?php 
                  if ($value['rating'] >= 4) {
                    echo '<div class="keterangan" style="padding: 5px; border-radius: 10px; background-color: #FF0060; margin-right: 10px; display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:2px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg> 
                    <label style="margin-right: 7px;">'.
                    $value['rating'].
                    '</label> Recomended</div>';
                  } else {
                    echo '<div class="keterangan" style="padding: 5px; border-radius: 10px; background-color: #00DFA2; margin-right: 10px; display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:2px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>'.
                    $value['rating'].
                    '</div>';
                  }
                  echo '<div class="keterangan" style="padding: 5px; border-radius: 10px; background-color: #FFE7A0; color: #11009E; display: flex; align-items: center;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:7px;" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
                  </svg>'.$kategori[$value['id_kategori']].'</div>';
                  ?>
                </div>
                <?php
                echo '<a href="http://localhost/tugasAkhirPPW/detail_wisata.php/'.$value['id_wisata'].'" class="keterangan" style="font-weight: 600; color: #0079FF;">More -></a>'
                ?>
              </div>
            </div>
          <?php 
            $no++;
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>