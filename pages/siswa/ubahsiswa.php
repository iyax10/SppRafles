<title>Ubah Data Siswa</title>

 <div class="content-wrapper" style="background-color:#292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">
 						<div class="card-header" style="background-color: #d299e8">
                               <h5 class="text-center"><b>UBAH DATA SISWA</b></h5>
                             </div>
 						<div class="card-body" style="background-color: #424242"  >
 							<form method="POST" action="pages/siswa/ubahsiswa_proses.php">

 								 <?php 
 								
 								include 'config/koneksi.php';
 									$id_ubah = $_GET['id_ubah'];
 									$tampilsiswa = mysqli_query($koneksi,"SELECT * FROM tbsiswa where nisn = '$id_ubah'");
 									$rowsiswa = mysqli_fetch_array($tampilsiswa);
 								 
 								

 								 ?>



 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group" style="color:white">
 											<label for="nisn">NISN</label>
 											<input type="text" name="nisn"  class="form-control" id="nisn" value="<?php echo $rowsiswa['nisn']; ?>" placeholder="Masukkan Gaji Pokok Karyawan" required="" readonly="" style="cursor: not-allowed;">
 											
 										</div>

 										<div class="form-group" style="color:white">
 											<label for="nis">NIS</label>
 											<input type="text" name="nis"  class="form-control" id="nis" value="<?php echo $rowsiswa['nis']; ?>" placeholder="Masukkan Gaji Pokok Karyawan" required="" >
 											
 										</div>

 										<div class="form-group" style="color:white">
 											<label for="nama">Nama</label>
 											<input type="text" name="nama"  class="form-control" id="nama" value="<?php echo $rowsiswa['nama']; ?>" placeholder="Masukkan Gaji Pokok Karyawan" required="" >
 											
 										</div>


 										

 										<div class="form-group" style="color:white">

 											<label for="idkelas">Kelas</label>
 											<select name="idkelas" class="form-control" id="idkelas"  required="">

 												<option value="<?php echo $rowsiswa['idkelas']; ?>"><?php echo $rowsiswa['idkelas']; ?></option> 	
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
 										<div class="form-group" style="color:white">
 											<label for="alamat">Alamat</label>
 											<textarea  name="alamat"  class="form-control" id="alamat"  placeholder="Masukkan Tunjangan Pokok Karyawan" required=""><?php echo $rowsiswa['alamat']; ?></textarea>
 											
 										</div>

 										<div class="form-group" style="color:white">
 											<label for="tlp">No Tlp</label>
 											<input type="text" name="tlp"  class="form-control" id="tlp" value="<?php echo $rowsiswa['tlp']; ?>" placeholder="Masukkan Tunjangan Kesehatan Karyawan" required="" >
 											
 										</div>

 										

 										
 										
 										

 										
 										<div class="form-group" style="color:white">

 											<label for="idspp">ID SPP</label>
 											<select name="idspp" class="form-control" id="idspp" required="">

 												<option value="<?php echo $rowsiswa['idspp']; ?>"><?php echo $rowsiswa['idspp']; ?></option> 	
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
 </div>