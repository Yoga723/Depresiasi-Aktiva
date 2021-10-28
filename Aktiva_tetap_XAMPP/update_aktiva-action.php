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

$kd_aktiva = $_POST['kd_aktiva'];
$nm_aktiva = $_POST['nm_aktiva'];
$hrg_peroleh = $_POST['hrg_peroleh'];
$tgl_diperoleh = $_POST['tgl_diperoleh'];
$nilai_residu = $_POST['nilai_residu'];
$umur_ekonomis = $_POST['umur_ekonomis'];
$depresiasi = ($hrg_peroleh - $nilai_residu) / $umur_ekonomis;

$perbarui = mysqli_query($conn, "UPDATE tabel_aktiva SET kd_aktiva=$kd_aktiva");

$update = mysqli_query($conn, "UPDATE tabel_aktiva SET kd_aktiva="$kd_aktiva", nm_aktiva="$nm_aktiva", hrg_peroleh="$hrg_peroleh", tgl_diperoleh="$tgl_diperoleh", nilai_residu="$nilai_residu", umur_ekonomis="$umur_ekonomis", depresiasi="$depresiasi" WHERE kd_aktiva="$kd_aktiva" ");
header('location: index.php');
?>
