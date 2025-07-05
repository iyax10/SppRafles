<title>Reset Password Siswa</title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: #d299e8">
                               <h5 class="text-center"><b>RESET PASSWORD SISWA</b></h5>
                             </div>
 						<div class="card-body" style="background-color: #424242"  >
 							<form method="POST" action="pages/siswa/resetpw_proses.php">

 								 <?php 
 								
 								include 'config/koneksi.php';
 									$id_reset= $_GET['id_reset'];
 									$tampilsiswa = mysqli_query($koneksi,"SELECT * FROM tbsiswa where nisn = '$id_reset'");
 									$rowsiswa = mysqli_fetch_array($tampilsiswa);
 								 
 								

 								 ?>



 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group" style="color:white">
 											<label for="nisn">NISN</label>
 											<input type="text" name="nisn"  class="form-control" id="nisn" value="<?php echo $rowsiswa['nisn']; ?>" placeholder="Masukkan Gaji Pokok Karyawan" required="" readonly="" style="cursor: not-allowed;">
 											
 										</div>

 										

 										<div class="form-group" style="color:white">
 											<label for="nama">Nama</label>
 											<input type="text" name="nama"  class="form-control" id="nama" value="<?php echo $rowsiswa['nama']; ?>" placeholder="Masukkan Gaji Pokok Karyawan" required="" readonly="" style="cursor: not-allowed;">
 											
 										</div>

 										<div class="form-group" style="color:white">
 											<label for="password">Password Baru</label>
 											<input type="text" name="password"  class="form-control" id="password" placeholder="Masukkan Password Baru" required="" >
 											
 										</div>

 									</div>
 										
 										

 									</div>


 								
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								


 								<a href="index.php?page=siswa" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Kembali</a>

 							</form>
 							
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>