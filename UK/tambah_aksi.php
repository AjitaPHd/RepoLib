<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into anggota values('','$nama','$nim','$prodi')");
 
// mengalihkan halaman kembali ke halaman_admin.php
header("location:halaman_admin.php");
 
?>