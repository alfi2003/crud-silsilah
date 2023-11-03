<?php
// koneksi database 
include 'koneksi.php';

// menangkap data id yang di kirim dari lewat url
$id = $_GET['id'];

// delete data di database berdasarkan id
$db->query("DELETE FROM kel_budi WHERE id='$id'")or die(mysqli_error());

// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=delete");
?>