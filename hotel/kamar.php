<html>
	<head>
	<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	<body>
		<div class="main">
			<div class="navbar">
			<label class="ttl">Tabel kamar</label>
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
					<td>ID Kamar</td>
					<td>Tipe Kamar</td>
					<td>Harga</td>
					<td>Aksi</td>
				</tr>

				<?php
				include "koneksi.php";
				$data=mysqli_query($koneksi,"select * from kamar");
				while($tampil=mysqli_fetch_array($data)){
		?>

		<tr>
			<td> <?php echo $tampil['id_kamar'] ?> </td>
			<td> <?php echo $tampil['tipe_kamar'] ?> </td>
			<td> <?php echo $tampil['harga'] ?> </td>
			<td> <a href="hapus-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>"><button>hapus</button></a>
			<a href="edit-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>"><button><button>edit</button></button></a></td>
		</tr>

		<?php
		}
		?>

		</table>
		<a href="input-kamar.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>

	</div>
</body>
</html>	