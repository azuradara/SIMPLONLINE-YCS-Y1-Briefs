<?php

session_start();
if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 2) {
	header("location: ./login.php?error=noperm");
}

if (isset($_POST["submit"])) {

	$assignmentsClassId = $_SESSION["classid"];
	$assignmentsTitle = $_POST["assignmentsTitle"];
	$assignmentsDesc = $_POST["assignmentsDesc"];

	require_once '../../dbh-inc.php';

	$sql = "INSERT INTO assignments(assignmentsClassId, assignmentsTitle, assignmentsDesc) VALUES (?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_teacher.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "iss", $assignmentsClassId, $assignmentsTitle, $assignmentsDesc);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../../../dboard_teacher.php?error=noene");
	exit();
}

?>