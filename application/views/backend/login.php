<?php
$stat=isset($_GET['stat'])?$_GET['stat']:"";
$pesan=isset($_GET['pesan'])?$_GET['pesan']:"";
?>
<!DOCTYPE html>
<html >

<head>
	<title>Halaman Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url().'frontend/login/images/icons/favicon.ico';?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/vendor/bootstrap/css/bootstrap.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/fonts/iconic/css/material-design-iconic-font.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/vendor/animate/animate.css';?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/vendor/css-hamburgers/hamburgers.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/vendor/animsition/css/animsition.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/vendor/select2/select2.min.css';?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/vendor/daterangepicker/daterangepicker.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/css/util.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'frontend/login/css/main.css';?>">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<form action="<?php echo base_url('administrator/login/aksi_login'); ?>" method="post">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Techno Group
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						 <input type="text" class="input100" name="username" placeholder="Nama Pengguna" id="UserName">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input type="password" class="input100" name="password" placeholder="Kata Sandi" id="Password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					

				<!--	<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>	-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Masuk
						</button>
					</div>
					<br>
					<?php
 if ($stat!="") {
    echo "<div class='form-group'>";
    if ($stat=='0'){
      echo "<div class='danger'>";
      echo $pesan;
      echo "</div>";
     }else if ($stat=='1') {
      echo "<div class='success'>";
      echo $pesan;
      echo "</div>";
    }
    echo "</div>";
  }
 ?>


				<!--	<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>	-->
				</form><br>
				<center>&copy; M. Syah ~ <a href="https://artikelklopedia.blogspot.com" title="Artikelklopedia"><b><u><font color="#212529">Artikelklopedia</font></u></b></a></center>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/vendor/jquery/jquery-3.2.1.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/vendor/animsition/js/animsition.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/vendor/bootstrap/js/popper.js';?>"></script>
	<script src="<?php echo base_url().'frontend/login/vendor/bootstrap/js/bootstrap.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/vendor/select2/select2.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/vendor/daterangepicker/moment.min.js';?>"></script>
	<script src="<?php echo base_url().'frontend/login/vendor/daterangepicker/daterangepicker.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/vendor/countdowntime/countdowntime.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'frontend/login/js/main.js';?>"></script>

</body>

</html>

