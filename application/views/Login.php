<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<title>Login Admin Sertifikasi</title>


	<?php error_reporting(0) ?>
</head>
<body>

	<div class="container-fluid pt-3">
		<img class="img-fluid rounded mx-auto d-block h-25" src="<?php echo base_url('assets/img/admin.png') ?>" >
	</div>

	<div class="container pt-3">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 d-none d-sm-block"></div>

			<div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12 pb-3">
				<div class="card">
					<div class="card-body table-success">

						<h4 class="text-uppercase font-weight-bold text-center">Login Admin Sertifikasi</h4>

						<form action="<?php echo site_url('Login/Login') ?>" method="post" accept-charset="utf-8">
							<div class="form-group">
								
								<input class="form-control no-spin btn-outline-secondary font-weight-bold mb-2" type="text" required name="username-input" placeholder="Username" required autocomplete="off" oninvalid="this.setCustomValidity('')">
								<input  class="form-control no-spin btn-outline-secondary font-weight-bold mb-2" type="password" required name="password-input" placeholder="password" required autocomplete="off" oninvalid="this.setCustomValidity('')">

							</div>

							<?php if ($login_invalid == 'yes'): ?>

								<p class="text-center font-weight-bold table-danger">
									<?php echo $login_warning ?>
								</p>
								
							<?php endif ?>
							
						
							<button type="submit" class="btn btn-info font-weight-bold text-center text-uppercase d-block mx-auto" name="login">
								Login
							</button>
						</form>

					</div>
				</div>
			</div>



			<div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 d-none d-sm-block"></div>
		</div>


		
	</div>
	

</body>
</html>