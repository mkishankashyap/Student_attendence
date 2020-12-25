<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bottom.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Home page</title>
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
				<li class="nav-item" style="border:1px solid white; margin-right:10px;">
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
	<div class="jumbotron">
            <h1 class="display-4">Welcome To isPresent!!</h1>
	</div>
	<div class="container my-5" style="border:2px solid brown;">
					<h4>About Lectures:</h4>
					<table class="table table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Lecture Name</th>
								<th>Qualification</th>
								<th>Class</th>
							</tr>
						</thead>
						<tbody>
								<?php
								$connection=mysqli_connect("localhost","root","","student_attendance");
								$query="SELECT f.name,f.qualification,c.cls_name from faculty f,class c where f.fc_id=c.fc_id";
								$qryobj=mysqli_query($connection,$query);
								while($row=mysqli_fetch_assoc($qryobj))
								{
									echo '<tr>';
									echo '<td>'.$row['name'].'</td>';
									echo '<td>'.$row['qualification'].'</td>';
									echo '<td>'.$row['cls_name'].'</td>';
									echo '</tr>';
								}
								?>
						</tbody>
        			</table>
				</div>
				<div class="container my-5" style="border:2px solid brown;">
					<h4>Students:</h4>
					<table class="table table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Class Name</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
								<?php
								$connection=mysqli_connect("localhost","root","","student_attendance");
								$query="SELECT c.cls_name,COUNT(st_id) from class c,student_class sc WHERE c.cls_id=sc.cls_id GROUP BY sc.cls_id";
								$qryobj=mysqli_query($connection,$query);
								while($row=mysqli_fetch_assoc($qryobj))
								{
									echo '<tr>';
									echo '<td>'.$row['cls_name'].'</td>';
									echo '<td>'.$row['COUNT(st_id)'].'</td>';
									echo '</tr>';
								}
								?>
						</tbody>
        			</table>
    			</div>
			</div>
	<div class="b-div">
		<h4 id="codebit-inc">2020 codeBit</h4>
	</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>