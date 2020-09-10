<head>
<title>Display Security Details</title>
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
		font-size: 18px;
		color: skyblue;
		text-align: center;
	}

</style>
</head>
<body>
<div class="emp_main">	
		<span style="color: white; font-size: 32px;font-family: sans-serif;">View Security Details</span></div>
<?php
include('dbconn.php');

$sql="Select * from security";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> sid </th>";
		echo "<th> user name </th>";
		echo "<th> password </th>";
		echo "<th> fname </th>";
		echo "<th> lname </th>";
		echo "<th> gender </th>";
		echo "<th> Age </th>";
		echo "<th> phone </th>";
		echo "<th> salary </th>";
		echo "<th> status </th>";
		echo "<th> user </th>";
	
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
	    echo "<td> $fetch[sid]</td>";
		echo "<td> $fetch[username]</td>";
		echo "<td> $fetch[password]</td>";
		echo "<td> $fetch[fname]</td>";
		echo "<td> $fetch[lname]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[Age]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[salary]</td>";
		echo "<td> $fetch[status]</td>";
		echo "<td> $fetch[user]</td>";

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