<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="blog management">
	<meta name="author" content="Khandoker Anan">
	<meta name="description" content="Lazyblog system">
	<meta property="og:title" content="Lazyblog Landing Page">
	<meta property="og:description" content="Sign up now to start blogging">
	<meta property="og:type" content="website">
	<meta property="og:image" content="./assets/images/common/og-image.jpg">

	<title>Lazyblog</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 mt-5">

				<?php if (isset($validation)): ?>
					<div class="alert alert-danger" role="alert">
						<?= $validation->listErrors() ?>
					</div>
				<?php endif; ?>

				<?php if (isset($error)): ?>
					<div class="alert alert-warning" role="alert">
						<?= $error ?>
					</div>
				<?php endif; ?>

				<div class="card">
					<div class="card-header bg-primary text-white">
						<h5 class="card-title">Register</h5>
					</div>
					<div class="card-body">
						<form method="post" action="<?= base_url('register/store') ?>" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="user_name"
									placeholder="Username" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email"
									required>
							</div>
							<div class="mb-3">
								<label for="fullname" class="form-label">Full Name</label>
								<input type="text" class="form-control" id="fullname" name="full_name"
									placeholder="Full Name" required>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password"
									placeholder="Password" required>
							</div>
							<div class="mb-3">
								<label for="bio" class="form-label">Bio</label>
								<textarea class="form-control" id="bio" name="bio" placeholder="Bio"
									rows="3"></textarea>
							</div>
							<div class="mb-3">
								<label for="image" class="form-label">Profile Image</label>
								<input type="file" class="form-control" id="image" name="image" required>
							</div>
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
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