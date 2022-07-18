<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

	<!-- MY CSS -->
	<link rel="stylesheet" href="css/style.css?<?= time(); ?>" />

	<title>REGISTER</title>
</head>

<body>
	<section class="login-register d-flex">
		<div class="w-100 h-100">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-lg-4 col-md-6 col-sm-10">
					<div class="header text-center">
						<h1>REGISTER</h1>
						<p>Selamat Datang Di Website Universitas Tadulako</p>
					</div>
					<form action="" method="POST">
						<div class="login-register-form">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
							<label for="cpassword" class="form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>

							<button class="btn-login-register" name="submit">Register</button>
							<div class="text-center">
								<span class="d-inline">Have an account? <a href="index.php">Login Here</a>.</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>

</html>