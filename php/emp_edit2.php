<?php
include('dbconn.php');
$id=$_GET['id'];
$_SESSION['id']=$id;
$sql="Select * from employee where empid='$id'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Details</title>
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<style type="text/css">
		body
		{
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0px;
			background-attachment: fixed;
			
		}
	</style>
</head>
<body>
<form action="emp_update.php" method="post">
	<div class="admin_transparent">
	<div class="emp_main">	
		<span style="color: white; font-size: 32px;font-family: sans-serif;">Edit Employee Details</span>
		<div class="admin_center">
		<label style="font-size: 16px; color: white;">First Name  </label>	
			<input type="text"  onkeypress="return onlyAlphabets(event);" name="fname" value="<?php echo $fetch[1];?>"  required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Last Name  </label>	
			<input type="text"  onkeypress="return onlyAlphabets(event);" name="lname" value="<?php echo $fetch[2];?>"  required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<div style="width: 76%;">   
			<label style="font-size: 16px; color: white;">Gender  </label>			
			<input <?php if($fetch[3]=="Male"){echo "checked";} ?> type="radio" name="gender" value="Male" style="margin-left: 18px;">
			<label style="font-size: 13px; color: white;">Male</label>   
			<input <?php if($fetch[3]=="Female"){echo "checked";} ?> type="radio" name="gender" value="Female">
			<label style="font-size: 13px; color: white;">Female</label><br>
			</div>
			<label style="font-size: 16px; color: white;">Designation  </label>	
			<input type="text"  onkeypress="return onlyAlphabets(event);" name="post" value="<?php echo $fetch[4];?>"  required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Age  </label>
			<input type="text" name="age"  value="<?php echo $fetch[5];?>" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Phone No.  </label>
			<input id="phone" type="text" pattern="\d{10}"  value="<?php echo $fetch[6];?>" onkeypress="phoneno()" maxlength="10" name="phone"  required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 18px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Email-Id  </label>
			<input type="text" name="email"  value="<?php echo $fetch[7];?>" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite; color: black;"><br><br>
			<label style="font-size: 16px; color: white;">Company  </label>
			<select name="cid"  value="<?php echo $fetch[8];?>" style="width: 70%; height: 30px; border-radius: 10px;border:none; margin-left: 21px; padding: 5px; margin-top: 10px; color: #000;background-color: antiquewhite;">
			<?php                          
			include ('dbconn.php');
			$sql="Select cid,cname from company";
			$query=mysqli_query($db,$sql);
							
				while($fetch=mysqli_fetch_array($query)) {
			?>
			<option value="<?php echo $fetch[0]?>"><?php echo $fetch[1]?></option>

			<?php
			}
			?>
			</select>
			<br><br>
			<label style="font-size: 16px; color: white;">Status  </label>
			<select name="status"   style="width: 70%; height: 30px; border-radius: 10px;border:none; margin-left: 21px; padding: 5px; margin-top: 10px; color: #000;background-color: antiquewhite;">
			<option value="Active" <?php if($fetch[3]=="Male"){echo "checked";} ?>>Active</option>
			<option value="Inactive" <?php if($fetch[3]=="Male"){echo "checked";} ?>>Inactive</option>
			</select>
			
			
			<div class="sign" style="width: 80%; height: 7px; margin-left: 100px;">
					<input type="submit" value="Update" style="width: 30%; height:32px; border-radius: 10px;border:none; margin-left: 22px; margin-top: 30px; background-color: antiquewhite; cursor: pointer; color: black;" ><br><br>
			</div>
		</div>
			
	</div>
	</div>
</form>
</body>
</html>