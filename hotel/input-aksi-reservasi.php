<?php
include 'koneksi.php';

$id_reservasi =$_POST['id_reservasi'];
$id_kamar =$_POST['id_kamar'];
$id_pegawai =$_POST['id_pegawai'];
$nik =$_POST['nik'];
$checkin =$_POST['checkin'];
$checkout =$_POST['checkout'];
$tipe_kamar =$_POST['tipe_kamar'];
$harga =$_POST['harga'];

mysqli_query($koneksi,"INSERT INTO reservasi VALUES('$id_reservasi','$id_kamar','$id_pegawai','$nik','$checkin','$checkout','$tipe_kamar','$harga ')");
header('location:reservasi.php');
?>