<?php

include('dbconn.php');

$sql="Select max(empid) from employee";
$query=mysqli_query($db,$sql);
$fetch1=mysqli_fetch_array($query);

$max_empid = '$fetch1';
?>


<?php
include('dbconn.php');


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$post=$_POST['post'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$cid=$_POST['cid'];
$status=$_POST['status'];




$sql="insert into employee(fname,lname,gender,post,age,phone,email,cid,status) values('$fname','$lname','$gender','$post','$age','$phone','$email','$cid','$status')"; 
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Employee Record Inserted'); 
				location.href='../index_1.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('Error - entry not Inserted');
				</script>";
		}


?>

