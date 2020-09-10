<?php
session_start();
include('dbconn.php');
$empid=$_SESSION['id'];
//$id=$_POST['id'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$post=$_POST['post'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$cid=$_POST['cid'];
$status=$_POST['status'];

$sql="UPDATE employee SET fname='$fname',lname='$lname',gender='$gender',post='$post',age='$age',phone='$phone', email='$email',cid='$cid',status='$status' WHERE empid='$empid' ";
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Employee Details Update Successfully'); 
			location.href='emp_edit1_0.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('error');
				</script>";
		}

?>

