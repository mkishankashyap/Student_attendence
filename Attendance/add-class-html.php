<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-widht, initial-sacle=1">
	<link rel="stylesheet" type="text/css" href="assets/css/add-class.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Add Class</title>
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
    <div class="container-fluid" id="div">
        <div class="container-fluid" id="div-id">
            <form action="add-class.php" id="form" method="POST">
                <div class="form-group">
                <label for="name" id="label-id">Class Name:</label>
                <input type="text" class="form-control" placeholder="Enter class" id="name" name="class_name">
                </div>
                <div class="form-group">
                    <label id="label-id">Faculty:</label>
                    <select class="custom-select my-1 mr-sm-2 select_class" id="inlineFormCustomSelectPref" name="faculty">
						<?php
						$connection=mysqli_connect("localhost","root","","student_attendance");
						$query="SELECT * FROM faculty order by fc_id";
						$qryobj=mysqli_query($connection,$query);
						while($row=mysqli_fetch_assoc($qryobj)){
						echo '<option value='.$row['fc_id'].'>'.$row['name'].'</option>';
						}
						?>
                    </select>
                </div>
				<button type="submit" class="btn btn-primary" id="sbbtn" name="sbtbtn">Submit</button>
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