<?php
	session_start();
	if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 1) {
		header("location: ./login.php?error=noperm");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="./scss/style.css">
	<script src="./js/tabs_admin.js"></script>
	<script src="./js/populateTables.js"></script>
	<script src="./js/cycleAddBtn.js"></script>
</head>

<body class="app">
	<?php
	include_once './html-includes/appsidebar-incl.php';
	require_once './includes/dbh-inc.php';
	?>

	<main>
		<header>
			<h1>Dashboard</h1>
			<div class="status">
				<div class="icons">
					<img class="bell" src="./img/app/bell.svg" alt="">
					<img src="./img/app/profile.svg" alt="">
				</div>
				<h2 class="username">
				<?php
					$query = "SELECT usersUid FROM users WHERE usersId =" . $_SESSION["userid"];
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					echo "$row[usersUid]";	
				?>
					</h2>
			</div>
		</header>

		<div class="maincontent">
			<div class="entity">
				<img src="./img/app/default-profile-picture-avatar-photo-placeholder-vector-illustration-vector-id1223671392.jpg"
					alt="" class="entity--img">
				<div class="entity--stat">
					<img src="./img/app/alternate_email_white_24dp.svg" alt="" class="icon">
					<?php
						$query = "SELECT usersEmail FROM users WHERE usersId =" . $_SESSION["userid"];
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_array($result);

						echo "<p>$row[usersEmail]</p>";	
					?>
				</div>
				<div class="entity--stat">
					<img src="./img/app/account_circle_white_24dp.svg" alt="" class="icon">
					<?php
						$query = "SELECT usersUid FROM users WHERE usersId =" . $_SESSION["userid"];
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_array($result);

						echo "<p>$row[usersUid]</p>";	
					?>
				</div>
				<span class="sep"></span>
				<div class="entity--info">
					<?php
					$query = "SELECT COUNT(classesId) AS numberOfClasses FROM classes";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					echo "<p>$row[numberOfClasses] Classes</p>";	
					?>

					<?php
					$query = "SELECT COUNT(studentsId) AS numberOfStudents FROM students";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					echo "<p>$row[numberOfStudents] Students Enrolled</p>";	
					?>	
				</div>
			</div>

			<div class="containers">
	<div class="tab-btns">
		<button class="tab__active" id="classtab-btn">Classes</button>
		<button id="teachertab-btn">Teachers</button>
		<button id="studenttab-btn">Students</button>
	</div>
	<table id="classtable">
		<tr>
			<th>Id</th>
			<th>Class Name</th>
			<th class='crud-ico'>Actions</th>
		</tr>
		<?php
		$query = "SELECT * from classes";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)) {
			echo "<tr><td>" . $row['classesId'] . "</td><td>" . $row['classesName'] . "</td><td class='crud-ico'><img src='./img/app/settings_white_24dp.svg' alt='edit'/></td>";
		};
	?>
	</table>
	<table id="teachertable">
		<tr>
			<th>Id</th>
			<th>Full Name</th>
			<th>Class</th>
			<th class='crud-ico'>Actions</th>
		</tr>
		<?php
		$query = "SELECT teachersId, teachersFName, teachersLName, teachersClassId from teachers";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)) {
			echo "<tr><td>" . $row['teachersId'] . "</td><td>" . $row['teachersFName'] . " " . $row['teachersLName'] . "</td><td>" . $row['teachersClassId'] . "</td><td class='crud-ico'><img src='./img/app/settings_white_24dp.svg' alt='edit'/></td>";
		};
	?>
	</table>
	<table id="studenttable">
		<tr>
			<th>Id</th>
			<th>Full Name</th>
			<th>Class</th>
			<th class='crud-ico'>Actions</th>
		</tr>
		<?php
		$query = "SELECT studentsId, studentsFName, studentsLName, studentsClassId from students";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)) {
			echo "<tr><td>" . $row['studentsId'] . "</td><td>" . $row['studentsFName'] . " " . $row['studentsLName'] . "</td><td>" . $row['studentsClassId'] . "</td><td class='crud-ico'><img src='./img/app/settings_white_24dp.svg' alt='edit'/></td>";
		};
	?>
	</table>
	<div id="add-entry"><img src="./img/app/add_black_24dp.svg" alt=""></div>
</div>
	</main>

	<div id="modal" style="display: none;">
		<div class="modalcontent">
			<div class="close"><p>&times;</p></div>
			<form action="ye" method="post">
			</form>
		</div>
	</div>
</body>

</html>