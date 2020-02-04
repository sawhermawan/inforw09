<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url('index.php/login/do_login');?>" method="post">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<font color="red"> <?php echo $this->session->flashdata('gagalLogin')?> </font>
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>