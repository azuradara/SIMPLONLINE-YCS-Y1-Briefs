<?php

if (isset($_POST["submit"])) {

	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];
	$permLevel = 1;

	require_once 'dbh-inc.php';
	require_once 'func-inc.php';

	if (emptyInputSingup($email, $username, $pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}

	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	}

	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}

	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=passwordmismatch");
		exit();
	}
	
	if (uidDupe($conn, $username, $email) !== false) {
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	createUser($conn, $username, $email, $pwd, $permLevel);
	
} else {
	header("location: ../signup.php");
}


?>