<?php
session_start();

include 'config.php';


error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
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

	<title>LOGIN</title>
</head>

<body>
	<section class="login-register d-flex">
		<div class="w-100 h-100">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="header text-center">
						<h1>LOGIN</h1>
						<p>Selamat Datang Di Website Universitas Tadulako</p>
					</div>
					<form action="" method="POST">
						<div class="login-register-form">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" placeholder="Masukkan Email" name="email" value="<?php echo $email; ?>" required>

							<label for="email" class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="Masukkan Password" name="password" value="<?php echo $_POST['password']; ?>" required>

							<button class="btn-login-register" name="submit">Login</button>
							<div class="text-center">
								<span class="d-inline">Don't have an account? <a href="register.php">Register Here</a>.</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>

</html>