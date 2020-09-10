
<?php
include('dbconn.php');


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$pmeet=$_POST['pmeet'];
$date=$_POST['date'];
$entry=$_POST['entry'];
$purpose=$_POST['purpose'];
$sid=$_POST['sid'];




$sql="insert into visitor(fname,lname,gender,phone,person_meet,date,entry,exits,Purpose,sid) values('$fname','$lname','$gender','$phone','$pmeet','$date','$entry','00:00:00','$purpose','$sid')"; 
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Visitor Entry Done # $fname $lname # Purpose - $purpose'); 
				location.href='../dashboard.php';
					</script>";	
		}
		else
		{
			echo"<script>alert('Error - entry not Inserted');
				</script>";
		}


?>

