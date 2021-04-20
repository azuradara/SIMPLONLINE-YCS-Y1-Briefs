<?php
	session_start();
	if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 3) {
		header("location: ./login.php?error=noperm");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Dashboard</title>
	<link rel="stylesheet" href="./scss/style.css">
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
					$query = "SELECT * FROM students WHERE studentsId =" . $_SESSION["userid"];
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);
					
					echo "$row[studentsFName] $row[studentsLName]";	

					$_SESSION['classid'] = $row['studentsClassId'];
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
					$query = "SELECT COUNT(assignmentsId) AS numberOfAssignments FROM assignments WHERE assignmentsClassId =" . $_SESSION['classid'];
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					echo "<p>$row[numberOfAssignments] Assignments Due</p>";	
					?>
				</div>
			</div>

			<div class="containers">
	<div class="tab-btns">
		<button class="tab__active a-tb-stud" id="asstab-btn">Assignments</button>
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