<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-widht, initial-sacle=1">
	<link rel="stylesheet" type="text/css" href="assets/css/add_student.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Add Student</title>
	<script type="text/javascript">
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #6F74F2" id="top-div">
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
    <div class="container-fluid" id="div">
        <h4>Add Students</h4>
        <div class="container-fluid" id="div-id">
            <form action="add-student.php" id="form" method="POST">
                <div class="form-group">
                <label for="name" id="label-id">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                </div>
                <div class="form-group">
                <label id="label-id">Usn:</label>
                <input type="text" class="form-control" placeholder="Enter usn" id="usn" name="usn">
                </div>
                <div class="form-group">
                    <label id="label-id">Phone:</label>
                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label id="label-id">Gender:</label>
                    <select class="custom-select my-1 mr-sm-2 select_class" id="inlineFormCustomSelectPref" name="gender">
                        <option selected>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label id="label-id">Class:</label>
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
                <button type="submit" class="btn btn-primary" id="sbbtn" name="sbtbtn">Add</button>
                <a href="admin-page.php" id="sbbtn" class="btn btn-primary">Back to Home</a>
            </form>
          </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>