<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width;initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/student.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>My Cource</title>
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
        <div class="container my-5">
            <table class="table table-bordered table-hover" style="margin-top:100px;">
                <thead class="thead-dark">
                    <tr>
                    <th>Subject name</th>
                    <th>Faculty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $connection=mysqli_connect("localhost","root","","student_attendance");
                        $query="SELECT subjects.title , faculty.name from subjects,faculty,subject_faculty where subjects.sub_id = subject_faculty.sub_id and subject_faculty.fc_id = faculty.fc_id";
                        $qryobj=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($qryobj))
                        {
                            echo '<tr>';
                            echo '<td>'.$row['title'].'</td>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="b-div">
            <h4 id="codebit-inc">2020 codeBit</h4>
        </div>
    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>