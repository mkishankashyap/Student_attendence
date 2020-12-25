<?php
session_start();
$visibile="";
if(isset($_POST['sbtbtn']))
{
$user=$_POST['user'];
$userid=$_POST['email'];
$password=$_POST['password'];
$_SESSION['user_id']=$userid;
if($user=='admin' && $userid=='123456' && $password=='admin123'){
    $visibile='hidden';
    header('Location:admin-page.php');
}else if(search($userid,$password,$user)=='student'){
    $visibile='hidden';
    $student_name=search($userid,$password,$user);
    header('Location:students/home.php');
}else if(search($userid,$password,$user)=='faculty'){
    header('Location:faculty/home.php');
}else{
    $visibile='not-hidden';
    header('Location:http://localhost/Attendance1/Attendance/index.html');
}
if(isset($qryobj))
{
    echo '<script>alert("Logged in Succesfully")</script>';
}
else
{
    echo '<script>alert("Logged in Succesfully")</script>';
}
}
else
{
	header('Location:index.html');
}
function search($userid,$password,$user){
    $connection=mysqli_connect("localhost","root","","student_attendance");
    if($user=='student'){
    $query="SELECT * FROM student";
    $qryobj=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($qryobj))
				{
                   if($row['usn']==$userid && $row['phone']==$password){
                       return 'student';
                   }else 'no';
                }
     }else{
        $query = "SELECT * from faculty";
        $qryobj=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($qryobj))
				{
                   if($row['name']==$userid && $row['phone']==$password){
                       return 'faculty';
                   }else 'no';
                }
     }
}
?>