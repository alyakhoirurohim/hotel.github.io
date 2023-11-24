<?php
include 'koneksi.php';

$nik = $_GET['nik'];
 
mysqli_query($koneksi,"DELETE FROM pengunjung where nik='$nik'");
header("location: pengunjung.php");
?>