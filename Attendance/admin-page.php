<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-widht, initial-sacle=1">
	<link rel="stylesheet" type="text/css" href="assets/css/admin.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Admin page</title>
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
				<li class="nav-item" id="li-2">
					<a class="nav-link" href="index.html" id="logout-text">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top:80px;">
		<ul class="nav nav-pills" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="pills-home-tab" href="#pills-home" data-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Student</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="add-student-html.php">Add/Remove</a>
					<a class="dropdown-item" href="view-students.php">View Students</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Faculty</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="add-faculty.html">Add/Remove</a>
					<a class="dropdown-item" href="view-faculty.php">View Faculty</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Subjects</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="add-subjects.php">Add</a>
					<a class="dropdown-item" href="sub_fac_h.php">Assign Subjects</a>
					<a class="dropdown-item" href="view-subjects.php">View Subjects</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Classes</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="add-class-html.php">Add/Remove</a>
					<a class="dropdown-item" href="view-class.php">View Class</a>
				</div>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="pills-attendance-tab" href="#pills-attendance" data-toggle="pill" role="tab" aria-controls="pills-attendance" aria-selected="true">View Attendance</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
			<div class="tab-pane fade" id="pills-subjects" role="tabpanel" aria-labelledby="pills-subjects-tab">
				
			</div>
			<div class="tab-pane fade" id="pills-attendance" role="tabpanel" aria-labelledby="pills-attendance-tab">
				<form action="attendance-view.php" id="form" method="POST">
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
						<div class="form-group">
							<label id="label-id">Select subject:</label>
							<select class="custom-select my-1 mr-sm-2 select_class" id="inlineFormCustomSelectPref" name="subject">
									<?php
									$connection=mysqli_connect("localhost","root","","student_attendance");
									$query="SELECT sub_id,title FROM subjects";
									$qryobj=mysqli_query($connection,$query);
									while($row=mysqli_fetch_assoc($qryobj)){
										echo '<option value='.$row['sub_id'].'>'.$row['title'].'</option>';
									}
									?>
							</select>
						</div>
						<button type="submit" class="btn btn-primary" id="sbbtn" name="sbtbtn">Submit</button>
					</div>
				</form>
			</div>
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