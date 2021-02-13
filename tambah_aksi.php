<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$id_mhs = $_POST['id_mhs'];
$jurusan = $_POST['jurusan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_mahasiswa values('$nama','$id_mhs','$jurusan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>