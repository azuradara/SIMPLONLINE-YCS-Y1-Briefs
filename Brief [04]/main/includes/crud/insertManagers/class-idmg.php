<?php

session_start();
if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 1) {
	header("location: ./login.php?error=noperm");
}

if (isset($_POST["submit"])) {
	
	$classesId = $_POST["classesId"];
	$classesName = $_POST["classesName"];

	require_once '../../dbh-inc.php';

	$sql = "INSERT INTO classes(classesName) VALUES (?)";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $classesName);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../../../dboard_admin.php?error=noene");
	exit();
}

?>