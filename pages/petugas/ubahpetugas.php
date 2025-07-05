<title>Ubah Data Petugas</title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: #d299e8">
                               <h5 class="text-center"><b>UBAH DATA PETUGAS</b></h5>
                             </div>
 						<div class="card-body" style="background-color: #424242"  >
 							<form method="POST" action="pages/petugas/ubahpetugas_proses.php">
 								<?php
 									include 'config/koneksi.php';
 									$id_ubah = $_GET['id_ubah'];
 									$tampil = mysqli_query($koneksi,"SELECT * FROM tbpetugas where username = '$id_ubah'");
 									$row = mysqli_fetch_array($tampil);
 								  ?>
 								<div class="row">
 									<div class="col-md-6">

 										<div class="form-group" style="color:white">
 											<label for="username">Username</label>
 											<input type="text" name="username" class="form-control" id="username" value="<?php echo $row['username']; ?>" readonly="" style="cursor: not-allowed;" >
 											
 										</div>
 										
 										<div class="form-group" style="color:white">
 											<label for="nama">Nama Petugas</label>
 											<input type="text" name="nama" class="form-control" id="tahun" value="<?php echo $row['namapetugas']; ?>" placeholder="Masukkan Tahun" required="" >
 											
 										</div>
 										<div class="form-group" style="color:white">
 											<label for="level">Level</label>
 											<select name="level" class="form-control" id="level" required="">
 												<option <?php echo $row['level']; ?> ><?php echo $row['level']; ?></option> 	
 												<option value="Admin">Admin</option>
 												<option value="Petugas">Petugas</option>
 												
 											


 											</select>
 											
 											
 									</div>
 										

 									</div>


 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=petugas" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Kembali</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>