<title>Data Petugas</title>
 <div class="content-wrapper"  style="background-color: #292929">
 	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            

            <div class="card ">
              <div class="card-header" style="background-color: #d299e8">
                <h5 class="text-center"><b>DATA PETUGAS</b></h5>
              </div>
              <div
               class="card-body" style="background-color: #424242">

              	<button type="button" class="btn btn-outline-light mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
                Tambah Data Petugas
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
               		<tr class="text-center">

               			<th><i class="fa fa-list"></i></th>
               			<th >Username</th>
               		
                    <th >Nama Petugas</th>
               			<th >level</th>
                    
               			<th ><i class="fa fa-cog"></i></th>
               		</tr>
               	</thead>
               	<tbody>
               		<?php
               			include 'config/koneksi.php';
               			$no=1;
               			$query = mysqli_query($koneksi,"SELECT * FROM tbpetugas");
               			while($row=mysqli_fetch_array($query)){
               		?>
               		<tr class="text-center">
               		
               			<td><?php echo $no++;?></td>
                    <td><?php echo $row['username']; ?></td>
               			<td><?php echo $row['namapetugas']; ?></td>
               			<td><?php echo $row['level']; ?></td>
               			
                  
                    
                   <!--  <td><?php echo $row['password']; ?></td> -->
                    
             
                 
               			<td class="text-center"> 
               				<a href="index.php?page=detail-petugas&id_detail=<?php echo $row['username']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> &nbsp;

                      <a href="index.php?page=ubah-petugas&id_ubah=<?php echo $row['username']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> &nbsp;

               				<a href="pages/petugas/hapus.php?id_hapus=<?php echo $row['username']?>" class="btn btn-sm btn-danger " onclick="return confirm('Yakin mau di hapus')"><i class="fa fa-trash-alt"></i> </a>

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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    

                  </div>

                    <div class="modal-body">
                    <form method="POST" action="pages/petugas/tambahpetugas_proses.php">

                      <div class="row">
                  
                  <div class="col-md-6">
                   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Periode SPP" required="" oninput="validateUSERNAME(this)">
    <small id="usernameWarning" style="color: red; display: none;">Username tidak boleh mengandung simbol selain, kecuali simbol ("_")</small>
</div>

<script>
function validateUSERNAME(input) {
    const warning = document.getElementById('usernameWarning');
    const regex = /^[a-zA-Z0-9_]*$/; // tambahkan underscore (_) ke dalam regex

    if (!regex.test(input.value)) {
        warning.style.display = 'block';
        input.value = input.value.replace(/[^a-zA-Z0-9_]/g, ''); // tambahkan underscore (_) ke dalam regex
    } else {
        warning.style.display = 'none';
    }
    
    // Batasi 10 karakter
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10);
    }
}
</script>








                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="Masukkan Password" required="" maxlength="10" oninput="validatePassword(this)">
                    <small id="passwordWarning" style="color: red; display: none;">Password hanya boleh mengandung huruf dan angka.</small>
                  </div>

<script>
function validatePassword(input) {
  const warning = document.getElementById('passwordWarning');
  const regex = /^[a-zA-Z0-9]*$/;

  if (!regex.test(input.value)) {
    warning.style.display = 'block';
    input.value = input.value.replace(/[^a-zA-Z0-9]/g, '');
  } else {
    warning.style.display = 'none';
  }

  // Limit to 10 characters
  if (input.value.length > 10) {
    input.value = input.value.slice(0, 10);
  }
}
</script>

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


