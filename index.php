<?php
session_start();
if(isset($_SESSION['username'])==0)
{
  echo '<script>alert("Anda Harus login terlebih dahulu !!");
  window.location.href="login/login.php"</script>';
}

 include "layouts/header.php"; 
 include "layouts/sidebar.php"; 
 include "config/page.php"; 
 include "layouts/footer.php"; 
?>