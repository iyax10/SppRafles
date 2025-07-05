<title>Data Kelas</title>
 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            

            <div class="card ">
              <div class="card-header" style="background-color: #d299e8">
                <h5 class="text-center"><b>DATA  KELAS</b></h5>
              </div>
              <div
               class="card-body" style="background-color: #424242">
              	

                <button type="button" class="btn btn-outline-light mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
                Tambah Data Kelas
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


               <table class="table table-bordered table-danger table-striped table-hover" id="example1" class="text-center" > 
               	<thead>
               		<tr class="text-center" >


               			<th><i class="fa fa-list"></i></th>
                    <th >ID Kelas</th>
               			<th >Nama Kelas</th>
               			<th >Kompetensi Keahlian</th>  
                    
               			<th ><i class="fa fa-cog"></i></th>
                    
               		</tr>
               	</thead>
               	<tbody>
               		<?php
               			include 'config/koneksi.php';
               			$no=1;
               			$query = mysqli_query($koneksi,"SELECT * FROM tbkelas ORDER BY idkelas ASC");
               			while($row=mysqli_fetch_array($query)){
               		?>
               		<tr class="text-center">
               		

               			<td><?php echo $no++;?></td>
                    <td><?php echo $row['idkelas']; ?></td>
               			<td><?php echo $row['namakelas']; ?></td>
               			<td><?php echo $row['kompetensi']; ?></td>
               			
                  
                    
                   
                    
             
                 
               			<td class="text-center"> 
               				<a href="index.php?page=detail-kelas&id_detail=<?php echo $row['idkelas']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> &nbsp;

                      <a href="index.php?page=ubah-kelas&id_ubah=<?php echo $row['idkelas']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> &nbsp;

               				<a href="pages/kelas/hapus.php?id_hapus=<?php echo $row['idkelas']?>" class="btn btn-sm btn-danger " onclick="return confirm('Yakin mau di hapus')"><i class="fa fa-trash-alt"></i> </a>

               			


               			</td>


                    

               		</tr>
               		<?php
               		} 

               		 ?>
               	</tbody>
               </table>

               
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    

                  </div>

                    <div class="modal-body">
                    <form method="POST" action="pages/kelas/tambahproses.php">

                        <div class="row">
                  
                  <div class="col-md-12">

                    <div class="form-group">
                      <label for="idkelas">ID Kelas</label>
                      <input type="text" name="idkelas" class="form-control" id="idkelas" placeholder="Masukkan ID Kelas" required="" >
                      
                    </div>

                    <div class="form-group">
                      <label for="kelas">Kelas</label>
                      <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Nama Kelas" required="" >
                      
                    </div>

                    <div class="form-group">
                      <label for="kompetensi">Kompetensi Keahlian</label>
                      <input type="text" name="kompetensi" class="form-control" id="kompetensi" placeholder="Masukkan Kompetensi Keahlian" required="" >
                      
                    </div>

                    
                    
                  </div>

                  
 
                </div>
                <button type ="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>&nbsp;
                
                <button type ="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Reset</button>&nbsp;

                
              </div>
              </div>
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

