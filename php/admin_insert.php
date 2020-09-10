<!DOCTYPE html>
<html>
<head>
	<title>Add Security Record</title>
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
<form action="admin_insert_1.php" method="post">
	
	<div class="emp_main">	
		<span style="color: white; font-size: 32px;font-family: sans-serif;">Register Security Record</span>
		<div class="admin_center">
			<label style="font-size: 16x; color: white;">Username</label>	
				<input type="text" name="username" placeholder="Enter your Username" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Password </label>	
			     <input type="password" name="password" placeholder="Enter your Password" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 18px; background-color: antiquewhite; color: black;"><br><br>
			<label style="font-size: 16px; color: white;">Firstname </label>	
				<input type="text" name="fname" onkeypress="return onlyAlphabets(event);" placeholder="Enter your first Name" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Lastname </label>	
				<input type="text" name="lname" onkeypress="return onlyAlphabets(event);" placeholder="Enter your Last Name" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			
			<div style="width: 80%;">   
					<label style="font-size: 16px; color: white;">Gender : </label>			
					<input type="radio" name="gender" value="Male" style="margin-left: 18px;"><label style="font-size: 13px; color: white;">Male</label>   
					<input type="radio" name="gender" value="Female"><label style="font-size: 13px; color: white;">Female</label><br>
			</div>
			<label style="font-size: 16px; color: white;">Age </label>	
				<input type="text" name="age" placeholder="Enter your age" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			
			<label style="font-size: 16px; color: white;">Phone No.  </label>
			<input id="phone" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" name="phone" placeholder="Phone No" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 18px; background-color: antiquewhite;"><br><br>
		<label style="font-size: 16px; color: white;">Salary </label>	
				<input type="text" name="salary" placeholder="Enter your salary" required style="width: 70%; height:1px; border-radius: 10px;border:none; margin-left: 22px; padding: 16px;margin-top: 10px; background-color: antiquewhite;"><br><br>
			<label style="font-size: 16px; color: white;">Status </label>	
			<select name="status"  style="width: 70%; height: 30px; border-radius: 10px;border:none; margin-left: 21px; padding: 5px; margin-top: 10px; color: #000;background-color: antiquewhite;">
			<option value="Active">Active</option>
			<option value="Inactive">Inactive</option>
			</select></br></br>
			<label style="font-size: 16px; color: white;">User Type</label>	
			<select name="user" style="width: 70%;  border-radius: 10px;border:none; margin-left: 22px; padding: 8px;margin-top: 10px; color: black;" >
					
					<option value="admin">Admin</option>
					<option value="guard">Guard</option>
			</select><br><br>
		<!--		<div class="box">
					<input type="file" name="image" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
					<label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
				</div>
				
				-->
			
			
			<div class="sign" style="width: 80%; height: 7px; margin-left: 100px;">
					<input type="submit" value="Save Record" style="width: 30%; height:32px; border-radius: 10px;border:none; margin-left: 22px; margin-top: 30px; background-color: antiquewhite; cursor: pointer; color: black;" ><br><br>
			</div>

		</div>
	</div>		
</form>
</body>
</html>