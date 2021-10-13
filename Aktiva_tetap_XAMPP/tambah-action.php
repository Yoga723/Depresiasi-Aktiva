<?php
$nama_server="localhost";
$username="root";
$password="";
$db_nama="aktiva_tetap";

$conn= new mysqli($nama_server, $username, $password, $db_nama);
if ($conn->connect_error) {
    die("koneksi gagal");
}

$tabel = "SELECT * FROM tabel_aktiva";

$query = mysqli_query($conn, $tabel);

if (!$query) {
    die("koneksi gagal");
}

// memproses Input dari tambah_aktiva.php
$kd_aktiva = $_POST['kd_aktiva'];
$nm_aktiva = $_POST['nm_aktiva'];
$hrg_peroleh = $_POST['hrg_peroleh'];
$tgl_diperoleh = $_POST['tgl_diperoleh'];
$nilai_residu = $_POST['nilai_residu'];
$umur_ekonomis = $_POST['umur_ekonomis'];
$depresiasi = ($hrg_peroleh - $nilai_residu) / $umur_ekonomis;
$tambah = mysqli_query($conn, "INSERT INTO tabel_aktiva VALUES('$kd_aktiva', '$nm_aktiva', '$hrg_peroleh', '$tgl_diperoleh', '$nilai_residu', '$umur_ekonomis', '$depresiasi')");
echo "Data Aktiva baru sudah dimasukkan <a href='index.php'>Kembali</a>";
?>