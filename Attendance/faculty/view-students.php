<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/student.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Student page</title>
	<script type="text/javascript">
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #6F74F2" id="top-div">
		<a class="navbar-brand" href="#">
			<img src="images/education.png" alt="" height="50px" weight="50px" class="d-line-block align-top" id="icon">
			<label id="icon-label">isPresent</label>
		</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav"> 
				<li class="nav-item" id="li-1" style="border:1px solid white; margin-right:10px;">
					<a class="nav-link" href="home.php" id="logout-text">Home</a>
				</li>
				<li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
					<a class="nav-link" href="students.php" id="logout-text">Students</a>
                </li>
                <li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
					<a class="nav-link" href="take-attendance.php" id="logout-text">Take Attendance</a>
				</li>
				<li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
					<a class="nav-link" href="select-class.php" id="logout-text">View Attendance</a>
                </li>
                <li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
					<a class="nav-link" href="http://localhost/Attendance1/Attendance/index.html" id="logout-text">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container" id="div">
		<div class="container my-5" style="border:2px solid brown;">
			<table class="table table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
					<th>Student ID</th>
					<th>Student Name</th>
					<th>Student USN</th>
					<th>Student Gender</th>
					<th>Student Phone</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$class = $_POST['class'];
					$connection=mysqli_connect("localhost","root","","student_attendance");
					
					$query="SELECT student.st_id,student.name,student.usn,student.gender,student.phone from student,student_class where student.st_id=student_class.st_id and student_class.cls_id=$class";
					
					$qryobj=mysqli_query($connection,$query);
					
					while($row=mysqli_fetch_assoc($qryobj))
					{
						echo '<tr>';
						echo '<td>'.$row['st_id'].'</td>';
						echo '<td>'.$row['name'].'</td>';
						echo '<td>'.$row['usn'].'</td>';
						echo '<td>'.$row['gender'].'</td>';
						echo '<td>'.$row['phone'].'</td>';
						//echo '<td><a href="deletestudent.php?sid='.$row['STUDENTID'].'">DELETE STUDENT</a></td>';
						//echo '<td><a href="deletestudent.php?sid='.$row['STUDENTID'].'"><button class="btn btn-primary">DELETE STUDENT</button></a></td>';
						//deletestudent.php?sid=25
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>