
<?php
include 'config.php';
?>
<!Doctype Webpage>
<html>
<head> 
	<title>Return Book</title>
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
	  <p style="text-align:center;" ><u>Date Info</u></p><br>
	  <form action="date_info_ad.php" method="post" class="form">
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
	<th>User Id</th>
	<th>Book Id</th>
	<th>Issue Date</th>
	<th>Return Date</th>

</tr><br>

<?php
if(isset($_POST['check'])){
	

	$query2= "select * from user_info ";
	$sqldata2= mysqli_query($con,$query2);
				
	while($row=mysqli_fetch_array($sqldata2)){
		?>
		<tr>
			<td><?php echo $row['user_id'];?></td>
			<td><?php echo $row['book_id'];?></td>
			<td><?php echo $row['issue_date'];?></td>
			<td><?php echo $row['return_date'];?></td>
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