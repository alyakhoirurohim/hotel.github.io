<?php
include 'koneksi.php';

$id_kamar =$_POST['id_kamar'];
$tipe_kamar =$_POST['tipe_kamar'];
$harga =$_POST['harga'];


mysqli_query($koneksi,"insert into kamar values('$id_kamar','$tipe_kamar','$harga')");
header('location:kamar.php');
?>