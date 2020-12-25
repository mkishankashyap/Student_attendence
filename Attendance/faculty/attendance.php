<?php
if(isset($_POST['sbtbtn']))
{
//STEP1 - STORING DATA RECIEVED FROM THE FRONTEND
$class=$_POST['class'];
$subject=$_POST['subject'];
$student=$_POST['student'];
$status = 1;
$date = $_POST['date'];
$newDate = date("Y-m-d",strtotime($date));
//echo $name.'<br>';
//echo $age.'<br>';
//echo $branch.'<br>';
//STEP2 - INITIALIZING THE DATABASE
//I.P ADDRESS,USERNAME,PASSWORD,DBNAME
$connection=mysqli_connect("localhost","root","","student_attendance");

//STEP-3 WRITE SQL QUERY
$query="INSERT into attendance(stu_id,class_id,sub_id,date,status) values('$student','$class','$subject','$newDate','$status')";

//STEP- 4 EXECUTE THE QUERY
$qryobj=mysqli_query($connection,$query);

//STEP -5 ACKNOWLEDGE
if(isset($qryobj))
{
	echo "Done";
}
else
{
	echo "ERROR";
}
}
else
{
	header('Location:take-attendance.php');
}
?>