<title>Detail Data Petugas</title>

 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg">


 					<div class="card ">

 						<div class="card-header" class="card-header" style="background-color: #d299e8">
 							<h5 class="text-center"><b>Detail Data Petugas</b></h5>
 						</div>
 						<div class="card-body" style="background-color: #424242">
 							<form method="POST" action="pages/kelas/ubahpetugas_proses.php">
 								<?php
 									include 'config/koneksi.php';
 									$id_detail = $_GET['id_detail'];
 									$tampil = mysqli_query($koneksi,"SELECT * FROM tbpetugas where username = '$id_detail'");
 									$row = mysqli_fetch_array($tampil);
 								  ?>
 								  
 								 <table  class="table table-bordered table-danger table-striped table-hover">
 								  	<tr>
               						<td style="width: 20%">ID</td>
               						<td><?php echo $row['username']; ?></td>
               						</tr>

               						<tr>
               						<td>Username</td>
               						<td><?php echo $row['namapetugas']; ?></td>
               						</tr>

               						<tr>
               						<td>level</td>
               						<td><?php echo $row['level']; ?></td>
               						</tr>

               						


 								  </table>

<!-- 
 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="nisn">NISN</label>
 											<input type="text" name="nisn" class="form-control" id="nisn"  value="<?php echo $row['nisn']; ?>" readonly>
 											
 										</div>
 									</div>

 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="nama">Nama Siswa</label>
 											<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $row['nama']; ?>"placeholder="Masukkan Nama Anda" required="" >
 											
 										</div>
 									</div>

 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="tgllahir">Tanggal Lahir</label>
 											<input type="text" name="tgllahir" class="form-control" id="tgllahir" value="<?php echo $row['tgl_lahir']; ?>" placeholder="Masukkan tanggal lahir anda Anda" required="" >
 											
 										</div>
 									</div>

 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="email">Email</label>
 											<input type="text" name="email" class="form-control" id="email" value="<?php echo $row['nisn']; ?>" placeholder="Masukkan email Anda" required="" >
 											
 										</div>
 									</div>

 								</div>
 								<button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>&nbsp;
 								<button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp; -->

 								<a href="index.php?page=petugas" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Back</a>

 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>