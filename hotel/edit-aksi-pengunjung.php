<?php
include 'koneksi.php';

$nik= $_POST['nik'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$telepon= $_POST['telepon'];
$alamat= $_POST['alamat'];
$status= $_POST['status'];

mysqli_query($koneksi,"UPDATE pengunjung SET nik='$nik',nama_pengunjung='$nama_pengunjung',telepon='$telepon',alamat='$alamat',status='$status'WHERE nik='$nik'");
header("location: pengunjung.php"); 

?>