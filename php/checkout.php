<!DOCTYPE html>
<html>
<head>
	<title>Visitor Check Out</title>
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
       </script>
	<style>
		.main
		{
			text-align: center;
		}
		body
		{
			margin:0px;
	background:-webkit-linear-gradient(#384e72, #4b648c ,#60789e,#4b648c, #384e72);
		}
	</style>
</head>
<body>
<form action="checkout_1.php" method="post">
 	<div class="main">
        <h2>First Name</h2>
        <input name="fname" required type="text" placeholder="Please enter visitor's name" maxlength="15" style="width: 300px; height: 12px; border-radius: 10px; padding: 10px;"><br><br>                
        <input type="submit" value="Get Record" style="width: 150px; height: 25px; border-radius: 10px; color: black; ">                
    </div>
</form>
</body>
</html>

