<?php
include 'config.php';
?>
<!Doctype Webpage>
<html>
<head> <link rel="stylesheet" href="style.css"></link>
<title>User Login</title>
</head>
<body class="b">
<h2 class="h">Onlin Library <br>Management</h2>
<div class="d"> 
<form action="user_login.php" method="post" class="form">
<center><img src="image/user_s.png" ></img></center>
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
<input  class="lg" type="submit" name="login" value="Log-In"></input><br>
<button class ="btn"><a href="login_section.php">Back To Home</a></button>

</form>
 
<?php
    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass= $_POST['password'];
		
		$check = "select*from user_login where email='$email' AND password ='$pass'";
		$check_query= mysqli_query($con,$check);
		
		if($check_query){
			if(mysqli_num_rows($check_query) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='user_section.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('user_login.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('You are not registered  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}
?>
<p style="text-align:center;" >
				<span>Not A Member ? </span><a class="link" href="register.php">Register Now</a>
		</p>

</div>
</body>
</html>