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
	<title>Menghitung Depresiasi</title>
	<style type="text/css">
	@import url(css/bootstrap.min.css);
			table tr td{
				padding: 12px 12px 12px 12px;
			}
			table tr td button a{
				text-decoration: none;
			}
		
	</style>
</head>
<body>
<div>
<center>
	<table border="3px">
		<thead></thead>
		<tbody>
			<tr>
				<td colspan="7" align="center" bgcolor="lightgrey"><h3>depresiasi aktiva tetap</h3></td>
			</tr>
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
				<td><label>".$row["umur_ekonomis"]."</label></td>
				<td><label>Rp.".$row["nilai_residu"]."</label></td>
				<td><label>Rp.".$row["depresiasi"]."</label></td>
			</tr>";
			}
			?>
			<tr>
				<td colspan="7" align="center"><button><a href="tambah_aktiva.php">Tambah Aktiva</a></button></td>
			</tr>
		</tbody>
	</table>
</center>
</div>
</body>
</html>	