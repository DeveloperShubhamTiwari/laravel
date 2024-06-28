<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin') }}/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin') }}/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin') }}/vendors/images/favicon-16x16.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/style.css">
</head>
<body class="login-page">
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('assets/admin') }}/vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To DeskApp</h2>
						</div>
						<form action="{{ route('checkLogin') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="input-group custom">
								<input type="email" name="email" class="form-control form-control-lg" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{ asset('assets/admin') }}/vendors/scripts/core.js"></script>
	<script src="{{ asset('assets/admin') }}/vendors/scripts/script.min.js"></script>
	<script src="{{ asset('assets/admin') }}/vendors/scripts/process.js"></script>
	<script src="{{ asset('assets/admin') }}/vendors/scripts/layout-settings.js"></script>
</body>
</html>