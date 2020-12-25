<?php
if(isset($_POST['sbtbtn']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];
$connection=mysqli_connect("localhost","root","","student_attendance");
$query="INSERT into faculty(name,phone,qualification,gender) values('$name','$phone','$qualification','$gender')";
$qryobj=mysqli_query($connection,$query);
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
	header('Location:add-faculty.html');
}
?>