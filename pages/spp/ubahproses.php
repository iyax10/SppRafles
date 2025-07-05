<?php 
include '../../config/koneksi.php';

$idspp = $_POST['idspp'];
$jurusan = $_POST['jurusan'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$ubah = mysqli_query($koneksi,"UPDATE tbspp set jurusan= '$jurusan', tahun= '$tahun', nominal='$nominal'where idspp='$idspp'");

if ($ubah)
{
	
	session_start();
	$_SESSION['alert2'] = "Data Berhasil diubah";
	header("location:../../index.php?page=spp");
}
else
{
	echo '<script>alert("Data gagal Diubah");
	window.location.href="../../index.php?page=ubah-spp"</script>';
}










 ?>