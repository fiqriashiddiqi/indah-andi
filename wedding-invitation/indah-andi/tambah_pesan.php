<?php 
// koneksi database
include('koneksi.php');
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];

// echo $nama,$pesan,$alamat;
// die(); 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_andi(nama,alamat,pesan) values('$nama','$alamat','$pesan')") or die(mysqli_error($koneksi));
 
// mengalihkan halaman kembali ke index.php
// header("location:index.php");
 
?>
