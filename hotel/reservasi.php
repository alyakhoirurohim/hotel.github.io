<html>
<head>
	<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	<div class="main">
	<div class="navbar">
	<label class="ttl">Tabel Reservasi</label>
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
			<td>ID Reservasi</td>
			<td>ID Kamar</td>
			<td>ID Pegawai</td>
			<td>NIK</td>
			<td>Checkin</td>
			<td>Checkout</td>
			<td>Tipe Kamar</td>
			<td>Harga</td>
			<td>Aksi</td>
        </tr>

		<?php
		 include "koneksi.php";
		 $data=mysqli_query($koneksi,"select * from reservasi");
		 while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['id_reservasi'] ?> </td>
	<td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
	<td> <?php echo $tampil['nik'] ?> </td>
	<td> <?php echo $tampil['checkin'] ?> </td>
	<td> <?php echo $tampil['checkout'] ?> </td>
	<td> <?php echo $tampil['tipe_kamar'] ?> </td>
	<td> <?php echo $tampil['harga'] ?> </td>
	<td> <a href="hapus-reservasi.php?id_reservasi=<?php echo $tampil ['id_reservasi']; ?>"><button>hapus</button></a>
	<a href="edit-reservasi.php?id_reservasi=<?php echo $tampil ['id_reservasi']; ?>"><button>edit</button></a></td>
</tr>

<?php
 }
?>

</table>
<a href="input-reservasi.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</div>

</html>	