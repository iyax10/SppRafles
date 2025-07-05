<?php 
include '../../config/koneksi.php';


$username= $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$level = $_POST['level'];



$simpan = mysqli_query($koneksi,"INSERT INTO tbpetugas VALUES ('$username','$password','$nama','$level')");

if ($simpan)
{
	session_start();
	$_SESSION['alert1'] = "Data Berhasil Ditambahkan";
	header("location:../../index.php?page=petugas");
	
}
else
{
	echo '<script>alert("Data Kelas Gagal ditambahkan");
	window.location.href="../../index.php?page=tambah-petugas"</script>';
}



 ?>