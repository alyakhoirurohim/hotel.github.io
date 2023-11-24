<html>
<head>
	<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	<body>
		
	
	<div class="main">
	<div class="navbar">
	<label class="ttl">Tabel Pegawai</label>
		<ul>
		<li><a href="home.php">Home</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pengunjung.php">Pengunjung</a></li>
		</ul>
	</div>
	<table border="1">

		<tr>
			<td>ID Pegawai</td>
			<td>Nama Pegawai</td>
			<td>No Telepon</td>
			<td>Alamat</td>
			<td>Aksi</td>
        </tr>

		<?php
		 include "koneksi.php";
		 $data=mysqli_query($koneksi,"select * from pegawai");
		 while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
	<td> <?php echo $tampil['nama_pegawai'] ?> </td>
    <td> <?php echo $tampil['telepon'] ?> </td>
	<td> <?php echo $tampil['alamat'] ?> </td>
	<td> <a href="hapus-pegawai.php?id_pegawai=<?php echo $tampil ['id_pegawai']; ?>"><button>hapus</button></a>
	<a href="edit-pegawai.php?id_pegawai=<?php echo $tampil ['id_pegawai']; ?>"><button>edit</button></a></td>
</tr>

<?php
 }
?>

</table>
<a href="input-pegawai.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</body>
</html>	