<?php

include 'config.php';
?>
<!Doctype Webpage>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="style.css" >
</head>
<body>
	<h2 class="h">Online Library<br> Management</h2>
   <div class="d" > 
      <form action="register.php" method="post" class="form" >
	  <p align="center" font="bold">Registration</p>
<div class="row">
<div class="col-25"><label class="l">Username:</label></div>
<div class="col-50"><input type="text" name="username" placeholder="Username" required class="input"> </input>
</div>
</div>
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
<div class="row">
<div class="col-25"><label class="l">Confirm Password:</label></div>
<div class="col-50"><input type="password" name="confirm_password" placeholder="Confirm your password" required class="input"> </input>
</div>
</div>
		<input type="submit" name="signup" value="SignUp" class="s"> </input><br>
		
		<p style="text-align:center;" >
				<span>Already Register ? </span><a class="link" href="user_login.php">Sign In</a>
		</p>
		
		</form>
		<?php

if(isset($_POST['signup'])){
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$cpass = $_POST['confirm_password'];
	
	
	
	if($pass==$cpass){
		
		$query= "select*from user_login where email='$email'";
		$query_run= mysqli_query($con,$query);
		if($query_run){
			
			if(mysqli_num_rows($query_run) >0){
				
				echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";
				
				
			}else{
				
	$insertion= "insert into user_login values('$name','$email','$pass')";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Registration Successful ');
		window.location.href='user_login.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='register.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='register.php';
		</script>
		";
			
		}
		
		
	}
	else{
		echo "
		<script>
		alert('Password & Confirm Password not match');
		window.location.href='register.php';
		</script>
		";
	}
	
	
}
else{
	
	
}
?>
	
		
	</div>
	
</body>
</html>