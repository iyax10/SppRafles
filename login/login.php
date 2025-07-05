<!doctype html>
<html lang="en">
  <head>
  	<title>Login Trans SPP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body style="background-image: linear-gradient(to right top, #1d1a1c, #2f212e, #3d2945, #45335f, #45407d, #364480, #234882, #004c83, #004265, #003647, #11282d, #191a1a);">

	<section class="ftco-section" >

		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login APK SPP</h2>
				</div>
			</div> -->


<!-- style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
			 -->
			<div class="row justify-content-center" >
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5" style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);">
		      	<!-- <div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div> -->

		      	<div class="text-center" >
		      	<img src="images/rafles.png" width="150px" height="150px" class="text-center mb-4" >
		        </div>

		      	<h3 class="text-center mb-4">LOGIN APK SPP</h3>
						<form action="loginproses.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			 <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Periode SPP" required="" oninput="validateUSERNAME(this)">
		      		</div>
		      		<script>
function validateUSERNAME(input) {
   
    // Batasi 10 karakter
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10);
    }
}
</script>


		      		  <small id="passwordWarning" style="color: white; display: none;">Password hanya boleh mengandung huruf dan angka.</small>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required maxlength="10" oninput="validatePassword(this)"> 
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



		            <div class="form-group d-flex">
		              <select name="sebagai" class="form-control"  >
 												<option>Login Sebagai</option> 	
 												<option value="siswa">SISWA</option>
 												<option value="pegawai">PEGAWAI</option>
 		
 					 </select>
		            </div>


	            <div class="form-group"  >
	            	<button type="submit" class="form-control btn btn-outline-light"  style="background-image: linear-gradient(to left bottom, #bc58b3, #a763ba, #926bbd, #7e71bc, #6d76b7, #717cb9, #7683bb, #7b89bc, #9094c8, #a5a0d4, #baacdf, #ceb8ea);" >Login</button>
	            </div>

	           
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

