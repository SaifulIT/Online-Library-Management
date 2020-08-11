<?php
include 'config.php';
?>
 
<!Doctype Webpage>
<html>
<head>
	<title>Search Book</title>
	<link rel="stylesheet" href="style.css">
</head>
<body><img src="image/admin_s.png"style="float:right" height="80px" width="150px">
	<h2 class="h">Online Library<br> Management</h2>
	<nav class="n" >
<ul class="ul">
<li class="li"><a href="add_book_ad.php"> Add Books</a></li>
<li class="li"><a href="date_info_ad.php">Date Info</a></li>
<li class="li"><a href="view_order_ad.php">View Order</a></li>
<li class="li"><a href="book_search_ad.php">Book Search</a></li>
<li class="li"><a class="b" href="admin_login.php">Log Out</a></li>

</ul>
</nav>
<div class="d" > 
      <form action="book_search_ad.php" method="post" class="form" >
	  <p style="text-align:center;" ><u>Search Books</u></p>
	  <div class="row">
<div class="col-25"><label class="l">Book ID:</label></div>
<div class="col-50"><input type="number" name="book_id" placeholder="Search..." required class="input">
</div>
</div>
<input type="submit" name="search" value="Search here" class="s"><br>
		
		
</form>
<center>
<table>
	<style >
	body{
		background-color: lightblue;
	}
	table,th,td{
	background-color: lightblue;
	border: 1px solid black;
	width:500px;
	}
	</style>
<tr>
	<th>book Id</th>
	<th>title</th>
	<th>author name</th>
	<th>cost</th>
	<th>quantity</th>
</tr><br>

<?php
if(isset($_POST['search'])){
	
	$bookid = $_POST['book_id'];
	$query2= "select * from books where book_id='$bookid'";
	$sqldata2= mysqli_query($con,$query2);
				
	while($row=mysqli_fetch_array($sqldata2)){
		?>
		<tr>
			<td><?php echo $row['book_id'];?></td>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['author_name'];?></td>
			<td><?php echo $row['cost'];?></td>
			<td><?php echo $row['quantity'];?></td>
		</tr>
		<?php
	}
}
?>
	</table>
	</center>
		</div>
	
	</body>
	</html>
