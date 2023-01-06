<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
 
// update data ke database
mysqli_query($koneksi,"update anggota set nama='$nama', nim='$nim', prodi='$prodi' where id='$id'");
 
// mengalihkan halaman kembali ke halaman_admin.php
header("location:halaman_admin.php");
 
?>