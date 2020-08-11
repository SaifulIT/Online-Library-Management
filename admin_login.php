<?php

include 'config.php';
?>
<!Doctype Webpage>
<html>
<head> <link rel="stylesheet" href="style.css"></link>
<title>admin_login</title>
</head>
<body class="b">
<h2 class="h">Online Library<br> Management</h2>
<div class="d"> 

<form action="admin_login.php" method="post" class="form">
<center><img src="image/admin_s.png"></img></center>
<div class="row">
<div class="col-25"><label class="l">Email:</label></div>
<div class="col-50"><input type="email" name="email" placeholder="Enter your email" required class="input"> </input>
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Password:</label></div>
<div class="col-50"><input type="password" name="password" placeholder="Enter your password" required class="input"> </input>
</div>
</div>
<input class="lg" type="submit" name="login" value="Log-In"></input><br>
<button class ="btn"><a href="login_section.php">Back To Home</a></button>
</form>
<?php
    if(isset($_POST['login'])){
		
		$email1= $_POST['email'];
		$pass1= $_POST['password'];
		
		$check1 = "select*from admin_login where email='$email1' AND password ='$pass1'";
		$check_query1= mysqli_query($con,$check1);
		
		if($check_query1){
			if(mysqli_num_rows($check_query1) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='admin_section.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('admin_login.php');
				</script>
				";
			}
			
			
		}else{
			
			
				
		}
		
		
		
	}else{
		
		
	}
?>

</div>
</body>
</html>