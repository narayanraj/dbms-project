<!DOCTYPE html>
<html>
<head>
	<title>Add Company details</title>
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<script>        
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
        function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }
       </script>
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
<form action="vis_insert_1.php" method="post">
	
	<div class="emp_main">	
		<span style="color: white; font-size: 28px;font-family: sans-serif;">Issue Visitor Pass</span>
		<div class="admin_center">
			<label style="font-size: 16px; color: white;">First Name  </label>	
			<input type="text"  onkeypress="return onlyAlphabets(event);" name="fname" placeholder="Enter first Name" required style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Last Name  </label>	
			<input type="text"  onkeypress="return onlyAlphabets(event);" name="lname" placeholder="Enter last Name" required style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<div style="width: 76%;">   
			<label style="font-size: 16px; color: white;">Gender  </label>			
			<input type="radio" name="gender" value="Male" style="margin-left: 18px;">
			<label style="font-size: 13px; color: white;">Male</label>   
			<input type="radio" name="gender" value="Female">
			<label style="font-size: 13px; color: white;">Female</label><br>
			</div>
			<label style="font-size: 16px; color: white;">Phone No.  </label>
			<input id="phone" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" name="phone" placeholder="Phone No" required style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 18px; background-color: antiquewhite;"><br><br>
		   
		   <label style="font-size: 16px; color: white;">Person to Meet &nbsp </label>
			<select name="pmeet"  style="width: 45%; height: 30px; border-radius: 10px;border:none; margin-left: 21px; padding: 5px; margin-top: 10px; color: #000;background-color: antiquewhite;">
			<?php       
			date_default_timezone_set('Asia/Calcutta');
			
			$currentDate = date('yy-m-d');
			$currenttime = date('H:i:s');
			

			include ('dbconn.php');
			$sql="Select empid,fname,lname from employee";
			$query=mysqli_query($db,$sql);
		
							
				while($fetch=mysqli_fetch_array($query)) {
			?>
			<option value="<?php echo $fetch[0]?>"> <?php echo $fetch[1]?> &nbsp <?php echo $fetch[2]?></option>

			<?php
			}
			?>
			</select>
			<br><br>
				<label style="font-size: 16px; color: white;">Purpose &nbsp &nbsp </label>
			<select name="purpose"   style="width: 50%; height: 30px; border-radius: 10px;border:none; margin-left: 21px; padding: 5px; margin-top: 10px; color: #000;background-color: antiquewhite;">
			<option  value="interview">Interview</option>
			<option  value="meeting">Meeting</option>
			<option  value="delivery">delivery</option>
			<option  value="marketing">marketing</option>			
			<option  value="other">other</option>	
			</select></br></br>
			
			<label style="font-size: 16px; color: white;">Date &nbsp &nbsp&nbsp &nbsp </label>	
			<input type="text"   value="<?php  echo $currentDate ?> " name="date" readonly  style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			
			<label style="font-size: 16px; color: white;">Entry time  </label>	
			<input type="text"   value="<?php  echo $currenttime ?> " name="entry" readonly  style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Exit time &nbsp</label>	
			<input type="text"  name="exit"   readonly style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			
			
			<?php
			include ('dbconn.php');
			$user=$_SESSION['user'];

			$sql="select sid from security where username='$user'";
			$query=mysqli_query($db,$sql);
			$fetch9=mysqli_fetch_array($query);
			?>
			<label style="font-size: 16px; color: white;">Security-Id </label>	
			<input type="text"  name="sid" readonly value="<?php  echo $fetch9[0] ?>" required style="width: 50%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			
	
				
			<div class="sign" style="width: 80%; height: 7px; margin-left: 100px;">
					<input type="submit" value="Record Insert" style="width: 30%; height:32px; border-radius: 10px;border:none; margin-left: 22px; margin-top: 30px; background-color: antiquewhite; cursor: pointer; color: black;" ><br><br>
			</div>

		</div>
	</div>		
</form>
</body>
</html>