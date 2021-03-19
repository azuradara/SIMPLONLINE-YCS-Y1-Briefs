<?php
	session_start();
	if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 2) {
		header("location: ./login.php?error=noperm");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teacher Dashboard</title>
	<link rel="stylesheet" href="./scss/style.css">
	<script src="./js/tabs_teacher.js"></script>
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
					$query = "SELECT teachersFName, teachersLName, teachersClassId FROM teachers WHERE teachersId =" . $_SESSION["userid"];
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);
					
					echo "$row[teachersFName] $row[teachersLName]";	

					$_SESSION['classid'] = $row['teachersClassId'];
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
				<span class="sep"></span>
				<div class="entity--info">
					<?php
					$query = "SELECT COUNT(studentsId) AS numberOfStudents FROM students WHERE studentsClassId =" . $_SESSION['classid'];
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					echo "<p>$row[numberOfStudents] Students</p>";	
					?>
				</div>
			</div>

			<div class="containers">
	<div class="tab-btns">
		<button class="tab__active" id="asstab-btn">Assignments</button>
		<button style="display:none;"></button>
		<button id="studenttab-btn">Students</button>
	</div>
	<div id="assignmenttable">
		<?php
		$query = "SELECT * from assignments WHERE assignmentsClassId =" . $_SESSION['classid'];
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)) {
			?>

			<div class="assignment">
				<h3 class="assignment--title"><?php echo "$row[assignmentsTitle]" ?></h3>
				<p class="assignment--desc"><?php echo "$row[assignmentsDesc]" ?></p>
			</div>

			<?php
		};
		?>
	</div>
	<table id="studenttable">
		<tr>
			<th>Id</th>
			<th>Full Name</th>
			<th>Phone</th>
			<th>Address</th>
		</tr>
		<?php
		$query = "SELECT studentsId, studentsFName, studentsLName, studentsPhone, studentsAddress from students WHERE studentsClassId =" . $_SESSION['classid'];
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)) {
			echo "<tr><td>" . $row['studentsId'] . "</td><td>" . $row['studentsFName'] . " " . $row['studentsLName'] . "</td><td>" . $row['studentsPhone'] . "</td><td>" . $row['studentsAddress'];
		};
	?>
	</table>

	<div id="add-entry" class="add-assignments"><img src="./img/app/add_black_24dp.svg" alt=""></div>
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