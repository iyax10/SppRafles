<title>Transaksi </title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: #B2C8DF">
                <h5 class="text-center"><b>INPUT DATA PEMBAYARAN</b></h5>
              </div>
 						<div
               class="card-body" style="background-color: #424242">
 							<form method="POST" action="pages/pembayaran/pembayaranproses.php">

 								 <?php 
 								include 'config/koneksi.php';
 								$carinomor=mysqli_query($koneksi, "SELECT * FROM tbpembayaran");
 								$nomor=mysqli_num_rows($carinomor);
 								$jumlah=$nomor+1;
 								$waktu=date('dmy');
 								$nourut="TSP".$waktu.$jumlah;
 								

 								 ?>

 								 <?php 
                if(isset($_SESSION['alert1'])):
                 ?>
               <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                <strong><?php echo $_SESSION['alert1']; ?></strong>
                
               </div>
               <?php 
               unset($_SESSION['alert1']);
             endif;
               ?>

                 <?php 
                if(isset($_SESSION['alert2'])):
                 ?>
               <div class="alert alert-primary alert-dismissible fade show mb-3" role="alert">
                <strong><?php echo $_SESSION['alert2']; ?></strong>
                
               </div>
               <?php 
               unset($_SESSION['alert2']);
             endif;
               ?>


 								<div class="row">
 									<div class="col-md-6">
 										<!-- <div class="form-group">
 											<label for="idpembayaran">ID Pembayaran</label>
 											<input type="text" name="idpembayaran" value="<?php echo $nourut; ?>" class="form-control" id="idpembayaran" placeholder="Masukkan Gaji Pokok Karyawan" required="" readonly="" style="cursor: not-allowed;" >
 											
 										</div> -->

 										<!-- <div class="form-group">

 											<label for="username">Username</label>
 											<select name="username" class="form-control" id="username" required="">

 												<option>Pilih</option> 	
 											<?php 
 											$tampilkelas=mysqli_query($koneksi, "SELECT* FROM tbpetugas");
 											
 											while($row=mysqli_fetch_array($tampilkelas)){

 											?>

 												<option value="<?php echo $row['username'];?>"><?php echo $row['username'].'-'.$row['namapetugas'].'-'.$row['level'];?></option>
 											<?php }?>
 												
 											


 											</select>

 										</div> -->

                   <style>
  .hidden {
    display: none;
  }
</style>

<div class="form-group hidden">
  <label for="idpembayaran">ID Pembayaran</label>
  <input type="text" name="idpembayaran" value="<?php echo $nourut; ?>" class="form-control" id="idpembayaran" required="" readonly style="cursor: not-allowed;">
</div>


 										<div class="form-group" style="color:white">
    <label for="nisn">NISN</label>
    <div class="search-container">
        <input type="text" id="searchInput" onkeyup="searchOptions()" placeholder="Cari NISN...">
        <button type="button" onclick="searchOptions()" class="btn btn-sm btn-info">Search</button>
    </div>
    <select name="nisn" class="form-control" id="nisn" required="">
        <option value="">Pilih</option>
        <?php 
            $tampilsiswa=mysqli_query($koneksi, "SELECT tbsiswa.nisn,tbsiswa.nis,tbsiswa.nama,tbkelas.namakelas,tbkelas.kompetensi,tbsiswa.alamat,tbsiswa.tlp,tbspp.tahun,tbspp.nominal FROM tbsiswa INNER JOIN tbkelas ON tbsiswa.idkelas=tbkelas.idkelas INNER JOIN tbspp ON tbsiswa.idspp=tbspp.idspp");

            while($row=mysqli_fetch_array($tampilsiswa)){
        ?>
        <option value="<?php echo $row['nisn'];?>"><?php echo $row['nisn'].'-'.$row['nama'].'-'.$row['namakelas'].'-'.$row['tahun'];?></option>
        <?php }?>
    </select>
</div>

<style>
.search-container {
    position: relative;
    display: inline-block;
    width: 100%;
}

#searchInput {
    width: 80%;
    padding: 8px 10px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.search-container button {
    padding: 8px 10px;
    margin-bottom: 5px;
    margin-left: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
}

.fa-search {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #888;
}
</style>

<script>
function searchOptions() {
    var input, filter, select, options, option, i;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    select = document.getElementById("nisn");
    options = select.getElementsByTagName("option");
    for (i = 0; i < options.length; i++) {
        option = options[i];
        if (option.text.toUpperCase().indexOf(filter) > -1) {
            option.style.display = "";
        } else {
            option.style.display = "none";
        }
    }
}
</script>



 										<div class="form-group" style="color:white">
 											<label for="blnbayar">Bulan Bayar</label>
 											<select name="blnbayar" class="form-control" id="blnbayar" required="">
 												<option>Pilih</option> 	
 												<option value="Januari">Januari</option>
 												<option value="Februari">Februari</option>
 												<option value="Maret">Maret</option>
 												<option value="April">April</option>
 												<option value="Mei">Mei</option>
 												<option value="Juni">Juni</option>
 												<option value="Juli">Juli</option>
 												<option value="Agustus">Agustus</option>
 												<option value="September">September</option>
 												<option value="Oktober">Oktober</option>
 												<option value="November">November</option>
 												<option value="Desember">Desember</option>
 											


 											</select>
 											
 											
 										</div>


 										<div class="form-group" style="color:white">
 											<label for="thnbayar">Tahun Bayar</label>
 											<select name="thnbayar" class="form-control" id="thnbayar" required="">
 												<option>Pilih</option> 	
 												<option value="2020">2020</option>
 												<option value="2021">2021</option>
 												<option value="2022">2022</option>
 												<option value="2023">2023</option>
 												<option value="2024">2024</option>
 												<option value="2025">2025</option>
 												
 											


 											</select>
 											
 											
 										</div>


 										

 										<div class="form-group" style="color:white">

 											<label for="idspp">SPP</label>
 											<select name="idspp" class="form-control" id="idspp" required="">

 												<option>Pilih</option> 	
 											<?php 
 											$tampilspp=mysqli_query($koneksi, "SELECT* FROM tbspp");
 											
 											while($row=mysqli_fetch_array($tampilspp)){

 											?>

 												<option value="<?php echo $row['idspp'];?>"><?php echo $row['idspp'].'-'.$row['tahun'].'-'.$row['nominal'];?></option>
 											<?php }?>
 												
 											


 											</select>

 										</div>
 				
 										

 										<div class="form-group" style="color:white">
    <label for="metodbayar">Metode Pembayaran</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="metodbayar" id="cash" value="Cash" required>
        <label class="form-check-label" for="cash">
            Cash
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="metodbayar" id="cashless" value="Cashless" required>
        <label class="form-check-label" for="cashless">
            Cashless
        </label>
    </div>
</div>


 				
 								


 									</div>
 										
 										

 									</div>


 								
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

                <a href="index.php?page=pembayaran" class="btn btn-sm btn-info"><i class="fa fa-book "></i> Riwayat transaksi</a>
<!-- 
 								<a href="index.php?page=siswa" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Kembali</a> -->

 							</form>
 							
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>