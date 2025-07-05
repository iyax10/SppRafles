<?php 
include '../../config/koneksi.php';

$nisn 	    = $_POST['nisn'];
$password 		= md5($_POST['password']);


$ubah = mysqli_query($koneksi,"UPDATE tbsiswa SET password='$password' WHERE nisn='$nisn'");

if ($ubah)
{
	
	session_start();
	$_SESSION['alert5'] = "Data Berhasil Ditambahkan";
	header("location:../../index.php?page=siswa");
 }
// else
// {
// 	echo '<script>alert("Data gagal Diubah");
// 	window.location.href="../../index.php?page=ubah-siswa"</script>';
// }










 ?>