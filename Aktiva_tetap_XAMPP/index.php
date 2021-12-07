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
	<meta charset="utf-8" name="deskripsi" content="Situs Gratis ini menyediakan layanan untuk menghitung Depresiasi dari sebuah Aktiva tetap per periode berdasarkan perkiraan umur ekonomis"/>
	<style type="text/css">
	@import url(css/bootstrap.min.css);
			/* CSS untuk bar navigasi menu */
			.nav-tab{
				border-style: groove;
				border-width: 3px;
				border-bottom-right-radius: 10px;
				border-bottom-left-radius: 10px;
				background-color: lightgrey;
				margin: -5px 0px 20px 0px;
			}
			.nav-tab img{
				width: 65px;
				height: 50px;
				display: inline-block;
				padding-left: 10px;
			}
			.nav ul li{
				list-style: none;
				align-content: space-between;
				display: inline-block;
				font-size: 25px;
				padding: 5px 10px 0px 10px;
			}
			.nav ul li a{
				color: black;
				text-decoration: none;
			}
			.nav ul li:hover{
				background-color: lightcoral;
				border-style: solid;
			}
			.nav .drop_down_item{
				display: none;
				position: absolute;
			}
			.nav .drop_down:hover .drop_down_item{
				background-color: lightyellow;
				text-decoration: none;
				display: block;
				border-radius: 10px;
				border-style: groove;
				width: 80px;
			}
			.drop_down_item a:hover{
				background-color: white;
			}
			.drop_down_item a{
				display: block;
				text-align: center;
				font-size: 19px;
				margin: 10px;
				-webkit-animation:appear 1s ease 0s 1 normal;
				-moz-animation:appear 1s ease 0s 1 normal;
				-ms-animation:appear 1s ease 0s 1 normal;
				animation:appear 1s ease 0s 1 normal;
			}
			/* setting ini diambil dari angrytools.com 
				Kode ini untuk animasi Hover*/
			@-webkit-keyframes appear {
			0%{ opacity: 0; -webkit-transform: scale3d(0.3, 0.3, 0.3); transform: scale3d(0.3, 0.3, 0.3); }
			60%{ opacity: 1; -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1); }
			}
			/* setting ini diambil dari angrytools.com 
				Kode ini untuk animasi Hover*/
			@keyframes appear {
			0%{ opacity: 0; transform: scale3d(0.3, 0.3, 0.3); }
			60%{ opacity: 1; transform: scale3d(1,1,1); }
			}

			/* CSS untuk Navigasi Hamburger */
			.hamburger ul li{
				justify-content: right;
			}
			.hamburger a{
				text-decoration: none;

			}
			.hamburger ul li{
				display: inline-block;
				padding-left: 5px;
				position: relative;
			}
			/* CSS untuk tabel Aktiva */
			table tr td{
				padding: 12px 12px 12px 12px;
			}
			table tr td button a{
				text-decoration: none;
			}
		
	</style>
</head>
<body>
<div class="nav-tab">
	<!-- Navigasi menu ke-1 -->
	<nav class="nav">
		<img src="4481010.png">
		<ul>
			<li>
				<a href="#">Home</a>
			</li>
			<li class="drop_down">
				<a href="#">App</a>
				<div class="drop_down_item">
					<a href="#">Game</a>
					<a href="#">Social</a>
					<a href="#">Market</a>
				</div>
			</li>
			<li>
				<a href="#">Feature</a>
			</li>
		</ul>
	</nav>
</div>

	<!-- Navigasi menu ke-1 -->
<div>
	<nav class="hamburger">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">App</a></li>
		</ul>
	</nav>
</div>

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
			<tr>
				<td colspan="7" align="center"><button><a href="update_aktiva.php">Perbarui Aktiva</a></button></td>
			</tr>
		</tbody>
	</table>
</center>
</div>

<p> Hello World! ini test yang baru </p>

<<table class="table table-bordered table-inverse table-responsive">
	<thead class="thead-default">
		<tr>
			<th>Hello</th>
			<th>World</th>
			<th>!</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td scope="row">Test</td>
				<td>Satu</td>
				<td>1</td>
			</tr>
			<tr>
				<td scope="row">Test</td>
				<td>Dua</td>
				<td>3(tiga)</td>
			</tr>		
		</tbody>
</table>
</body>
</html>	