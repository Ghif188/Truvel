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

    #button-1:hover {
      font-weight: 600;
      background-color: #00C4FF;
    }
    #button-2{
      display: none;
    }
    .deskripsi{
      width: 65%; 
      padding-right: 7%;
    }
    .content{
      display: flex;
    }
    .gambar{
      height: 100%; 
      width: 30%;
    }
    .icon{
      height:100%;
    }
    @media screen and (max-width: 600px) {
      .header{
        padding: 15px 10%;
      }
      .form-floating{
        display:none;
      }
      #button-1{
        display:none;
      }
      #button-2{
        display: inline;
      }
      .gambar{
        height: 30%; 
        width: 100%;
      }
      .deskripsi{
        width: 100%;
        padding-right: 0px;
      }
      .rate{
        display: none;
      }
      .content{
        display: block;
      }
      .icon{
        height: 50px;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <a href="http://localhost/tugasAkhirPPW/main.php" id="button-2"
      style="color:#FFE7A0; text-decoration: none;">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      </svg>
    </a>
    <h1 style="font-weight: 600;margin: 0;">Truvel</h1>
    <div class="form-floating" style="width: 50%;">
      <input class="form-control" id="floatingInput" placeholder="Cari tempat...">
      <label for="floatingInput">Search</label>
    </div>
    <a href="http://localhost/tugasAkhirPPW/main.php" id="button-1"
      style="font-size:larger; padding: 17px; color:#FFE7A0; text-decoration: none;">
      DASHBOARD
    </a>
  </div>
  <div class="full" style="width: 100%; height: 80%; display: flex; justify-content: center; margin-top: 25px;">
    <div class="content" style="width: 80%; justify-content: space-between;">
      <div class="gambar">
        <?php 
        include'koneksi.php';
        $query = $_SERVER['REQUEST_URI'];
        $jenis_kategori = explode("/",$query);
        $item_terakhir = end($jenis_kategori);
        $detail = mysqli_query($conn, "SELECT * from wisata where id_wisata = $item_terakhir");
        foreach ($detail as $value) {
          echo '<img style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;"
          src="'.$value['url_gambar'].'"
          alt="">';
        ?>
      </div>
      <div class="deskripsi">
        <div style="display: flex; height: min-content; justify-content: space-between; margin-top: 10%; margin-bottom: 20px; align-items: center;">
          <div style="font-size: xx-large; height: fit-content; width: fit-content; font-weight: bold; border-right: #d7c281 solid 3px; padding-right: 30px;">
            <?php
            echo $value['nama_wisata'];
            ?>
          </div>
          <div style="display: flex; font-size: larger; align-items:center;">
            <label class="rate" for="" style="margin-right: 15px;">
              Rate :
            </label>
            <?php 
            if ($value['rating'] >= 4) {
              echo '<div style="padding: 0 10px; border-radius: 10px; height: 100%; justify-content: space-around; background-color: #FF0060; color:white; display: flex;font-size: x-large;">
              <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; margin-right:10px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>'.
              $value['rating'].'</div>';
            } else {
              echo '<div style="padding: 5px; border-radius: 10px; background-color: #00DFA2; color:white; margin-right: 10px; display: flex; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:2px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>'.
              $value['rating'].
              '</div>';
            }
            ?>
          </div>
        </div>
        <div style="font-size: larger; font-weight: 600; display: flex; margin-bottom: 20px;">
          <?php
          echo 
          '<div style="padding: 5px 10px; margin-right: 10px; border-radius: 10px; background-color: #00DFA2; color: #FFF5B8; display: flex;">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:7px;" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8"/>
            </svg>'.$lokasi[$value['id_lokasi']].'
          </div>';
          echo 
          '<div style="padding: 5px 10px; border-radius: 10px; background-color: #FFE7A0; color: #11009E; display: flex;">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; margin-right:7px;" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8"/>
            </svg>'.$kategori[$value['id_kategori']].'
          </div>';
          ?>
        </div>
        <div style="margin-bottom: 20px;">
          <?php
          echo $value['deskripsi'];
          ?>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias natus provident asperiores itaque quos aut
          totam repudiandae incidunt a odio tempora deserunt impedit nam aspernatur officiis quam, voluptatibus dicta
          minima.
        </div>
        <div style="height: 10%; display: flex; align-items:center;">
          <svg class="icon" fill="#000000" style="margin-right: 20px;" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
            <g data-name="13 money" id="_13_money">
              <path d="M59.2,16.19a20.767,20.767,0,0,0-12.67-.29,48.549,48.549,0,0,0-4.62,1.66,46.881,46.881,0,0,1-4.57,1.63,18.224,18.224,0,0,1-8.99.43,15.963,15.963,0,0,1-3.9-1.58,20.055,20.055,0,0,0-12.93-2.52c-3.27.47-4.29.78-4.29,1.85v4.62c-.7.07-1.39.15-2.09.26A1.979,1.979,0,0,0,3.5,24.21V43.7a1.98,1.98,0,0,0,.68,1.5,1.941,1.941,0,0,0,1.54.45,33.148,33.148,0,0,1,11.22.17,34.245,34.245,0,0,1,4.48,1.28c1.34.44,2.72.9,4.15,1.22a26.061,26.061,0,0,0,5.81.64,29.921,29.921,0,0,0,5.2-.47,40.684,40.684,0,0,0,5.16-1.37,38.768,38.768,0,0,1,4.85-1.3,23.014,23.014,0,0,1,7.09-.14,1.855,1.855,0,0,0,1.48-.46,2.017,2.017,0,0,0,.68-1.51V38.7a22.43,22.43,0,0,1,2.49.15,1.62,1.62,0,0,0,.22.01,1.956,1.956,0,0,0,1.28-.48,1.986,1.986,0,0,0,.67-1.5V18.08A2.017,2.017,0,0,0,59.2,16.19ZM5.45,24.23a34.568,34.568,0,0,1,5.51-.44v1.47a4.13,4.13,0,0,1-4,4.23H5.46Zm5.51,19.03a36.2,36.2,0,0,0-5.46.44l-.02-6.25H6.96a4.13,4.13,0,0,1,4,4.23Zm42.88.42a25.636,25.636,0,0,0-5.46-.1v-1.9a4.13,4.13,0,0,1,4-4.23h1.46Zm0-8.23H52.38a6.121,6.121,0,0,0-6,6.23v2.15c-.05.01-.1.01-.15.02a43.69,43.69,0,0,0-5.09,1.36,39.691,39.691,0,0,1-4.91,1.31,25.771,25.771,0,0,1-10.22-.15,38.483,38.483,0,0,1-3.96-1.17,37.744,37.744,0,0,0-4.72-1.34,31.622,31.622,0,0,0-4.37-.54V41.68a6.121,6.121,0,0,0-6-6.23H5.48l-.01-3.96H6.96a6.127,6.127,0,0,0,6-6.23V23.85a30.7,30.7,0,0,1,3.98.5,35.872,35.872,0,0,1,4.48,1.28,41.6,41.6,0,0,0,4.15,1.23,28.055,28.055,0,0,0,11.01.16,40.684,40.684,0,0,0,5.16-1.37,41.566,41.566,0,0,1,4.64-1.25v.86a6.127,6.127,0,0,0,6,6.23h1.46Zm0-5.96H52.38a4.13,4.13,0,0,1-4-4.23V24.11a23.8,23.8,0,0,1,5.46.11Zm2,7.21V24.22a1.966,1.966,0,0,0-1.67-1.96,25.523,25.523,0,0,0-6.76-.04h-.03a1.01,1.01,0,0,0-.17.03c-.33.05-.65.08-.98.14a41.767,41.767,0,0,0-5.09,1.35,38,38,0,0,1-4.91,1.31,25.771,25.771,0,0,1-10.22-.15,38.483,38.483,0,0,1-3.96-1.17,39.527,39.527,0,0,0-4.72-1.34,33.483,33.483,0,0,0-5.23-.58c-.05,0-.09-.02-.14-.02a.3.3,0,0,0-.1.02c-.87-.03-1.75-.02-2.63.03V17.97a24.958,24.958,0,0,1,2.65-.48A18.1,18.1,0,0,1,23.5,19.8a17.56,17.56,0,0,0,4.41,1.77,20.2,20.2,0,0,0,9.96-.45,47.1,47.1,0,0,0,4.77-1.7,44.3,44.3,0,0,1,4.44-1.59,18.642,18.642,0,0,1,11.42.25l.07,18.78A25.283,25.283,0,0,0,55.84,36.7Z"/>
              <path d="M32.5,39.54a2.829,2.829,0,0,1-1.83,1.87v.79a1,1,0,0,1-2,0v-.96a7.207,7.207,0,0,1-1.24-.82c-.15-.12-.29-.23-.43-.33a1,1,0,1,1,1.14-1.64c.17.12.34.25.52.39.44.34.94.73,1.27.7a.843.843,0,0,0,.67-.61.8.8,0,0,0-.21-.87l-2.26-1.9a2.8,2.8,0,0,1-.55-3.64,2.586,2.586,0,0,1,1.09-.96V30.49a1,1,0,1,1,2,0v.94a2.708,2.708,0,0,1,.83.46l.91.76a1,1,0,0,1-1.29,1.53l-.9-.75a.64.64,0,0,0-.5-.15.671.671,0,0,0-.45.31.806.806,0,0,0,.14,1.04l2.27,1.9A2.748,2.748,0,0,1,32.5,39.54Z"/>
            </g>
          </svg>
          <div style="height:fit-content;">
              Harga Tiket Masuk
              <?php 
              echo '<p style="font-weight: 600;">Rp. '.$value['harga'];'</p>'; 
              }?>
          </div>
          </div>
      </div>
    </div>
  </div>
</body>

</html>