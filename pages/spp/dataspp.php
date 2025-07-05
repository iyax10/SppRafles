<title>Data SPP</title>
 <div class="content-wrapper " style="background-color: #292929">
 	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            

            <div class="card ">
              <div class="card-header" style="background-color: #B2C8DF">
                <h5 class="text-center"><b>SUMBANGAN PEMBINAAN PENDIDIKAN</b></h5>
              </div>
              <div
               class="card-body" style="background-color: #424242">
              	<button type="button" class="btn btn-outline-light mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
                Tambah Data SPP
              </button><br><br>

                <?php 
                if(isset($_SESSION['alert1'])):
                 ?>
               <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                <strong><?php echo $_SESSION['alert1']; ?></strong>
                
               </div>
               <?php 
               unset($_SESSION['alert1']);
             endif;
               ?>

                 <!--ubah-->

                   <?php 
                if(isset($_SESSION['alert2'])):
                 ?>
               <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
                <strong><?php echo $_SESSION['alert2']; ?></strong>
                
               </div>
               <?php 
               unset($_SESSION['alert2']);
             endif;
               ?>

               <!--delete-->

                   <?php 
                if(isset($_SESSION['alert3'])):
                 ?>
               <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                <strong><?php echo $_SESSION['alert3']; ?></strong>
                
               </div>
               <?php 
               unset($_SESSION['alert3']);
             endif;
               ?>

               <table class="table table-bordered table-dark table-striped table-hover" id="example1" class="text-center" >  
               	<thead>
               		<tr class="text-center">

               			<th><i class="fa fa-list"></i></th>
               			<!-- <th >ID SPP</th> -->
                    <th >ID SPP</th>
                    <th >Jurusan</th>  
               			<th >Tahun</th>
               			<th >Nominal</th>  
                    
               			<th ><i class="fa fa-cog"></i></th>
               		</tr>
               	</thead>
               	<tbody>
               		<?php
               			include 'config/koneksi.php';
               			$no=1;
               			$query = mysqli_query($koneksi,"SELECT * FROM tbspp");
               			while($row=mysqli_fetch_array($query)){
               		?>
               		<tr class="text-center">
               		
               			<td><?php echo $no++;?></td>
                    <td><?php echo $row['idspp']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
               			<td><?php echo $row['tahun']; ?></td>
               			<td>Rp. <?php echo number_format($row['nominal'],0,',','.'); ?></td>
                  
                    
                   <!--  <td><?php echo $row['password']; ?></td> -->
                    
             
                 
               			<td class="text-center"> 
               				<a href="index.php?page=detail-spp&id_detail=<?php echo $row['idspp']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> &nbsp;

                      <a href="index.php?page=ubah-spp&id_ubah=<?php echo $row['idspp']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> &nbsp;

               				<a href="pages/spp/hapus.php?id_hapus=<?php echo $row['idspp']?>" class="btn btn-sm btn-danger " onclick="return confirm('Yakin mau di hapus')"><i class="fa fa-trash-alt"></i> </a>

               				<!-- <a href="index.php?page=ubah-karyawan&id_ubah=<?php echo $row['id_menu']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Ubah</a> &nbsp; -->


               			</td>

               		</tr>
               		<?php
               		} 

               		 ?>
               	</tbody>
               </table>

               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog " role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data SPP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    

                  </div>

                    <div class="modal-body">
                    <form method="POST" action="pages/spp/sppproses.php">
                     

                      <div class="row">
                  
                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="idspp">ID SPP</label>
                      <input type="text" name="idspp" class="form-control" id="idspp" placeholder="Masukkan ID SPP" required="" >
                      
                    </div>

                    <div class="form-group" >
                      <label for="jurusan">Jurusan</label>
                      <select name="jurusan" class="form-control" id="jurusan" required="">
                        <option>Pilih</option>  
                        <option value="RPL">RPL</option>
                        <option value="Kesehatan">Kesehatan</option>
                        
                    
                      </select>
                      
                      
                    </div>

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



        <!-----Penutup modal--->


    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>


