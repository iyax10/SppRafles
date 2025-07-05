	<?php 
include '../../config/koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$level = $_POST['level'];

$ubah = mysqli_query($koneksi,"UPDATE tbpetugas set namapetugas= '$nama', level='$level'where username='$username'");

if ($ubah)
{
	
	session_start();
	$_SESSION['alert2'] = "Data Berhasil diubah";
	header("location:../../index.php?page=petugas");
}
else
{
	echo '<script>alert("Data gagal Diubah");
	window.location.href="../../index.php?page=ubah-petugas"</script>';
}










 ?>