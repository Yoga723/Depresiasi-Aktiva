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

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menambah Aktiva</title>
    <style type="text/css">
        div{
            width: 500px;
            justify-content: center;
            align-items: center;
        }
        div .formulir{
            border-style: solid;
            border-width: 2px;
            border-radius: 20px;
            position: relative;
            background-color: lightgrey;
        }
        div form .submit{
            background-color: lightblue;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h3 align="center">Masukkan data aktiva</h3>
<center><div>
<form action="tambah-action.php" method="post" class="formulir" align="center">
<p><label>Kode Aktiva :</label> <input type="text" name="kd_aktiva" required> 
    <br><br>
    <label>Nama Aktiva :</label> <input type="text" name="nm_aktiva" required>
    <br><br>
    <label>Harga Peroleh :</label> <input type="int" name="hrg_peroleh" required>
    <br><br>
    <label>Tanggal Diperoleh :</label> <input type="date" name="tgl_diperoleh" required>
    <br><br>
    <label>Nilai Residu :</label> <input type="int" name="nilai_residu" required>
    <br><br>
    <label>Umur Ekonomis :</label> <input type="int" name="umur_ekonomis" required>Tahun
</p>
    <input type="submit" class="submit" value="Masukkan Data" onclick="window.location='index.php'">
</form>
</div></center>
</body>
</html>