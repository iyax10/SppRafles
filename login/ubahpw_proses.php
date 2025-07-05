<?php 
include '../config/koneksi.php';
$passwordlama = md5($_POST['passwordlama']);
$passwordbaru = md5($_POST['passwordbaru']);
$ulangpwbaru = md5($_POST['ulangpwbaru']);
session_start();
$username=$_SESSION['username'];

if($_SESSION['level']=="siswa"){
$caripassword  =mysqli_query($koneksi,"SELECT * FROM tbsiswa WHERE nisn = '$username' AND password='$passwordlama'");
if(mysqli_num_rows($caripassword)>=1){


	if($passwordbaru==$ulangpwbaru){
		$ubah=mysqli_query($koneksi, "UPDATE tbsiswa SET password='$ulangpwbaru' WHERE nisn='$username'");

	if($ubah){
			echo '<script>alert("Password lama berhasil di ubah");
	window.location.href="logout.php"</script>';
					}

	}else{
	echo '<script>alert("Password baru tidak sesuai");
	window.location.href="../index.php?page=ubah-pw"</script>';

	}

	}else{
	echo '<script>alert("Password lama tidak sesuai");
	window.location.href="../index.php?page=ubah-pw"</script>';

}

}else{
	$caripassword  =mysqli_query($koneksi,"SELECT * FROM tbpetugas WHERE username = '$username' AND password='$passwordlama'");
if(mysqli_num_rows($caripassword)>=1){


	if($passwordbaru==$ulangpwbaru){
		$ubah=mysqli_query($koneksi, "UPDATE tbpetugas SET password='$ulangpwbaru' WHERE username='$username'");

		if($ubah){
				echo '<script>alert("Password lama berhasil di ubah");
		window.location.href="logout.php"</script>';
						}

	}else{
	echo '<script>alert("Password baru tidak sesuai");
	window.location.href="../index.php?page=ubah-pw"</script>';

	}

}else{
	echo '<script>alert("Password lama tidak sesuai");
	window.location.href="../index.php?page=ubah-pw"</script>';


}
}

 ?>