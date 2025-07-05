<?php 

include '../../config/koneksi.php';
$id_hapus =$_GET['id_hapus'];
	
$hapus=mysqli_query($koneksi,"delete from tbspp where idspp='$id_hapus'");

if ($hapus)
{
	
	session_start();
	$_SESSION['alert3'] = "Data Berhasil Dihapus";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../../index.php?page=spp">';
	exit;
}
else{
	echo
	'<script>
	alert("Data Gagal dihapus");
	window.location.href="index.php?page=spp";
	</script>';
}

 ?>