<?php
if(isset($_GET['page'])){
	$page=$_GET ['page'];

	switch ($page) {
		case '':
		include "pages/dashboard.php";
		break;


		 case 'spp':
		 include "pages/spp/dataspp.php";
		 break;

		case 'tambah-spp':
		include "pages/spp/isispp.php";
		break;

		case 'ubah-spp':
		include "pages/spp/ubahisi_spp.php";
		break;

		case 'detail-spp':
		include "pages/spp/detailspp.php";
		break;




		case 'kelas':
		 include "pages/kelas/data_kelas.php";
		 break;

		case 'tambah-kelas':
		include "pages/kelas/tambahkelas.php";
		break;

		case 'ubah-kelas':
		include "pages/kelas/ubahkelas.php";
		break;

		case 'detail-kelas':
		include "pages/kelas/detail_kelas.php";
		break;



		case 'petugas':
		 include "pages/petugas/data_petugas.php";
		 break;

		case 'tambah-petugas':
		include "pages/petugas/tambahpetugas.php";
		break;

		case 'ubah-petugas':
		include "pages/petugas/ubahpetugas.php";
		break;

		case 'detail-petugas':
		include "pages/petugas/detail_petugas.php";
		break;


		case 'siswa':
		 include "pages/siswa/data_siswa.php";
		 break;

		case 'tambah-siswa':
		include "pages/siswa/tambahsiswa.php";
		break;

		case 'ubah-siswa':
		include "pages/siswa/ubahsiswa.php";
		break;

		case 'detail-siswa':
		include "pages/siswa/detail_siswa.php";
		break;

		case 'reset-pw':
		include "pages/siswa/resetpw.php";
		break;



		case 'pembayaran':
		 include "pages/pembayaran/data_pembayaran.php";
		 break;

		case 'tambah-pembayaran':
		include "pages/pembayaran/pembayaran.php";
		break;

		case 'ubah-pembayaran':
		include "pages/pembayaran/ubahpembayaran.php";
		break;

		case 'detail-pembayaran':
		include "pages/pembayaran/detail.php";
		break;


		case 'invoice':
		include "pages/pembayaran/print.php";
		break;

		


 		case 'ubah-pw':
		include "login/ubahpw.php";
		break;



		 






		}
}else {
	include "pages/dashboard.php";
}
		
		



?>