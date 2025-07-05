<title>Ubah Data SPP</title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: #B2C8DF">
                <h5 class="text-center"><b>UBAH DATA SPP</b></h5>
              </div>
 						<div
               class="card-body" style="background-color: #424242">
 							<form method="POST" action="pages/spp/ubahproses.php">
 								<?php
 									include 'config/koneksi.php';
 									$id_ubah = $_GET['id_ubah'];
 									$tampil = mysqli_query($koneksi,"SELECT * FROM tbspp where idspp = '$id_ubah'");
 									$row = mysqli_fetch_array($tampil);
 								  ?>
 								<div class="row">
 									<div class="col-md-6">

 										<div class="form-group" style="color:white">
 											<label for="idspp">ID SPP</label>
 											<input type="text" name="idspp" class="form-control" id="idspp" value="<?php echo $row['idspp']; ?>" readonly="" style="cursor: not-allowed;" >
 											
 										</div>

 										
 										<div class="form-group">
 											<label for="jurusan">Jurusan</label>
 											<select name="jurusan" class="form-control" id="jurusan" required=""  >
 												<option value="<?php echo $row['jurusan']; ?>"><?php echo $row['jurusan']; ?></option>
 												<option value="RPL">RPL</option>
 												<option value="Kesehatan">Kesehatan</option>
 											</select>
 											
 											
 										</div>
 										
 										<div class="form-group" style="color:white">
 											<label for="tahun">Tahun</label>
 											<input type="text" name="tahun" class="form-control" id="tahun" value="<?php echo $row['tahun']; ?>" placeholder="Masukkan Tahun" required="" >
 											
 										</div>


 										<div class="form-group" style="color:white">
 											<label for="nominal">Nominal</label>
 											<input type="text" name="nominal" class="form-control" id="nominal" value="<?php echo $row['nominal']; ?>" placeholder="Masukkan Password Anda" required="" >
 											
 										</div>
 										

 									</div>


 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=spp" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Kembali</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>