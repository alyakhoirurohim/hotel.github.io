<?php
include 'koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$id_kamar = $_POST['id_kamar'];
$id_pegawai= $_POST['id_pegawai'];
$nik= $_POST['nik'];
$checkin= $_POST['checkin'];
$checkout= $_POST['checkout'];
$tipe_kamar= $_POST['tipe_kamar'];
$harga= $_POST['harga'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi',id_kamar='$id_kamar',id_pegawai='$id_pegawai',nik='$nik',checkin='$checkin',checkout='$checkout',tipe_kamar='$tipe_kamar',harga='$harga' WHERE id_reservasi='$id_reservasi'");
header("location: pegawai.php"); 

?>