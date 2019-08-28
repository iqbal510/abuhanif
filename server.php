<?php
include("db.php");
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$address    = "";
	$errors = array();
	$_SESSION['success'] = "";
	// connect to database
	
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "<p class='text-danger'>Username is required</p>"); }
		if (empty($email)) { array_push($errors, "<p class='text-danger'>Email is required</p>"); }
		if (empty($address)) { array_push($errors, "<p class='text-danger'>Address is required</p>"); }
		if (empty($password_1)) { array_push($errors, "<p class='text-danger'>Password is required</p>"); }
		//check db for existing user with username
		$user_check_query = "SELECT * FROM user WHERE username = '$username' or email ='$email' LIMIT 1 ";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		if ($user) {
			if ($user['username'] === $username){array_push($errors, "Username already exists");}
			if ($user['email'] === $email){array_push($errors, "This email id hsa a registered username");}
			}
		
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (username, email, address, password)
					VALUES('$username', '$email','$address', '$password')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "<p class='text-success'>You are now logged in</p>";
			header('location: index.php');
		}
	}
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		if (empty($username)) {
			array_push($errors, "<p class='text-danger'>Username is required</p>");
		}
		if (empty($password)) {
			array_push($errors, "<p class='text-danger'>Password is required</p>");
		}
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "<p class='text-success'>Wrong username/password combination</p>");
			}
		}
	}
?>