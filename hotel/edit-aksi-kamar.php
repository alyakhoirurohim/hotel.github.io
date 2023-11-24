<?php
include 'koneksi.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"UPDATE kamar SET id_kamar='$id_kamar',tipe_kamar='$tipe_kamar',harga='$harga' WHERE id_kamar='$id_kamar'");
header("location: kamar.php"); 

?>