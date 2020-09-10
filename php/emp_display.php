<head>
<title>Display Employe Details</title>
<style>
	body
	{
		text-align: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	table
	{

		border-collapse: collapse;
		border:none;
	}
	td
	{
		text-align: center;
		height: 50px;
		width: 150px;
		color: white;
	}
	img
	{
		border: none;
	}
	th
	{
		font-family: verdana;
		font-size: 23px;
		color: skyblue;
	}

</style>
</head>
<body>
<div class="emp_main">	
		<span style="color: white; font-size: 32px;font-family: sans-serif;">View Employee Details</span></div>
<?php
include('dbconn.php');

$sql="Select * from employee";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> Empid</th>";
		echo "<th> Fname</th>";
		echo "<th> Lname</th>";
		echo "<th> gender</th>";
		echo "<th> Post</th>";
		echo "<th> Age</th>";
		echo "<th> Phone</th>";
		echo "<th> Email</th>";
		echo "<th> Cid</th>";
		echo "<th> Status</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[empid]</td>";
		echo "<td> $fetch[fname]</td>";
		echo "<td> $fetch[lname]</td>";
		echo "<td> $fetch[Gender]</td>";
		echo "<td> $fetch[post]</td>";
		echo "<td> $fetch[age]</td>";
		echo "<td> $fetch[Phone]</td>";
		echo "<td> $fetch[email]</td>";
		echo "<td> $fetch[cid]</td>";
		echo "<td> $fetch[status]</td>";
	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="">
<!--<input type="button" id="p3" value="Print" onclick="print12()" /> -->
</form>
<script type="text/javascript">
	function print12()
	{
		w=document.getElementById('p3');
		w.style.display='none';
		window.print();
		w.style.display='block';

	}
</script>
</body>