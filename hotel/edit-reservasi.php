<h3>Edit Data Reservasi</h3>
<head>
	<link rel="stylesheet" type="text/css" href="input.css">
	</head>	 

<?php
include 'koneksi.php';
$id_reservasi= $_GET['id_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM reservasi WHERE id_reservasi='$id_reservasi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-reservasi.php">
<table>
    <tr>
        <td>ID Reservasi</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>ID Kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>ID Pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>

    <tr>
        <td>NIK</td>
        <td><input type="text" name="nik" value="<?php echo $tampil['nik']; ?>"></td>
    </tr>

	<tr>
        <td>Checkin</td>
        <td><input type="date" name="checkin" value="<?php echo $tampil['checkin']; ?>"></td>
    </tr>
	<tr>
        <td>Checkout</td>
        <td><input type="date" name="checkout" value="<?php echo $tampil['checkout']; ?>"></td>
    </tr>

    <tr>
        <td>Tipe Kamar</td>
        <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>

    <tr>
        <td>Harga</td>
        <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>

    <tr>
        <td><input type="submit" value="Simpan"></td>          
    </tr>
</table>
</form>

<?php
}
?>