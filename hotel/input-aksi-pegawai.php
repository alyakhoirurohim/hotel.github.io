<?php
include 'koneksi.php';

$id_pegawai =$_POST['id_pegawai'];
$nama_pegawai =$_POST['nama_pegawai'];
$telepon =$_POST['telepon'];
$alamat =$_POST['alamat'];

mysqli_query($koneksi,"INSERT INTO pegawai VALUES('$id_pegawai','$nama_pegawai','$telepon','$alamat')");
header('location:pegawai.php');
?>