<?php 
include '../../config/koneksi.php';

$nisn 	    = $_POST['nisn'];
$nis 		= $_POST['nis'];
$nama 		= $_POST['nama'];
$idkelas    = $_POST['idkelas'];
$alamat     = $_POST['alamat'];
$tlp        = $_POST['tlp'];
$idspp      = $_POST['idspp'];

// Cek apakah NISN sudah tersedia
$cek = mysqli_query($koneksi, "SELECT * FROM tbsiswa WHERE nisn='$nisn'");
if (mysqli_num_rows($cek) > 0){
	session_start();
	$_SESSION['alert4'] = "NISN Sudah tersedia, Mohon Input NISN yang berbeda";
	header("location:../../index.php?page=siswa");
	exit; // Keluar dari skrip jika NISN sudah tersedia
}

// Jika NISN belum tersedia, buat password siswa menjadi NIS yang diinput
$password = md5($nis);

$simpan = mysqli_query($koneksi,"INSERT INTO tbsiswa VALUES ('$nisn','$nis','$nama','$idkelas','$alamat','$tlp','$password','$idspp')");

if ($simpan) {
	session_start();
	$_SESSION['alert1'] = "Data Berhasil Ditambahkan";
	header("location:../../index.php?page=siswa");
	exit; // Keluar dari skrip setelah redirect
} else {
	echo '<script>alert("Data Kelas Gagal ditambahkan");
	window.location.href="../../index.php?page=tambah-siswa"</script>';
}
?>
