<head>
<title>Display Company Details</title>
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
		<span style="color: white; font-size: 32px;font-family: sans-serif;">View Company Details</span></div>
<?php
include('dbconn.php');

$sql="Select * from company";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> Cid</th>";
		echo "<th> Company</th>";
		echo "<th> Phone</th>";
		echo "<th> Head count</th>";
		echo "<th> Domain</th>";
		echo "<th> Start date</th>";
		echo "<th> status</th>";
	
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[cid]</td>";
		echo "<td> $fetch[cname]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[head_count]</td>";
		echo "<td> $fetch[domain]</td>";
		echo "<td> $fetch[start_date]</td>";
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