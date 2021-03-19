<?php

session_start();
if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 1) {
	header("location: ./login.php?error=noperm");
}

$usersId = $_POST["usersId"];
$usersEmail = $_POST["usersEmail"];
$usersUid = $_POST["usersUid"];
$usersPwd = $_POST["usersPwd"];

$studentsClassId = $_POST["studentsClassId"];
$studentsFName = $_POST["studentsFName"];
$studentsLName = $_POST["studentsLName"];
$studentsAddress = $_POST["studentsAddress"];
$studentsGender = $_POST["studentsGender"];
$studentsBirthday = $_POST["studentsBirthday"];
$studentsPhone = $_POST["studentsPhone"];

require_once '../../dbh-inc.php';

if (isset($_POST["submit"])) {

	$sql = "UPDATE users SET usersEmail = ?, usersUid = ?, usersPwd = ? WHERE usersId = ?" ;
	$stmt = mysqli_stmt_init($conn);
	

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "sssi", $usersEmail, $usersUid , $usersPwd, $usersId);
	mysqli_stmt_execute($stmt);

	$sql = "UPDATE students SET studentsClassId = ? , studentsFName = ? , studentsLName = ? , studentsAddress = ? , studentsGender = ? , studentsBirthday = ? , studentsPhone = ? WHERE studentsId = ?" ;
	
    if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("location: ../../../dboard_admin.php?error=ohno");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "isssssii", $studentsClassId, $studentsFName, $studentsLName, $studentsAddress, $studentsGender  , $studentsBirthday , $studentsPhone, $usersId);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../../../dboard_admin.php?error=none");
	exit();


} else if (isset($_POST["delete"])) {

	$stmt = mysqli_stmt_init($conn);
	$sql = "DELETE FROM students WHERE studentsId = ?";
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "i", $usersId);
	mysqli_stmt_execute($stmt);

	$sql = "DELETE FROM users WHERE usersId = ?";
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "i", $usersId);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../../../dboard_admin.php?error=none");
	exit();
}

?>