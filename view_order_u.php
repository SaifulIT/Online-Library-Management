
<?php
include 'config.php';
?> 
<!Doctype Webpage>
<html>
<head>
	<title>View Order</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body><img src="image/user_s.png"style="float:right" height="80px" width="150px">
	<h2 class="h" >Online Library<br> Management</h2>
	<nav class="n" >
<ul class="ul">
<li class="li"><a href="show_book_u.php">Show Books</a></li>
<li class="li"><a href="view_date_info_u.php">View Date Info</a></li>
<li class="li"><a href="view_order_u.php">View Order Info</a></li>
<li class="li"><a href="place_order_u.php">Place Order</a></li>
<li class="li"><a class="b" href="admin_login.php" >Log Out</a></li>

</ul>
</nav>
<div class="d" > 
	  <p style="text-align:center;" ><u>Order Details</u></p><br>
	  <form action="view_order_u.php" method="post" class="form">
	  <input type="submit" name="check" value="Check" class="s"><br>
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
	<th>Book Id</th>
	<th>Author name</th>
	<th>Cost</th>
	<th>Quantity</th>
	<th>Order Date</th>

</tr><br>

<?php
if(isset($_POST['check'])){
	

	$query2= "select book_id,author_name,cost,quantity,order_date, from order_info ";
	$sqldata2= mysqli_query($con,$query2);
				
	while($row=mysqli_fetch_array($sqldata2)){
		?>
		<tr>
			
			<td><?php echo $row['book_id'];?></td>
			<td><?php echo $row['author_name'];?></td>
			<td><?php echo $row['cost'];?></td>
			<td><?php echo $row['quantity'];?></td>
			<td><?php echo $row['order_date'];?></td>
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