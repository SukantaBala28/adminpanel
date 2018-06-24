<?php
	session_start();

	// logged in form
	$log_err="";
	if (isset($_POST['log_dashboard'])) {
		$email = mysqli_real_escape_string($conn, $_POST['userEmail']);
		$password = mysqli_real_escape_string($conn, $_POST['userPassword']);

		if (empty($email)) {
			$log_err='User email is Required';
		} else {
			if (empty($password)) {
				$log_err='User password is Required';
			} else {
				$password = md5($password);
				$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
				$result = mysqli_query($conn, $query);
				$data = mysqli_fetch_assoc($result);
				if (mysqli_num_rows($result) == 1) {
					$_SESSION['username'] = 'Sukanta Bala';
					$_SESSION['userEmail'] = $email;
					$_SESSION['success'] = 'You are logged in';
					header('location: dashboard.php');
				} else {
					$log_err = 'Wrong email/password combination.';
				}
			}
		}
	}

	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['userEmail']);
		header('location:index.php');
	}
?>