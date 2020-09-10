<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="delete from company where cid='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('Company Record deleted');
		location.href='com_delete1_0.php';
			</script>";
}
else
{
	echo "<script>
		alert('Error - table dependency issue');
		location.href='com_delete1_0.php';
			</script>";
}
?>