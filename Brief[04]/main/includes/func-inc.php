<?php

	function emptyInputSingup($email, $username, $pwd, $pwdRepeat) {
		$result = true;
		if (empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
			$result = true;
		} else {
			$result = false;
		}
	
		return $result;
	}
	
	function invalidUid($username) {
		$result = true;
		if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			$result = true;
		} else {
			$result = false;
		}
	
		return $result;
	}

	function invalidEmail($email) {
		$result = true;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$result = true;
		} else {
			$result = false;
		}
	
		return $result;
	}

	function pwdMatch($pwd, $pwdRepeat) {
		$result = true;
		if ($pwd !== $pwdRepeat) {
			$result = true;
		} else {
			$result = false;
		}
	
		return $result;
	}

	function uidDupe($conn, $username, $email) {
		$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../signup.php?error=uhoestmtfailure");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "ss", $username, $email);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);

		if ($row = mysqli_fetch_assoc($resultData)) {
			return $row;
		} else {
			$result = false;
			return $result;
		}

		mysqli_stmt_close($stmt);
	}

	function createUser($conn, $username, $email, $pwd, $permLevel) {
		$sql = "INSERT INTO users (usersLevel, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../signup.php?error=uhoestmtfailure");
			exit();
		}

		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "ssss", $permLevel, $email, $username, $hashedPwd);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: ../signup.php?error=none");
		exit();
	}

	function emptyInputLogin($username, $pwd) {
		$result = true;
		if (empty($username) || empty($pwd)) {
			$result = true;
		} else {
			$result = false;
		}
	
		return $result;
	}

	function loginUser($conn, $username, $pwd) {
		$uidExists = uidDupe($conn, $username, $username);

		if ($uidExists === false) {
			header("location: ../login.php?error=invalidcreds");
			exit();
		}

		$pwdHashed = $uidExists["usersPwd"];
		$permLevel = $uidExists["usersLevel"];
		$checkPwd = password_verify($pwd, $pwdHashed);

		if ($checkPwd === false ) {
			header("location: ../login.php?error=invalidcreds");
			exit();
		} else if ($checkPwd === true) {

			session_start();
			$_SESSION["userid"] = $uidExists["usersId"];
			$_SESSION["level"] = $permLevel;
			$_SESSION["useruid"] = $uidExists["usersUid"];

			switch ($permLevel) {
				case 1:
					header("location: ../dboard_admin.php");
					exit();
					break;

				case 2:
					header("location: ../dboard_teacher.php");
					exit();
					break;

				case 3:
					header("location: ../dboard_student.php");
					exit();
					break;

				default:
					header("location: ../index.php");
					break;
			}
		}
	}
	
?>