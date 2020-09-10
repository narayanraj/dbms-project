<head>
<title>Delete Employee Record</title>
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
		text-align: center;
	}

</style>
</head>
<body>

<div class="emp_main">	
		<span style="color: white; font-size: 32px;font-family: sans-serif;">Select Employee Record - Deletion</span></div>

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
		echo "<th> Delete</th>";
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
		echo "<td> <a href='emp_delete2.php?id=$fetch[0]'>Delete</a></td>";

	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--<input type="submit" value="Back" /> -->
</form>


</body>