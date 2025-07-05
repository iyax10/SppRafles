<title>Dashboard</title>

<?php
                    include 'config/koneksi.php';
                    $no=1;
                    if($_SESSION['level']=="siswa"){
                      $nisn=$_SESSION['username'];
                    $query = mysqli_query($koneksi,"SELECT * FROM tbpembayaran WHERE nisn='$nisn'");
                  }else{
                      $query = mysqli_query($koneksi,"SELECT * FROM tbpembayaran");
                    }
                    $databayar= mysqli_num_rows($query);
                    
                 
 ?>

 <?php 
include 'config/koneksi.php';
$lapor1 = mysqli_query($koneksi, "SELECT * FROM tbsiswa");
$jumlah_siswa = mysqli_num_rows($lapor1);


?>


 <?php 
include 'config/koneksi.php';
$lapor2 = mysqli_query($koneksi, "SELECT * FROM tbpetugas");
$jumlah_petugas = mysqli_num_rows($lapor2);


  ?>


 <?php 
include 'config/koneksi.php';
$lapor3 = mysqli_query($koneksi, "SELECT * FROM tbspp");
$jumlah_spp = mysqli_num_rows($lapor3);


  ?>


 <?php 
include 'config/koneksi.php';
$lapor4 = mysqli_query($koneksi, "SELECT * FROM tbkelas");
$jumlah_kelas = mysqli_num_rows($lapor4);


  ?>


  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #292929" >
    <!-- Content Header (Page header) -->
    <div class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:white">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" >
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color: #73a3ba">
              <div class="inner">
                <h3><?php echo $databayar ?></h3>

                <p>Data Pembayaran</p>
              </div>
              <div class="icon">
                <i class="fa fa-wallet"></i>
              </div>
              <a href="index.php?page=pembayaran" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
             <?php if ($_SESSION['level']== "Admin"){?>
        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color: #73a3ba">
              <div class="inner">
                <h3><?php echo $jumlah_spp ?></h3>

                <p>Data SPP</p>
              </div>
              <div class="icon">
                <i class="fa fa-book-open"></i>
              </div>
              <a href="index.php?page=spp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php } ?>
          <!-- ./col -->
         
        <?php if ($_SESSION['level']== "Admin"){?>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color: #d299e8">
              <div class="inner">
                <h3><?php echo $jumlah_kelas ?></h3>

                <p>Data Kelas</p>
              </div>
              <div class="icon">
                <i class="fa fa-school"></i>
              </div>
              <a href="index.php?page=kelas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php } ?>
           <?php if ($_SESSION['level']== "Admin"){?>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #d299e8">
              <div class="inner">
                <h3><?php echo $jumlah_petugas ?></h3>

                <p>Data Petugas</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-tie"></i>
              </div>
              <a href="index.php?page=petugas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php } ?>
           <?php if ($_SESSION['level']== "Admin"){?>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color: #d299e8">
              <div class="inner">
                <h3><?php echo $jumlah_siswa?></h3>

                <p>Data Siswa</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
              <a href="index.php?page=siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <?php } ?>
        




          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

 