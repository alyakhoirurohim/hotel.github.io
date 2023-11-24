<h3>Edit Data Pegawai</h3>
<head>
	<link rel="stylesheet" type="text/css" href="input.css">
	</head>	 

<?php
include 'koneksi.php';
$id_pegawai= $_GET['id_pegawai'];
$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
<table>
    <tr>
        <td>ID Pegawai</td>
        <td><input type="number" name="id" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pegawai</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
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
        <td><input type="submit" value="Simpan"></td>          
    </tr>
</table>
</form>

<?php
}
?>