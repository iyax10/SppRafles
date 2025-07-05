<title>Detail Data Kelas</title>

 <div class="content-wrapper" style="background-color: #292929">
     <div class="content">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-lg">


                         <div class="card ">
                             <div class="card-header" style="background-color: #B2C8DF">
                              <img  src="login/images/rafles.png" width="50px" height="50px" class="text-center mb-4" >
                               <h2 class="text-center"><b>YAYASAN RAFLESIA DEPOK</b></h2>
                              <h5 class="text-center"><b>Jl.Mahkota Raya No.32B Pondok Duta.Cimanggis Kota Depok 16951</b></h5>
                              <h5 class="text-center"><b>---------------------------------------------------------------------------------------------------------------------------------</b></h5>
                              <br>
                              <br>
                              <h3 class="text-center"><b>BUKTI PEMBAYARAN SPP SMK RAFLESIA DEPOK</b></h3>


                             </div>
                              <div
               class="card-body" style="background-color: #232424">
                                   <form method="POST" action="pages/pembayaran/pembayaranproses.php">
                                        <?php
                                             include 'config/koneksi.php';
                                             $id_bukti = $_GET['id_bukti'];
                                             $tampil = mysqli_query($koneksi,"SELECT tbpembayaran.idpembayaran,tbpetugas.namapetugas,tbsiswa.nisn,tbsiswa.nama,tbspp.jurusan,tbpembayaran.tglbayar,tbpembayaran.blnbayar,tbpembayaran.thnbayar,tbspp.tahun,tbspp.nominal,tbpembayaran.metodbayar FROM tbpembayaran INNER JOIN tbsiswa ON tbpembayaran.nisn=tbsiswa.nisn INNER JOIN tbspp ON tbpembayaran.idspp=tbspp.idspp 
                                                  INNER JOIN tbpetugas ON tbpembayaran.username=tbpetugas.username WHERE tbpembayaran.idpembayaran='$id_bukti'");
                                             $data = mysqli_fetch_array($tampil);
                                          ?>
                                          
                                          <table class="table table-bordered table-dark table-striped table-hover" id="example1">

                                             

                                             <tr>
                                             <td style="width: 20%">NISN</td>
                                             <td><?php echo $data['nisn']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Nama Siswa</td>
                                             <td><?php echo $data['nama']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Kelas</td>
                                             <td><?php echo $data['jurusan']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Tgl Bayar</td>
                                             <td><?php echo $data['tglbayar']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Bulan Bayar</td>
                                             <td><?php echo $data['blnbayar']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Tahun Bayar</td>
                                             <td><?php echo $data['thnbayar']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Tahun Angkatan</td>
                                             <td><?php echo $data['tahun']; ?></td>
                                             </tr>

                                             <tr>
                                             <td>Nominal</td>
                                             <td>Rp. <?php echo number_format($data['nominal'],0,',','.'); ?></td>
                                             </tr>

                                             <tr>
                                             <td>Metode Pembayaran</td>
                                             <td><?php echo $data['metodbayar']; ?></td>
                                             </tr>

                                              
                                             


                                          </table>

                                           <style>   
                                            @media print
                                            {
                                            .noprint {display:none;}
                                            }
                                        </style>
                                         
                                        <div class="noprint">
     
                                        <a href="index.php?page=pembayaran" class="btn btn-sm btn-danger"><i class="fa fa-reply-all "></i> Back</a>
                                        </div>


                                          <br>
                                          <br>
                                          <center><h2>LUNAS</h2></center>

                                          <br>
                                          <br>

                                          <p align="">&ensp; &ensp;&ensp; Depok, <?php echo $data['tglbayar']; ?> </p><br><br><br><br>
                                          <p align="">&ensp; &ensp;&ensp;&ensp;&ensp;  <?php echo $data['namapetugas']; ?> </p>

                                          <script >
                                               window.print();
                                          </script>

                                        

                                       


                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
 </div>