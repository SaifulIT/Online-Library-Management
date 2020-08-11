
<?php

include 'config.php';
?>
<!Doctype Webpage>
<html>
<head>
	<title>Add Book</title>
	<link rel="stylesheet" href="style.css">
</head>
<body><img src="image/admin_s.png"style="float:right" height="80px" width="150px">
	<h2 class="h">Online Library<br> Management</h2>
	<nav class="n" >
<ul class="ul">
<li class="li"><a href="add_book_ad.php">Add Books</a></li>
<li class="li"><a href="date_info_ad.php">Date Info</a></li>
<li class="li"><a href="view_order_ad.php">View Order</a></li>
<li class="li"><a href="book_search_ad.php">Book Search</a></li>
<li class="li"><a class="b" href="admin_login.php">Log Out</a></li>

</ul>
</nav>

   <div class="d" > 
      <form action="add_book_ad.php" method="post" class="form" >
	  <p style="text-align:center;" ><u>Add Books</u></p>
	  <div class="row">
<div class="col-25"><label class="l">Book ID:</label></div>
<div class="col-50"><input type="number" name="book_id" placeholder="Enter Book ID" required class="input">
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Title:</label></div>
<div class="col-50"><input type="text" name="title" placeholder="Title Of Book" required class="input">
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Author Name:</label></div>
<div class="col-50"><input type="text" name="author_name" placeholder="Enter Author Name" required class="input">
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Cost:</label></div>
<div class="col-50"><input type="float-number" name="cost" placeholder="Enter cost of book" required class="input">
</div>
</div>
<div class="row">
<div class="col-25"><label class="l">Quantity:</label></div>
<div class="col-50"><input type="number" name="quantity" placeholder="Number of books" required class="input">
</div>
</div>
		<input type="submit" name="add"  value="Add" class="s"><br>
		
		
		</form>
		<?php
		if(isset($_POST['add'])){
	
			$bookid = $_POST['book_id'];
			$title = $_POST['title'];
			$aname = $_POST['author_name'];
			$cost = $_POST['cost'];
			$quantity = $_POST['quantity'];

			
			
			
		
				
				$query= "select*from books where book_id='$bookid'";
				$query_run= mysqli_query($con,$query);
				if($query_run){
					
					if(mysqli_num_rows($query_run) >0){
						
						echo "
				<script>
				alert('This Book ALready added ');
				window.location.href='add_book_ad.php';
				</script>
				";
						
						
					}else{
						
			$insertion= "insert into books values('$bookid','$title','$aname','$cost','$quantity')";
			
					   
						$insertion_run = mysqli_query($con,$insertion);
						
						if($insertion_run ){
							
							echo "
				<script>
				alert('Book Successful Added ');
				window.location.href='add_book_ad.php';
				</script>
				";
							
						}else{
							
								echo "
				<script>
				alert('Don't Book Addeed  ');
				window.location.href='add_book_ad.php';
				</script>
				";
						}
						
						
					}
					
					
					
				}else{
					echo "
				<script>
				alert('Database Problem');
				window.location.href='add_book_ad.php';
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