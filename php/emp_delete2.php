<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="delete from employee where empid='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('Employee Record deleted');
		location.href='emp_delete1_0.php';
			</script>";
}
else
{
	echo "Error";
}
?>