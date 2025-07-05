<title>Ubah Password</title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: green">
 							<h5 class="text-center" style="color: white"><b>Ubah Password</b></h5>
 						</div>
 						<div class="card-body" style="background-color: #424242">
 							<form method="POST" action="login/ubahpw_proses.php" enctype="multipart/form-data">
 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group" style="color: white">
 											<label for="passwordlama">Password lama</label>
 											<input type="password" name="passwordlama" class="form-control" id="passwordlama" placeholder="Masukkan Password  Lama" required="" >
 											
 										</div>

 										<div class="form-group" style="color: white">
 											<label for="passwordbaru">Password</label>
 											<input type="password" name="passwordbaru" class="form-control" id="passwordbaru" placeholder="Masukkan Password baru" required="" >
 											
 										</div>

 										<div class="form-group" style="color: white">
 											<label for="ulangpwbaru">Konfirmasi Password Baru</label>
 											<input type="password" name="ulangpwbaru" class="form-control" id="ulangpwbaru" placeholder="Konfirmasi Password baru" required="" >
 											
 										</div>
 											
 						

 										
 									</div>

 									
 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Back</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>