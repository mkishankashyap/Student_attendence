<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>View Attendance</title>
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
    <div class="container my-5" id="tb-div" style="border:4px solid red;">
        <h4 style="margin-top:20px;">List of Absent:</h4>
		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
				<th>Date</th>
                <th>Students</th>
				</tr>
			</thead>
			<tbody>
                <?php
                if(isset($_POST['sbtbtn'])){
                $class_id=$_POST['class'];
                $sub_id=$_POST['subject'];
				$connection=mysqli_connect("localhost","root","","student_attendance");
            
                $query = "SELECT s.name,a.date from student s , attendance a where s.st_id=a.stu_id and a.class_id=$class_id and a.sub_id = $sub_id and a.status='1'";
                $qryobj=mysqli_query($connection,$query);
                
				while($row=mysqli_fetch_assoc($qryobj))
				{
					echo '<tr>';
					echo '<td>'.$row['name'].'</td>';
					echo '<td>'.$row['date'].'</td>';
					echo '</tr>';
                }
                }
				?>
			</tbody>
        </table>
    </div>
    <div class="container my-5" style="border:4px solid green;">
        <h4>List of present:</h4>
		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
                <th>Students</th>
				</tr>
			</thead>
			<tbody>
                <?php
                if(isset($_POST['sbtbtn'])){
                $class_id=$_POST['class'];
                $sub_id=$_POST['subject'];
				$connection=mysqli_connect("localhost","root","","student_attendance");
                $query1="SELECT s.name from student s,student_class sc where s.st_id=sc.st_id and sc.cls_id=$class_id and s.st_id not in (SELECT a.stu_id from attendance a where a.class_id=$class_id and a.sub_id=$sub_id)";
                $qryobj1=mysqli_query($connection,$query1);
				while($row=mysqli_fetch_assoc($qryobj1))
				{
					echo '<tr>';
					echo '<td>'.$row['name'].'</td>';
					echo '</tr>';
                }
                }
				?>
			</tbody>
        </table>
    </div>
    <a href="admin-page.php" id="sbbtn" class="btn btn-primary">Back to Home</a>
</body>
</html>