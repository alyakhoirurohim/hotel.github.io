<?php
include 'koneksi.php';

$id_pegawai = $_POST['id'];
$nama_pegawai = $_POST['nama_pegawai'];
$telepon= $_POST['telepon'];
$alamat= $_POST['alamat'];

mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', 
nama_pegawai='$nama_pegawai',telepon='$telepon',alamat='$alamat' 
WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php"); 

?>