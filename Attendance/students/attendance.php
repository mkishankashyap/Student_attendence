<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width;initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
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
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item" id="li-1" style="border:1px solid white; margin-right:10px;">
                        <a class="nav-link" href="home.php" id="logout-text">Home</a>
                    </li>
                    <li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
                        <a class="nav-link" href="attendance.php" id="logout-text">Attendance</a>
                    </li>
                    <li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
                        <a class="nav-link" href="mycource.php" id="logout-text">MyCource</a>
                    </li>
                    <li class="nav-item" id="li-2" style="border:1px solid white; margin-right:10px;">
                        <a class="nav-link" href="http://localhost/Attendance1/Attendance/index.html" id="logout-text">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="margin-top:100px;"></div>
        <div class="container my-5" style="border:4px solid brown;">
        <h4>Your Absent List:</h4>
		<table class="table table-bordered table-hover" style="padding-top:30px;">
			<thead class="thead-dark">
				<tr>
				<th>Date</th>
                <th>Students</th>
				</tr>
			</thead>
			<tbody>
                <?php
                session_start();
                $user_id=$_SESSION['user_id'];
                $connection=mysqli_connect("localhost","root","","student_attendance");
                $stu_id_query="select st_id from student where usn='$user_id'";
                $stu_id_qryobj=mysqli_query($connection,$stu_id_query);
                $stu_id_row=mysqli_fetch_assoc($stu_id_qryobj);
                $stu_id=$stu_id_row['st_id'];
                $stu_class_qery="select cls_id from student_class where st_id=$stu_id";
                $stu_class_qryobj=mysqli_query($connection,$stu_class_qery);
                $stu_class_row=mysqli_fetch_assoc($stu_class_qryobj);
                $class_id=$stu_class_row['cls_id'];
                $attendance_qry="select sub.title,a.date from subjects sub,attendance a where a.stu_id=$stu_id and a.class_id=$class_id and a.sub_id=sub.sub_id";
                $attendance_qryobj=mysqli_query($connection,$attendance_qry);
				while($row=mysqli_fetch_assoc($attendance_qryobj))
				{
					echo '<tr>';
					echo '<td>'.$row['title'].'</td>';
					echo '<td>'.$row['date'].'</td>';
					echo '</tr>';
                }
				?>
			</tbody>
        </table>
    </div>
    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>