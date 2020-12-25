<?php
	if(isset($_POST['sbtbtn']))
	{
		$class=$_POST['class_name'];
		$faculty=$_POST['faculty'];
		$connection=mysqli_connect("localhost","root","","student_attendance");
		$query="INSERT into class(cls_name,fc_id) values('$class','$faculty')";
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
	    header('Location:add-class1.php');
	}
?>