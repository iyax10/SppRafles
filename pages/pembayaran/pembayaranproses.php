<?php 

include '../../config/koneksi.php';
session_start();
$username=$_SESSION['username'];

// $nik = mysqli_query($koneksi,"SELECT * FROM tbmasyarakat where nik = '$nik'");
//  $row = mysqli_fetch_array($nik);

 // date_default_timezone_set('Asia/Jakarta');
 // date_default_timezone_get();

$idpembayaran  = $_POST['idpembayaran'];
$nisn  = $_POST['nisn'];
$tgl = date('Y-m-d');
$blnbayar  = $_POST['blnbayar'];
$thnbayar  = $_POST['thnbayar'];
$idspp  = $_POST['idspp'];
$metodbayar  = $_POST['metodbayar'];

$cari=mysqli_query($koneksi,"SELECT * FROM tbpembayaran WHERE  nisn='$nisn' AND blnbayar='$blnbayar' AND thnbayar='$thnbayar'");
if(mysqli_num_rows($cari) >= 1){
	session_start();
	$_SESSION['alert2'] = "Siswa Sudah Melakukan Pembayaran di Bulan dan Tahun Tersebut";
	header("location:../../index.php?page=tambah-pembayaran");
}else{


$simpan = mysqli_query($koneksi,"INSERT INTO tbpembayaran VALUES ('$idpembayaran','$username','$nisn','$tgl','$blnbayar','$thnbayar','$idspp','$metodbayar')");

if ($simpan)
{
	session_start();
	$_SESSION['alert1'] = "Pembayaran SPP Siswa Berhasil ";
	header("location:../../index.php?page=tambah-pembayaran");
}
else
{
	echo '<script>alert("Transaksi SPP Gagal");
	window.location.href="../../index.php?page=tambah-pembayaran"</script>';
}
}

 ?>