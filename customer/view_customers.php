<html>

<head>

	<body>
	<?php
	if(isset($_GET['view_customers'])){
	?>
		<table border ="1" width = "100%" align="center" cellpadding="10", cellspacing="0">
		
			<tr height="50" align="center">
				<td colspan= "6"> <h2>View All Customers</h2> </td>
			</tr>
			
			<tr height ="50" align="center">
				<th>S.N</th>
				<th>Name</th>
				<th>Email</th>
				<th>Image</th>
				<th>Country</th>
				<th>Delete</th>
			</tr>
		<?php	
			include("includes/db.php");
			$con = mysqli_connect("localhost","root","","myshop");
			$get_c = "select * from customer where customer_";
			
			$run_c = mysqli_query($con, $get_c);
			
			$i = 0;
			
			while($row_c = mysqli_fetch_array($run_c))
			{
				$c_id =$row_c['customer_id'];
				$c_name= $row_c['customer_name'];
				$c_email= $row_c['customer_email'];
				$c_image= $row_c['customer_image'];
				$c_country= $row_c['customer_country'];
				
				$i++;
			
		
		?>
			
			<tr align="center">
				<td><?php echo $i; ?></td>  
				<td><?php echo $c_name; ?></td>  
				<td><?php echo $c_email; ?></td>  
				<td><img src = "customer/customer_photos/6.png" width="60" height="60"/></td>  
				<td><?php echo $c_country; ?></td>  
				<td><a href = "delete_c.php?delete_c=<?php echo $c_id; ?>">Delete</a></td>
			</tr>
			
			<?php } ?>
		
		
		</table>
	<?php } ?>
	
	</body>

</head>

</html>