<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>DELETE STUDENT</title>
</head>
<body style="background-image:linear-gradient(90deg,lightcyan,skyblue)"> 
	<div class="container my-5" style="border:2px solid brown;">
				<?php
				$sid=$_GET['sid'];
				$connection=mysqli_connect("localhost","root","","student_attendance");
				$query="DELETE FROM student WHERE st_id='$sid'";
				$qryobj=mysqli_query($connection,$query);
				if(isset($qryobj))
				{
					echo "DELETED";
					echo "<a href='view-students.php'>CLICK HERE TO GO BACK</a>";
				}
				else
				{
					echo "ERROR";
				}
				?>
	</div>
</body>
</html>