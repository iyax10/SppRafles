<title>Input Data Petugas</title>

 <div class="content-wrapper mt-3">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header bg-primary" class="">
 							<h5 class="m-0">INPUT DATA Petugas</h5>
 						</div>
 						<div class="card-body">
 							<form method="POST" action="pages/petugas/tambahpetugas_proses.php" enctype="multipart/form-data">
 								<div class="row">
 									
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="username">Username</label>
 											<input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Periode SPP" required="" >
 											
 										</div>

 										<div class="form-group">
 											<label for="password">Password</label>
 											<input type="text" name="password" class="form-control" id="password" placeholder="Masukkan Nominal SPP" required="" >
 											
 										</div>

 										<div class="form-group">
 											<label for="nama">Nama Petugas</label>
 											<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nominal SPP" required="" >
 											
 										</div>

 										
 										<div class="form-group">
 											<label for="level">Level</label>
 											<select name="level" class="form-control" id="level" required="">
 												<option>Pilih</option> 	
 												<option value="Admin">Admin</option>
 												<option value="Petugas">Petugas</option>
 												
 											


 											</select>
 											
 											
 									</div>

 										
 										
 									</div>

 									
 
 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=petugas" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Back</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>