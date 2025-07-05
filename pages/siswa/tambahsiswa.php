<title>Input Data Siswa</title>

 <div class="content-wrapper mt-3">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: #B2C8DF">
 							<h5 class="m-0">Input Data Siswa</h5>
 						</div>
 						<div class="card-body">
 							<form method="POST" action="pages/siswa/tambahsiswa_proses.php">

 								 <?php 
 								include 'config/koneksi.php';
 								
 								

 								 ?>



 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="nisn">NISN</label>
 											<input type="text" name="nisn"  class="form-control" id="nisn" placeholder="Masukkan Gaji Pokok Karyawan" required="" >
 											
 										</div>

 										<div class="form-group">
 											<label for="nis">NIS</label>
 											<input type="text" name="nis"  class="form-control" id="nis" placeholder="Masukkan Gaji Pokok Karyawan" required="" >
 											
 										</div>

 										<div class="form-group">
 											<label for="nama">Nama</label>
 											<input type="text" name="nama"  class="form-control" id="nama" placeholder="Masukkan Gaji Pokok Karyawan" required="" >
 											
 										</div>


 										

 										<div class="form-group">

 											<label for="idkelas">Kelas</label>
 											<select name="idkelas" class="form-control" id="idkelas" required="">

 												<option>Pilih</option> 	
 											<?php 
 											$tampilkelas=mysqli_query($koneksi, "SELECT* FROM tbkelas");
 											
 											while($row=mysqli_fetch_array($tampilkelas)){

 											?>

 												<option value="<?php echo $row['idkelas'];?>"><?php echo $row['idkelas'].'-'.$row['namakelas'].'-'.$row['kompetensi'];?></option>
 											<?php }?>
 												
 											


 											</select>

 										</div>
 									</div>


 										<div class="col-md-6">
 										<div class="form-group">
 											<label for="alamat">Alamat</label>
 											<textarea  name="alamat"  class="form-control" id="alamat" placeholder="Masukkan Tunjangan Pokok Karyawan" required=""></textarea>
 											
 										</div>

 										<div class="form-group">
 											<label for="tlp">No Tlp</label>
 											<input type="text" name="tlp"  class="form-control" id="tlp" placeholder="Masukkan Tunjangan Kesehatan Karyawan" required="" >
 											
 										</div>

 										

 										
 										
 										

 										<div class="form-group">
 											<label for="password">Password</label>
 											<input type="text" name="password"  class="form-control" id="password" placeholder="Masukkan Gaji Pokok Karyawan" required="" >
 											
 										</div>

 										<div class="form-group">

 											<label for="idspp">ID SPP</label>
 											<select name="idspp" class="form-control" id="idspp" required="">

 												<option>Pilih</option> 	
 											<?php 
 											$tampilspp=mysqli_query($koneksi, "SELECT* FROM tbspp");
 											
 											while($row=mysqli_fetch_array($tampilspp)){

 											?>

 												<option value="<?php echo $row['idspp'];?>"><?php echo $row['idspp'].'-'.$row['tahun'].'-'.'Rp.'.$row['nominal'];?></option>
 											<?php }?>
 												
 											


 											</select>

 										</div>

 									</div>
 										
 										

 									</div>


 								
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=siswa" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Kembali</a>

 							</form>
 							
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>s