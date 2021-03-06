<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('erilis_style/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('erilis_style/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	@if(session()->has('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	@if(session()->has('loginError'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			{{ session('loginError') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset ('erilis_style/img/img-01.png') }}" alt="IMG">
				</div>

				<form class="login600-form validate-form" action="/user/register" method="POST">
					@csrf
					<span class="login100-form-title">
						Selamat Datang...
                        <p>Lengkapi data anda untuk membuat akun E-Rilis</p>
					</span>
                    
                    <div class="wrap-input100 validate-input @error('nama') is-invalid @enderror" data-validate = "Nama Lengkap tidak boleh kosong">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap" id="nama" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						@error('nama')
							<div class="invalid-feedback">
								<strong>Nama Lengkap harus diisi</strong>
							</div>
						@enderror
					</div>

					<div class="wrap-input100 validate-input @error('username') is-invalid @enderror" data-validate = "Username tidak boleh kosong">
						<input class="input100" type="text" name="username" placeholder="Username" id="username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@error('username')
							<div class="invalid-feedback">
								<strong>Username harus diisi</strong>
							</div>
						@enderror
					</div>

					<div class="wrap-input100 validate-input @error('password') is-invalid @enderror" data-validate = "Password tidak boleh kosong">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@error('password')
							<div class="invalid-feedback">
								<strong>Password harus diisi</strong>
							</div>
						@enderror
					</div>

                    <div class="wrap-input100 validate-input @error('confirm_password') is-invalid @enderror" data-validate = "Password tidak boleh kosong">
						<input class="input100" type="password" name="confirm_password" placeholder="Konfirmasi Password" id="confirm_password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@error('confirm_password')
							<div class="invalid-feedback">
								<strong>Konfirmasi Password harus diisi</strong>
							</div>
						@enderror
					</div>

					<div class="wrap-input100 validate-input @error('email') is-invalid @enderror" data-validate = "Email tidak boleh kosong">
						<input class="input100" type="email" name="email" placeholder="Email" id="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@error('email')
							<div class="invalid-feedback">
								<strong>Email harus diisi</strong>
							</div>
						@enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="user/login">
							Daftar
						</button>
                        <div class="text-center p-t-12">
						<a class="txt2" href="/user/login">
							<b>Login</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					</div>


					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset ('erilis_style/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('erilis_style/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset ('erilis_style/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('erilis_style/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('erilis-style/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset ('erilis_style/js/main.js') }}"></script>

</body>
</html>