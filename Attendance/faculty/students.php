<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/student.css">
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
					<a class="nav-link" href="http://localhost/Attendance1/Attendance/index.html" id="logout-text">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<form action="view-students.php" id="form" method="POST">
		<div class="container" id="div">
		<div class="form-group">
						<label id="label-id">Select class:</label>
						<select class="custom-select my-1 mr-sm-2 select_class" id="inlineFormCustomSelectPref" name="class">
							<?php
								$connection=mysqli_connect("localhost","root","","student_attendance");
								$query="SELECT cls_id,cls_name FROM class";
								$qryobj=mysqli_query($connection,$query);
								while($row=mysqli_fetch_assoc($qryobj)){
								echo '<option value='.$row['cls_id'].'>'.$row['cls_name'].'</option>';
								}
							?>
						</select>
		</div>
		<button type="submit" class="btn btn-primary" id="sbbtn" name="sbtbtn">Submit</button>
		</div>
	</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>