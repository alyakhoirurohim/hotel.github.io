<html>
    <head>
	<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	<div class="main">
	<div class="navbar">
	<label class="ttl"> Tabel Pengunjung</label>
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
	     	<td>NIK</td>
			<td>Nama Pengunjung</td>
			<td>No Telepon</td>
			<td>Alamat</td>
			<td>Status</td>
			<td>Aksi</td>
			
        </tr>

		<?php
		 include "koneksi.php";
		 $data=mysqli_query($koneksi,"select * from pengunjung");
		 while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['nik'] ?> </td>
	<td> <?php echo $tampil['nama_pengunjung'] ?> </td>
    <td> <?php echo $tampil['telepon'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
	<td> <?php echo $tampil['status'] ?> </td>
	<td> <a href="hapus-pengunjung.php?nik=<?php echo $tampil ['nik']; ?>"><button>hapus</button></a>
	<a href="edit-pengunjung.php?nik=<?php echo $tampil ['nik']; ?>"><button>edit</button></a></td>
</tr>

<?php
 }
?>

</table>
<a href="input-pengunjung.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</html>	