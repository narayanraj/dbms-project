<?php


$fname=$_POST['fname'];

include('dbconn.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');

$currenttime = date('H:i:s');

$sql="select max(vid) from visitor where fname='$fname' and date='$date'";
$query1=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query1);
$p= $fetch[0];
/*
$sql="select * from inquery where Phone='$phone' and Date='$date' and Id='$p'";
$query=mysqli_query($db,$sql);
$count=mysqli_num_rows($query);
if($count<0)
{
	echo "<script>
		alert('phone number exist');
	</script>";
}
else
{
	echo "<script>
		alert('not exist');
	</script>";
} */

$sql="UPDATE visitor SET exits='$currenttime' where fname='$fname' and date='$date' and vid='$p'";
$query=mysqli_query($db,$sql);
if($query)
{
	echo "<script>
		alert('Visitor ID - $p ($fname) # Out-time Updated $currenttime  # Date - $date');
		location.href='../dashboard.php';
		</script>";
}
else
{
	echo "<script>
		alert('Error during Update Out-time');
		location.href='checkout.php';
		</script>";
}

?>