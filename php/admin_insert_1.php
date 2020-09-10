
<?php
include('dbconn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$salary=$_POST['salary'];
$status=$_POST['status'];
$status=$_POST['user'];


$sql="insert into security(username,password,fname,lname,gender,age,phone,salary,status,user) values('$username','$password','$fname','$lname','$gender','$age','$phone','$salary','$status','$user')"; 
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Security Record Inserted'); 
				location.href='../index_1.php';
					</script>";	
		}
		else
		{
			echo"<script>alert('Error - entry not Inserted');
				</script>";
		}


?>

