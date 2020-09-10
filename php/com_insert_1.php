
<?php
include('dbconn.php');


$name=$_POST['name'];
$phone=$_POST['phone'];
$hcount=$_POST['hcount'];
$domain=$_POST['domain'];
$sdate=$_POST['sdate'];
$status=$_POST['status'];



$sql="insert into company(cname,phone,head_count,domain,start_date,status) values('$name','$phone','$hcount','$domain','$sdate','$status')"; 
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Company Record Inserted $sdate'); 
				location.href='../index_1.php';
					</script>";	
		}
		else
		{
			echo"<script>alert('Error - entry not Inserted');
				</script>";
		}


?>

