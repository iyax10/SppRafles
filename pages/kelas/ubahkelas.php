<title>Ubah Data Kelas</title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card " >
 						<div class="card-header" style="background-color: #d299e8">
                               <h5 class="text-center"><b>UBAH DATA KELAS</b></h5>
                             </div>
 						<div class="card-body" style="background-color: #424242"  >
 							<form method="POST" action="pages/kelas/ubahkelas_proses.php">
 								<?php
 									include 'config/koneksi.php';
 									$id_ubah = $_GET['id_ubah'];
 									$tampil = mysqli_query($koneksi,"SELECT * FROM tbkelas where idkelas = '$id_ubah'");
 									$row = mysqli_fetch_array($tampil);
 								  ?>
 								<div class="row" >
 									<div class="col-md-6">

 										<div class="form-group" style="color:white">
 											<label for="idkelas">ID Kelas</label>
 											<input type="text" name="idkelas" class="form-control" id="idkelas" value="<?php echo $row['idkelas']; ?>" readonly="" style="cursor: not-allowed;" >
 											
 										</div>
 										
 										<div class="form-group" style="color:white">
 											<label for="kelas">Kelas</label>
 											<input type="text" name="kelas" class="form-control" id="tahun" value="<?php echo $row['namakelas']; ?>" placeholder="Masukkan Nama Kelas Terbaru" required="" >
 											
 										</div>
 										<div class="form-group" style="color:white">
 											<label for="kompetensi">Kompetensi Keahlian</label>
 											<input type="text" name="kompetensi" class="form-control" id="kompetensi" value="<?php echo $row['kompetensi']; ?>" placeholder="Masukkan Kompetensi Keahlian Terbaru" required="" >
 											
 										</div>
 										

 									</div>


 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

 								<a href="index.php?page=kelas" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Kembali</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>