<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// menginput data ke database
$db->query("insert into kel_budi values('','$nama','$jenis_kelamin')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=add");
 
?>