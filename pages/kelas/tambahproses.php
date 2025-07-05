<?php 
include '../../config/koneksi.php';

$idkelas  = $_POST['idkelas'];
$kelas  = $_POST['kelas'];
$kompetensi = $_POST['kompetensi'];





$simpan = mysqli_query($koneksi,"INSERT INTO tbkelas VALUES ('$idkelas','$kelas','$kompetensi')");

if ($simpan)
{
	session_start();
	$_SESSION['alert1'] = "Data Berhasil Ditambahkan";
	header("location:../../index.php?page=kelas");

	}
else
{
	echo '<script>alert("Data Kelas Gagal ditambahkan");
	window.location.href="../../index.php?page=tambah-kelas"</script>';
}



 ?>