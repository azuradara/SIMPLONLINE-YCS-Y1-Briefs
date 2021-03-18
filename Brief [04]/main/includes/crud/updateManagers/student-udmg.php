<?php

if (isset($_POST["submit"])) {
	
	$usersId = $_POST["usersId"];
	$usersEmail = $_POST["usersEmail"];
	$usersUid = $_POST["usersUid"];
	$usersPwd = $_POST["usersPwd"];

	$studentsId = $_POST["studentsId"];
	$studentsClassId = $_POST["studentsClassId"];
	$studentsFName = $_POST["studentsFName"];
	$studentsLName = $_POST["studentsLName"];
	$studentsAddress = $_POST["studentsAddress"];
	$studentsGender = $_POST["studentsGender"];
	$studentsBirthday = $_POST["studentsBirthday"];
	$studentsPhone = $_POST["studentsPhone"];
    
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

	$sql = "UPDATE students SET studentsClassId = ? , studentsFName = ? , studentsLName = ? , studentsAddress = ? , studentsGender = ? , studentsBirthday = ? , studentsPhone = ? WHERE studentsId = ?" ; 
	$stmt = mysqli_stmt_init($conn) ; 
	
    if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("location: ../../../dboard_admin.php?error=noene");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "isssssii", $studentsClassId, $studentsFName, $studentsLName, $studentsAddress, $studentsGender  , $studentsBirthday , $studentsPhone, $usersId);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../../../dboard_admin.php?error=noene");
	exit();


} else if (isset($_POST["delete"])) {
	$studentsId = $_POST["usersId"];

	require_once '../../dbh-inc.php';

	$sql = "DELETE FROM students WHERE studentsId = ?";
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../dboard_admin.php?error_stmtfailure");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "i", $studentsId);
	mysqli_stmt_execute($stmt) or die(
		header("location: ../../../dboard_admin.php?error=classhasstudents")
	);
	mysqli_stmt_close($stmt);
	header("location: ../../../dboard_admin.php?error=none");
	exit();
}

?>