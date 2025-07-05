<title>Input Data Kelas</title>

 <div class="content-wrapper mt-3">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header bg-primary" class="">
 							<h5 class="m-0">INPUT DATA KELAS</h5>
 						</div>
 						<div class="card-body">
 							<form method="POST" action="pages/kelas/tambahproses.php" enctype="multipart/form-data">
 								<div class="row">
 									
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="kelas">Kelas</label>
 											<input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Periode SPP" required="" >
 											
 										</div>

 										<div class="form-group">
 											<label for="kompetensi">Kompetensi Keahlian</label>
 											<input type="text" name="kompetensi" class="form-control" id="kompetensi" placeholder="Masukkan Nominal SPP" required="" >
 											
 										</div>

 										
 										
 									</div>

 									
 
 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=kelas" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Back</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>