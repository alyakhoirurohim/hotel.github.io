<h3>Edit Data Kamar</h3>

<head>
	<link rel="stylesheet" type="text/css" href="input.css">
	</head>	 

<?php
include 'koneksi.php';
$id_kamar= $_GET['id_kamar'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">

<table>
    <tr>
        <td>ID Kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Kamar</td>
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