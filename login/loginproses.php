<?php 
include "../config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$sebagai  = $_POST['sebagai'];

if ($sebagai=='siswa')
{ 

$check=mysqli_query($koneksi, "SELECT * FROM tbsiswa WHERE nisn='$username' AND password='$password' ");


if(mysqli_num_rows($check) >= 1){
	while ($row = mysqli_fetch_array($check)){
		session_start();
		
		$_SESSION['username'] = $row['nisn'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level']= "siswa";
		?>
		<script>alert("Selamat Datang <?= $row['nama']; ?> Di aplikasi Pembayaran SPP");
	window.location.href="../index.php"</script>



	<?php 
   }

}else{
	echo '<script>alert("Data Tidak Ditemukan!");
	window.location.href="../login/login.php"</script>';
}

}


// login sebagai pengelola
else if ($sebagai=='pegawai')
{
$check=mysqli_query($koneksi, "SELECT * FROM tbpetugas WHERE username='$username' AND password = '$password'");


if(mysqli_num_rows($check) >= 1){
	while ($row = mysqli_fetch_array($check)){
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['namapetugas'];
		$_SESSION['level']= $row['level'];
?>
		<script>alert("Selamat Datang <?= $row['namapetugas']; ?> Di aplikasi Pemabayaan SPP");
	window.location.href="../index.php"</script>




<!-- selain dari siswa n pegawai -->	
<?php 
}
}else{
	echo '<script>alert("Username atau Password Salah");
	window.location.href="../login/login.php"</script>';
}
}
?>