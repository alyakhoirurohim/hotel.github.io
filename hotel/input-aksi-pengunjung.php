<?php
include 'koneksi.php';

$nik =$_POST['nik'];
$nama_pengunjung =$_POST['nama_pengunjung'];
$telepon =$_POST['telepon'];
$alamat =$_POST['alamat'];
$status =$_POST['status'];

mysqli_query($koneksi,"INSERT INTO pengunjung VALUES('$nik','$nama_pengunjung','$telepon','$alamat','$status')");
header('location:pengunjung.php');
?>