<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
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
    .besar{
        display: flex; 
        margin-bottom: 5%;
    }
    .detail{
        width: 25%;
        border-right: 3px solid;
    }
    .font-xl{
        font-size: xx-large;
    }
    .font-l{
        font-size: large;
    }
    .jumlah{
        font-size: large; 
        font-weight: 600;
    }
    @media screen and (max-width: 600px) {
        .besar{
            display: block;
            margin-bottom: 15px;
            border-bottom: 3px solid;
        }
        .detail{
            width: 100%;
            border: none;
        }
        .judul{
            display: none;
        }
        .font-xl{
            font-size: x-large:
        }
        .font-l{
            font-size: medium;
        }
        .nama-tabel{
            font-size: larger;
            font-weight: 600;
        }
        .jumlah{
            font-size: medium; 
            font-weight: 400;
        }
    }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="font-weight: 600;margin: 0;">Truvel</h1>
    </div>
    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 80%; padding-top: 5%;">
            <div style="margin-bottom: 5%;">
                <div class="font-xl" style="font-weight: 600;">Halo Admin,</div>
                <div class="font-l">Silahkan Rencanakan Pengembangan Database.</div>
            </div>
            <div class="besar" style="width: 100%; justify-content: space-between; align-items: center;">
                <div class="detail">
                    <div class="judul" style="font-size: x-large; font-weight: 600;">Detail Tabel</div>
                    <div class="nama-tabel">Tabel Wisata</div>
                </div>
                <div class="jumlah">
                    Total Data:
                    <?php
                    include'koneksi.php';
                    $jumlah_data = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah from wisata");
                    foreach ($jumlah_data as $value) {
                        echo $value['jumlah'];
                    }
                    ?>
                </div>
            </div>
            <div class="table-responsive-md" style="margin-bottom: 5%; width: 100%;">
                <form action="" method="post">
                    <table class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Wisata</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Harga</th>
                                <th scope="col">URL Gambar</th>
                                <th scope="col">Daerah</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = mysqli_query($conn, "SELECT * from wisata");
                            $no = 1;
                            foreach ($data as $value) {
                                echo
                                '<tr><th scope="row">'.$no.'</th>
                                <td>'.$value['nama_wisata'].'</td>
                                <td>'.$value['rating'].'</td>
                                <td>'.$value['harga'].'</td>
                                <td class="text-truncate" style="max-width: 150px;">'.$value['url_gambar'].'</td>
                                <td>'.$lokasi[$value['id_lokasi']].'</td>
                                <td>'.$kategori[$value['id_kategori']].'</td>
                                <td><button type="submit" name="deleteWisata" value="'.$value['id_wisata'].'" />Delete</button></td>
                                </tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
            <div style="font-size: large; font-weight: 600; margin-bottom: 5px; text-decoration: underline;">
                Tambah Data Wisata
            </div>
            <div class="table-responsive-sm" style="margin-bottom: 5%;">
                <form action="" method="post">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Wisata</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Daerah</th>
                                <th scope="col">Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="nama_wisata"></td> 
                                <td>
                                    <select name="rating" class="form-select" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td><input type="number" class="form-control" name="harga"></td>
                                <td>
                                    <select name="id_lokasi"  class="form-select" id="">
                                    <?php
                                    foreach ($getLokasi as $values) {
                                        echo '<option value="'.$values[id_lokasi].'">'.$values[nama_lokasi].'</option>';
                                    }
                                    ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="id_kategori" class="form-select" id="">
                                    <?php
                                    foreach ($getKategori as $values) {
                                        echo '<option value="'.$values[id_kategori].'">'.$values[nama_kategori].'</option>';
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th colspan="2" scope="col">Deskripsi</th>
                                <th colspan="2" scope="col">URL Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2"><textarea class="form-control" placeholder="" name="deskripsi" style="height: 100px"></textarea></td>
                                <td colspan="2"><textarea class="form-control" placeholder="" name="url_gambar" style="height: 100px"></textarea></td>
                                <td><button type="submit" name="tambahWisata" value="Submit">TAMBAH +</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="besar" style="width: 100%; justify-content: space-between; align-items: center;">
                <div class="detail">
                    <div class="judul" style="font-size: x-large; font-weight: 600;">Detail Tabel</div>
                    <div class="nama-tabel">Tabel Kategori</div>
                </div>
                <div class="jumlah">
                    Total Data:
                    <?php
                    $jumlah_data = mysqli_query($conn, "SELECT COUNT(id_kategori) as jumlah from kategori");
                    foreach ($jumlah_data as $value) {
                        echo $value['jumlah'];
                    }
                    ?>
                </div>
            </div>
            <div class="table-responsive-sm" style="margin-bottom: 5%;">
                <form action="" method="post">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = mysqli_query($conn, "SELECT * from kategori");
                            $no = 1;
                            foreach ($data as $value) {
                                echo
                                '<tr><th scope="row">'.$no.'</th>
                                <td>'.$value['nama_kategori'].'</td>
                                <td><button type="submit" name="deleteKategori" value="'.$value['id_kategori'].'" />Delete</button></td>
                                </tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
            <div style="font-size: large; font-weight: 600; margin-bottom: 5px; text-decoration: underline;">
                Tambah Data Kategori
            </div>
            <div class="table-responsive-sm" style="margin-bottom: 5%;">
                <form action="" method="post">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="nama_kategori"></td> 
                                <td><button type="submit" name="tambahKategori" value="Submit">TAMBAH +</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="besar" style="width: 100%; justify-content: space-between; align-items: center;">
                <div class="detail">
                    <div class="judul" style="font-size: x-large; font-weight: 600;">Detail Tabel</div>
                    <div class="nama-tabel">Tabel Daerah</div>
                </div>
                <div class="jumlah">
                    Total Data:
                    <?php
                    $jumlah_data = mysqli_query($conn, "SELECT COUNT(id_lokasi) as jumlah from lokasi_wisata");
                    foreach ($jumlah_data as $value) {
                        echo $value['jumlah'];
                    }
                    ?>
                </div>
            </div>
            <div class="table-responsive-sm" style="margin-bottom: 5%;">
                <form action="" method="post">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Daerah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = mysqli_query($conn, "SELECT * from lokasi_wisata");
                            $no = 1;
                            foreach ($data as $value) {
                                echo
                                '<tr><th scope="row">'.$no.'</th>
                                <td>'.$value['nama_lokasi'].'</td>
                                <td><button type="submit" name="deleteLokasi" value="'.$value['id_lokasi'].'" />Delete</button></td>
                                </tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
            <div style="font-size: large; font-weight: 600; margin-bottom: 5px; text-decoration: underline;">
                Tambah Data Lokasi
            </div>
            <div class="table-responsive-sm" style="margin-bottom: 5%;">
                <form action="" method="post">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="nama_lokasi"></td> 
                                <td><button type="submit" name="tambahLokasi" value="Submit">TAMBAH +</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>