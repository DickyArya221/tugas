<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_mhs = $_POST['id_mhs'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
// update data ke database
mysqli_query($koneksi,"update tb_mahasiswa set nama='$nama', id_mhs='$id_mhs', jurusan='$jurusan' where id_mhs='$id_mhs'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>