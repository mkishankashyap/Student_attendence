<?php
if(isset($_POST['sbtbtn']))
{
$st_id=0;
$name=$_POST['name'];
$usn=$_POST['usn'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$connection=mysqli_connect("localhost","root","","student_attendance");
$query="INSERT into student(name,usn,gender,phone) values('$name','$usn','$gender','$phone') ";
$query1= "SELECT MAX(st_id) FROM student";
$qryobj1=mysqli_query($connection,$query1);
$qryobj=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($qryobj1);
$st_id = $st_id + $row['MAX(st_id)'];
$query2 = "INSERT into student_class(st_id,cls_id) values('$st_id','$class')";
$qryobj2=mysqli_query($connection,$query2);
if(isset($qryobj))
{
	echo '<script>alert("Done")</script>';
}
else
{
	echo '<script>alert("Error")</script>';
}
}
else
{
	header('Location:add-student.html');
}
?>