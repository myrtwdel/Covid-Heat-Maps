<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register | Covid Heat Maps</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<section class="vh-100 gradient-custom bg-dark">
	<form class="container" method="post" action="register.php">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				<div class="card bg-dark text-white" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">
						<div class="mb-md-5 mt-md-4 pb-5">
							<?php echo display_error(); ?>
							<img src="" alt="Logo">
                            <h1>Covid Heat Maps</h1>
                            <br><br>
                            <p class="text-white-50 mb-5">Sign Up!</p>
							<div class="form-outline form-white mb-4">
								<label class="form-label">Username</label>
								<input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
							</div>
							<div class="form-outline form-white mb-4">
								<label class="form-label">Email</label>
								<input type="email" name="email" class="form-control form-control-lg"  value="<?php echo $email; ?>">
							</div>
							<div class="form-outline form-white mb-4">
								<label>Password</label>
								<input type="password" name="password_1" 
								class="form-control form-control-lg" 
								pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}" 
								title="Must contain at least one number and one uppercase and lowercase letter, at least 8 or more characters and a special character" required>
							</div>
							<div class="form-outline form-white mb-4">
							<label class="form-label">Re-Enter your Password</label>
								<input type="password" name="password_2" class="form-control form-control-lg">
							</div>
							<br>
							<div class="form-outline form-white mb-1">
								<button type="submit" class="btn btn-outline-light btn-lg px-5" name="register_btn">Register</button>
							</div>
							<div>
                                <br>
                                <p class="mb-0">Already a user? <a href="login.php" class="text-white-50 fw-bold">Log In</a></p>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>