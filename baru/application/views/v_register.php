<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Register</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- memanggil css dan gambar untuk tamplate pada CI -->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('template_login/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template_login/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
  

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url template_login/images/bg-01.jpg;" >
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>
<!-- memanggil function registration pada controller register dengan menggunakan method post -->
				<form class="login100-form validate-form" method="post"><? base_url('register/registration');?>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" id= "username" placeholder="Enter username" value="<?= set_value('username'); ?>">  <!-- syntax yang digunakan agar user tidak usah menginputkan data dari awal jika terdapat kesalahan pada salah satu form saat menginputkan -->
						<?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
            <span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Phone Number is required">
						<span class="label-input100">Nomer Telepon</span>
						<input class="input100" type="text" name="hp" id= "hp" placeholder="Enter Number Phone"value="<?= set_value('hp'); ?>">
						<?= form_error('hp', ' <small class="text-danger">', '</small>'); ?>
            <span class="focus-input100"></span>
					</div>
          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password1"  id ="password1" placeholder="Enter password">
						<?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
            <span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Ulangi Password</span>
						<input class="input100" type="password" name="password2"  id ="password2" placeholder="Repeat password">
						<span class="focus-input100"></span>
					</div>
          <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<!-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label> -->
						</div>

					<div>
          <!-- mengarahkan ke halaman login jika sudah memiliki Akun -->
							<a class="small" href="<?= base_url('login/login'); ?>" class="txt1">
								Sudah Punya Akun?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit">
							Daftar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?= base_url('template_login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?= base_url('template_login/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('template_login/js/main.js')?>"></script>

</body>
</html>





