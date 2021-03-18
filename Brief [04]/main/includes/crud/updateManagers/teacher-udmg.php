<?php

if (isset($_POST["submit"])) {
	
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
	$teachersClassId = $_POST["teachersClassId"];

	require_once '../../dbh-inc.php';

	$sql = "DELETE FROM teachers WHERE teachersClassId = ?";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "i", $teachersClassId);
	mysqli_stmt_execute($stmt) or die(
		header("location: ../../../dboard_admin.php?error=classhasstudents")
	);
	mysqli_stmt_close($stmt);
	header("location: ../../../dboard_admin.php?error=none");
	exit();
}

?>