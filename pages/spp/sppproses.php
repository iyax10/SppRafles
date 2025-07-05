<?php 
include '../../config/koneksi.php';

$idspp  = $_POST['idspp'];
$jurusan  = $_POST['jurusan'];
$tahun  = $_POST['tahun'];
$nominal = $_POST['nominal'];





$simpan = mysqli_query($koneksi,"INSERT INTO tbspp VALUES ('$idspp','$jurusan','$tahun','$nominal')");

if ($simpan)
{
	
	session_start();
	$_SESSION['alert1'] = "Data Berhasil Ditambahkan";
	header("location:../../index.php?page=spp");

}
else
{
	echo '<script>alert("Menu /gagal Ditambahkan");
	window.location.href="../../index.php?page=tambah-spp"</script>';
}



 ?>