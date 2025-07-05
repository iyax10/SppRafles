<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #171717">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/smklg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPP SMK Raflesia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <?php if ($_SESSION['level']== "Admin" || $_SESSION['level']== "Petugas"){?>
        <div class="image">
          <img src="dist/img/pegawai.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php   } ?>

        <?php if ($_SESSION['level']== "siswa"){?>
        <div class="image">
          <img src="dist/img/siswa.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php   } ?>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama'];?>&ensp;-&ensp;<?php echo $_SESSION['level'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="index.php?page=" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
             <div class="user-panel mt-2 pb-2 mb-3 d-flex">

          </li>
          
          <?php if ($_SESSION['level']== "Admin"){?>

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Kelas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=kelas" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data kelas</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Petugas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=petugas" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Petugas</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Siswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=siswa" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                SPP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=spp" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SPP</p>
                </a>
              </li>
              
            </ul>
          </li>
        <?php 


          } ?>


          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-wallet"></i>
              <p>
                Pembayaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php   
                  if   ($_SESSION['level']== "Admin" || $_SESSION['level']== "Petugas"){?>
              
              <li class="nav-item">
                <a href="index.php?page=tambah-pembayaran" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Pembayaran</p>
                </a>
              </li>
                <?php   } ?>

              <li class="nav-item">
                <a href="index.php?page=pembayaran" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Pembayaran</p>
                </a>
              </li>
              
            </ul>
             <div class="user-panel mt-2 pb-2 mb-3 d-flex">
          </li>



        <li class="nav-item">
            <a href="index.php?page=ubah-pw" class="nav-link">
              <i class="fa fa-key nav-icon"></i><p> Ubah Password</p>
            </a>

            <div class="user-panel mt-2 pb-2 mb-3 d-flex">
          </li>
         


          <li class="nav-item">
            <a href="login/logout.php" class="nav-link" onclick="return confirm('Yakin Anda ingin keluar dari aplikasi ini?')">
              <i class="fa fa-sign-out-alt nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>