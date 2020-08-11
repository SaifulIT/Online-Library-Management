
<?php
include 'config.php';
?> 
<!Doctype Webpage>
<html>
<head>   
	<title>Search Book</title>
	<link rel="stylesheet" href="style.css">
	</head>
<body><img src="image/user_s.png"style="float:right" height="80px" width="150px">
	<h2 class="h">Online Library<br> Management</h2>
	<nav class="n" >
<ul class="ul">
<li class="li"><a href="show_book_u.php">Show Books</a></li>
<li class="li"><a href="view_date_info_u.php">View Date Info</a></li>
<li class="li"><a href="view_order_u.php">View Order Info</a></li>
<li class="li"><a href="place_order_u.php">Place Order</a></li>
<li class="li"><a class="b" href="admin_login.php">Log Out</a></li>

</ul>
</nav>
<div class="d" > 
      <form action="place_order_u.php" method="post" class="form" >
	  <p align="center" style="underline"><u>Place_order</u></p>
	  <div class="row">
<div class="col-25"><label class="l">Book Id:</label></div>
<div class="col-50"><select   name="book_id" class="sl">
  <option value="">----Select----</option>
  <option value="101">101</option>
  <option value="102">102</option>
  <option value="103">103</option>
</select>
</div>
</div>
	  <div class="row">
<div class="col-25"><label class="l">Book name:</label></div>
<div class="col-50"><select  name="book_name"  class="sl">
  <option  value="">----Select----</option>
  <option value="C++">c++</option>
  <option value="Java">java</option>
  <option value="Python">python</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Author name:</label></div>
<div class="col-50"><select  name="author_name"  class="sl">
  <option value="">----Select----</option>
  <option value="Tamim shariar">Tamim shariar</option>
  <option value="Anusul Islam">Anusul Islam</option>
  <option value="Masud rana">Masud rana</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Quantity:</label></div>
<div class="col-50"><select name="quantity" class="sl">
  <option   value="">----Select----</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Cost:</label></div>
<div class="col-50"><select  name="cost" class="sl">
  <option  value="">----Select----</option>
  <option value="100">100</option>
  <option value="200">200</option>
  <option value="300">300</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Date:</label></div>
<div class="col-50"><select  name="order_date"  class="sl">
  <option value="">----Select----</option>
  <option value="2019-11-02">2019-11-02</option>
  <option value="2019-11-03">2019-11-03</option>
  <option value="2019-11-04">2019-11-04</option>
</select>
</div>
</div>
<input type="submit" name="order" value="Order" class="s"><br>
		</form>
		<?php
		if(isset($_POST['order'])){
	
			$bookid = $_POST['book_id'];
			$bookname = $_POST['book_name'];
			$aname = $_POST['author_name'];
			$quantity = $_POST['quantity'];
			$cost = $_POST['cost'];
			$date = $_POST['order_date'];
				
			$query= "select*from order_info where book_id='$bookid'";
			$query_run= mysqli_query($con,$query);
			if($query_run){
				
				if(mysqli_num_rows($query_run) >0){
					
					echo "
			<script>
			alert('This Book ALready ordered ');
			window.location.href='place_order_u.php';
			</script>
			";
					
					
				}else{
					
		$insertion= "insert into order_info values('$bookid','$bookname','$aname','$quantity','$cost','$date')";
		
				   
					$insertion_run = mysqli_query($con,$insertion);
					
					if($insertion_run ){
						
						echo "
			<script>
			alert('Order Book Successfully ');
			window.location.href='place_order_u.php';
			</script>
			";
						
					}else{
						
							echo "
			<script>
			alert('Don't Book Ordered  ');
			window.location.href='place_order_u.php';
			</script>
			";
					}
					
					
				}
				
				
				
			}else{
				echo "
			<script>
			alert('Database Problem');
			window.location.href='place_order_u.php';
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