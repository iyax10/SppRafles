<?php 
include '../../config/koneksi.php';

$nisn 	    = $_POST['nisn'];
$nis 		= $_POST['nis'];
$nama 		= $_POST['nama'];
$idkelas    = $_POST['idkelas'];
$alamat     = $_POST['alamat'];
$tlp        = $_POST['tlp'];
$idspp      = $_POST['idspp'];

$ubah = mysqli_query($koneksi,"UPDATE tbsiswa SET nis='$nis',nama='$nama',idkelas='$idkelas',alamat='$alamat',tlp='$tlp',idspp='$idspp' WHERE nisn='$nisn'");

if ($ubah)
{
	
session_start();
	$_SESSION['alert2'] = "Data Berhasil diubah";
	header("location:../../index.php?page=siswa");
 }
// else
// {
// 	echo '<script>alert("Data gagal Diubah");
// 	window.location.href="../../index.php?page=ubah-siswa"</script>';
// }










 ?>