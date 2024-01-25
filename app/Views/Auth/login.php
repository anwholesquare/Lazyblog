<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="blog management">
	<meta name="author" content="Khandoker Anan">
	<meta name="description" content="Lazyblog system">
	<meta property="og:title" content="Lazyblog Sign In">
	<meta property="og:description" content="Log in to start your blogging journey">
	<meta property="og:type" content="website">
	<meta property="og:image" content="./assets/images/common/og-image.jpg">

	<title>Sign In - Lazyblog</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">

	<div class="container">

		<?php if (session()->getFlashdata('msg')): ?>
			<div class="alert alert-warning">
				<?= session()->getFlashdata('msg') ?>
			</div>
		<?php endif; ?>

		<div class="row justify-content-center">
			<div class="col-md-6 mt-5">

				<!-- You can include validation and error alerts here as in the register.php -->

				<div class="card">
					<div class="card-header bg-success text-white">
						<h5 class="card-title">Sign In</h5>
					</div>
					<div class="card-body">
						<form method="post" action="<?= base_url('login/authenticate') ?>">
							<div class="mb-3">
								<label for="username" class="form-label">Username or Email</label>
								<input type="text" class="form-control" id="username" name="username"
									placeholder="Username or Email" required>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password"
									placeholder="Password" required>
							</div>
							<button type="submit" class="btn btn-success">Sign In</button>
						</form>
					</div>
				</div>

				<div class="text-center mt-3">
					<p>Don't have an account? <a href="<?= base_url('register') ?>">Register Here</a></p>
				</div>

			</div>
		</div>
	</div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</body>

</html>