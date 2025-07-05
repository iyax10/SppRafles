<?php 
include '../../config/koneksi.php';

$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$kompetensi = $_POST['kompetensi'];

$ubah = mysqli_query($koneksi,"UPDATE tbkelas set namakelas= '$kelas', kompetensi='$kompetensi'where idkelas='$idkelas'");

if ($ubah)
{
	session_start();
	$_SESSION['alert2'] = "Data Berhasil diubah";
	header("location:../../index.php?page=kelas");

}
else
{
	echo '<script>alert("Data gagal Diubah");
	window.location.href="../../index.php?page=ubah-kelas"</script>';
}










 ?>