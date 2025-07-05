<title>Input Data SPP</title>

 <div class="content-wrapper mt-3">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header bg-primary" class="">
 							<h5 class="m-0">INPUT DATA SPP</h5>
 						</div>
 						<div class="card-body">
 							<form method="POST" action="pages/spp/sppproses.php" enctype="multipart/form-data">
 								<div class="row">
 									
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="tahun">Tahun</label>
 											<input type="text" name="tahun" class="form-control" id="tahun" placeholder="Masukkan Periode SPP" required="" >
 											
 										</div>

 										<div class="form-group">
 											<label for="nominal">Nominal</label>
 											<input type="text" name="nominal" class="form-control" id="nominal" placeholder="Masukkan Nominal SPP" required="" >
 											
 										</div>

 										
 										
 									</div>

 									
 
 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=spp" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Back</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>