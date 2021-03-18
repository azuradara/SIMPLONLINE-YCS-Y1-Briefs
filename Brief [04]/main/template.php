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
		$query = "SELECT * from teachers";
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
		$query = "SELECT * from students";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)) {
			echo "<tr><td>" . $row['studentsId'] . "</td><td>" . $row['studentsFName'] . " " . $row['studentsLName'] . "</td><td>" . $row['studentsClassId'] . "</td><td class='crud-ico'><img src='./img/app/settings_white_24dp.svg' alt='edit'/></td>";
		};
	?>
	</table>
</div>