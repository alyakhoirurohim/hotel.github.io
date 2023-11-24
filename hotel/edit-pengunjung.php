<h3>Edit Data Pengunjung</h3>

<head>
	<link rel="stylesheet" type="text/css" href="input.css">
	</head>	 

<?php
include 'koneksi.php';
$nik= $_GET['nik'];
$data = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE nik='$nik'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pengunjung.php">
<table>
    <tr>
        <td>NIK</td>
        <td><input type="text" name="nik" value="<?php echo $tampil['nik']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pengunjung</td>
        <td><input type="text" name="nama_pengunjung" value="<?php echo $tampil['nama_pengunjung']; ?>"></td>
    </tr>
    <tr>
        <td>No Telepon</td>
        <td><input type="text" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
    </tr>
	<tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>

    <tr>
        <td>status</td>
        <td><input type="text" name="status" value="<?php echo $tampil['status']; ?>"></td>
    </tr>

    <tr>
        <td><input type="submit" value="Simpan"></td>          
    </tr>
</table>
</form>

<?php
}
?>