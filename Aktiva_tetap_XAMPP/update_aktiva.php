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
	<title>Memperbarui Aktiva</title>
	<style type="text/css">
		table tr td{
			text-align: center;
			padding: 8px 8px 8px 8px;
		}
		form{
			border: solid;
			border-width: 2px;
			border-spacing: all;

		}
	</style>
</head>
<body>
<div><center>
	<table border="1px">
		<tr bgcolor="softblue">
				<td>Kode Aktiva</td>
				<td>Nama Aktiva</td>
				<td>Harga Diperoleh</td>
				<td>Tanggal Diperoleh</td>
				<td>Umur Ekonomis</td>
				<td>Nilai Residu(Sisa)</td>
				<td>Nilai Depresiasi</td>
			</tr>
			<?php
			while ($row=mysqli_fetch_array($query)){
			echo "<tr>
				<td><label>".$row["kd_aktiva"]."</label></td>
				<td><label>".$row["nm_aktiva"]."</label></td>
				<td><label>Rp.".$row["hrg_peroleh"]."</label></td>
				<td><label>".$row["tgl_peroleh"]."</label></td>
				<td><label>".$row["umur_ekonomis"]." Tahun</label></td>
				<td><label>Rp.".$row["nilai_residu"]." </label></td>
				<td><label>Rp.".$row["depresiasi"]."</label></td>
			</tr>";
			}
			?>
	</table>
	<h2>Masukkan Kode Aktiva untuk memperbarui</h2>
	<form action="update_aktiva-action.php" method="post">
		<p>Kode Aktiva <input type="text" name="kd_aktiva" required="submit"></p>
		<p>Nama Aktiva <input type="text" name="nm_aktiva" required="submit"></p>
		<p>Harga Peroleh <input type="text" name="hrg_peroleh" required="submit"></p>
		<p>Tanggal Didapatkan <input type="Date" name="tgl_peroleh" required="submit"></p>
		<p>Umur Ekonomis (lama digunakan) <input type="text" name="umur_ekonomis" required="submit"></p>
		<p>Nilai Residu(Depresiasi Per Periode) <input type="text" name="nilai_residu" required="submit"></p>
		<input type="submit" class="submit" value="Update Data">
	</form>
</center></div>
</body>
</html>