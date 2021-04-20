<?php

session_start();
if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 1) {
	header("location: ./login.php?error=noperm");
}

$usersId = $_POST["usersId"];
$usersEmail = $_POST["usersEmail"];
$usersUid = $_POST["usersUid"];
$usersPwd = $_POST["usersPwd"];

$teachersClassId = $_POST["teachersClassId"];
$teachersFName = $_POST["teachersFName"];
$teachersLName = $_POST["teachersLName"];
$teachersAddress = $_POST["teachersAddress"];
$teachersPhone = $_POST["teachersPhone"];

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
	mysqli_stmt_close($stmt);

	$sql = "UPDATE teachers SET teachersClassId = ? , teachersFName = ? , teachersLName = ? , teachersAddress = ? , teachersPhone = ? WHERE teachersId = ?"; 
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "isssii", $teachersClassId, $teachersFName, $teachersLName, $teachersAddress, $teachersPhone, $usersId);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	

	header("location: ../../../dboard_admin.php?error=noene");
	exit();

} else if (isset($_POST["delete"])) {

	$sql = "DELETE FROM teachers WHERE teachersId = ?";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "i", $usersId);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	$sql = "DELETE FROM users WHERE usersId = ?";
	$stmt = mysqli_stmt_init($conn);
	
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