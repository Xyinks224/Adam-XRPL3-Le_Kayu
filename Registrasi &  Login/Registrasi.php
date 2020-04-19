<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
	<script src="https://kit.fontawesome.com/71f5e7bd26.js" crossorigin="anonymous"></script>
	<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-02.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="Reg_Proses.php" method="POST">
					<span class="login100-form-title p-b-59">
						Registration
					</span>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="Nama" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="Alamat" placeholder="Your Address...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="Telp" placeholder="08XXXXXXXX...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Place and Date Of Birth</span>
						<input class="input100" type="text" name="TTL" placeholder="Born.....">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="Username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password (1-30*)</span>
						<input class="input100" type="password" name="Password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<a href="Login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						Sign In <i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>