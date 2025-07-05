<title>Data Pembayaran</title>
 <div class="content-wrapper" style="background-color: #292929">
 	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            

            <div class="card ">
              <div class="card-header" style="background-color: #B2C8DF">
                <h5 class="text-center"><b>DATA PEMBAYARAN</b>
</h5>
              </div>
             <div
               class="card-body" style="background-color: #424242">



              	<!-- <a href="index.php?page=tambah-pembayaran" class="btn btn-outline-primary mb-3"><i class="fa fa-plus"></i> Tambah Pembayaran</a> -->
                

    <table class="table table-bordered table-dark table-striped table-hover" id="example1" class="text-center"  >               	
      <thead>
               		<tr class="text-center">

               			<th><i class="fa fa-list"></i></th>
               			<th >ID Pembayaran</th>
               			<th >Nama Petugas</th>
                    <th >NISN</th>
                    <th >Nama Siswa</th>
                    <th >Tgl Bayar</th>
                    <th >Bulan Bayar</th>
                    <th >Tahun Bayar</th>
                    <th >Tahun Angkatan</th>
                    <th >Nominal</th>
                    <th >Metode Pembayaran</th>
               			
                    
               			<th ><i class="fa fa-cog"></i></th>
               		</tr>
               	</thead>
               	<tbody>
               		<?php
               			include 'config/koneksi.php';
               			$no=1;
                    if($_SESSION['level']=="siswa"){
                      $nisn=$_SESSION['username'];
               			$query = mysqli_query($koneksi,"SELECT tbpembayaran.idpembayaran,tbpetugas.namapetugas,tbsiswa.nisn,tbsiswa.nama,tbpembayaran.tglbayar,tbpembayaran.blnbayar,tbpembayaran.thnbayar,tbspp.tahun,tbspp.nominal,tbpembayaran.metodbayar FROM tbpembayaran INNER JOIN tbsiswa ON tbpembayaran.nisn=tbsiswa.nisn INNER JOIN tbspp ON tbpembayaran.idspp=tbspp.idspp INNER JOIN tbpetugas ON tbpembayaran.username=tbpetugas.username WHERE tbpembayaran.nisn='$nisn'");
                  }else{
                    $query = mysqli_query($koneksi,"SELECT tbpembayaran.idpembayaran,tbpetugas.namapetugas,tbsiswa.nisn,tbsiswa.nama,tbpembayaran.tglbayar,tbpembayaran.blnbayar,tbpembayaran.thnbayar,tbspp.tahun,tbspp.nominal,tbpembayaran.metodbayar FROM tbpembayaran INNER JOIN tbsiswa ON tbpembayaran.nisn=tbsiswa.nisn INNER JOIN tbspp ON tbpembayaran.idspp=tbspp.idspp INNER JOIN tbpetugas ON tbpembayaran.username=tbpetugas.username ORDER BY idpembayaran DESC");
                  }

               			while($row=mysqli_fetch_array($query))
                    {
                  
               		?>
               		<tr class="text-center">
               		
               			<td><?php echo $no++;?></td>
                    <td><?php echo $row['idpembayaran']; ?></td>
                    <td><?php echo $row['namapetugas']; ?></td>
               			<td><?php echo $row['nisn']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['tglbayar']; ?></td>
                    <td><?php echo $row['blnbayar']; ?></td>
                    <td><?php echo $row['thnbayar']; ?></td>
                    <td><?php echo $row['tahun']; ?></td>
                    <td>Rp. <?php echo number_format($row['nominal'],0,',','.'); ?></td>
                    <td><?php echo $row['metodbayar']; ?></td>

                    >
                    
               			
               			
                  
                    
                   <!--  <td><?php echo $row['password']; ?></td> -->
                    
             
                 
               			<td class="text-center"> 
               				<a href="index.php?page=detail-pembayaran&id_detail=<?php echo $row['idpembayaran']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> &nbsp;

                      <a href="index.php?page=invoice&id_bukti=<?php echo $row['idpembayaran']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-print"></i> </a> &nbsp;


                      


               			</td>

               		</tr>

               		<?php
               		} 

               		 ?>
               	</tbody>
               </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 	</div>

