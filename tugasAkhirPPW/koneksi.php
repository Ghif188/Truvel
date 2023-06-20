<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "truvel";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$kategori = [];
$getKategori = mysqli_query($conn, "SELECT * from kategori");
foreach ($getKategori as $values) {
    $kategori += [$values['id_kategori'] => $values['nama_kategori']];
}

$lokasi = [];
$getLokasi = mysqli_query($conn, "SELECT * from lokasi_wisata");
foreach ($getLokasi as $values) {
    $lokasi += [$values['id_lokasi'] => $values['nama_lokasi']];
}

if(isset($_POST['deleteWisata']) and is_numeric($_POST['deleteWisata']))
{
  $delete = $_POST['deleteWisata'];
  $sql = mysqli_query($conn, "DELETE FROM wisata where id_wisata = $delete"); 

}

if(isset($_POST['deleteKategori']) and is_numeric($_POST['deleteKategori']))
{
  $delete = $_POST['deleteKategori'];
  $sql = mysqli_query($conn, "DELETE FROM kategori where id_kategori = $delete"); 
  if ($sql == ""){
    echo '<script>alert("Kategori ini sedang dipakai")</script>';
  }
  header("Location: admin.php");
  exit();
}

if(isset($_POST['deleteLokasi']) and is_numeric($_POST['deleteLokasi']))
{
  $delete = $_POST['deleteLokasi'];
  $sql = mysqli_query($conn, "DELETE FROM lokasi_wisata where id_lokasi = $delete"); 
  if ($sql == ""){
    echo '<script>alert("Lokasi ini sedang dipakai")</script>';
  }
  header("Location: admin.php");
  exit();
}

if (isset($_POST['tambahWisata'])) {
    $nama_wisata = $_POST['nama_wisata'];
    $rating = $_POST['rating'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $url_gambar = $_POST['url_gambar'];
    $id_lokasi = $_POST['id_lokasi'];
    $id_kategori = $_POST['id_kategori'];
    $sql = mysqli_query($conn, "INSERT INTO wisata(nama_wisata, rating, deskripsi, harga, url_gambar, id_lokasi, id_kategori) 
    VALUES ('$nama_wisata', '$rating', '$deskripsi', '$harga', '$url_gambar', '$id_lokasi', '$id_kategori')"); 
    header("Location: admin.php");
    exit();
}

if (isset($_POST['tambahKategori'])) {
    $nama_kategori = $_POST['nama_kategori'];
    $sql = mysqli_query($conn, "INSERT INTO kategori(nama_kategori) 
    VALUES ('$nama_kategori')"); 
    header("Location: admin.php");
    exit();
}

if (isset($_POST['tambahLokasi'])) {
    $nama_lokasi = $_POST['nama_lokasi'];
    $sql = mysqli_query($conn, "INSERT INTO lokasi_wisata(nama_lokasi) 
    VALUES ('$nama_lokasi')"); 
    header("Location: admin.php");
    exit();
}
?>
