<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// menginput data ke database
$db->query("UPDATE kel_budi SET nama='$nama', jenis_kelamin='$jenis_kelamin', WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=update");
?>