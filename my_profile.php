
<html>
	<head>
		<title>Admin Panel</title>
	</head>
	<body>
		<table border="1" width="100%" cellpadding="10" cellspacing="0">
			<tr height=50>
				
				<td colspan="5" align = "center"><h2>MY ACCOUNT</h2></td>
				
				
			</tr>
			
				
	
		<tr  height="420px" align="top">
			<td  width="80%" valign="top">
				<table>
					<?php	
			
			$con = mysqli_connect("localhost","root","","myshop");
			$get_c = "select * from customer where customer_id='5'";
			
			$run_c = mysqli_query($con, $get_c);
			
		
			
			while($row_c = mysqli_fetch_array($run_c))
			{
				$c_id =$row_c['customer_id'];
				$c_name= $row_c['customer_name'];
				$c_email= $row_c['customer_email'];
				$c_image= $row_c['customer_image'];
				$c_country= $row_c['customer_country'];
				
			
			
		
		?>
			
			<tr align="center">
				<img src = "../customer/customer_photos/<?php echo $c_image; ?>" width="200" height="260"/>  <br><br> 
				NAME:<?php echo $c_name; ?><br> <br> 
				EMALI:<?php echo $c_email; ?><br><br>  
				COUNTRY:<?php echo $c_country; ?>  <br><br> 
				<a href = "delete_c.php?delete_c=<?php echo $c_id; ?>">Delete</a>
			</tr>
			
			<?php } ?>
				</table>
			</td>
			
			
				<td align="left" valign="top" >
			
				<h2>Manage Content</h2>
				<li><a href = "my_order.php">MY_ORDER</a> <hr></hr> </li>
				<li><a href = "my_profile.php">MY PROFILE</a> <hr></hr> </li>
				<li><a href = "cp.php">CHANGE PASSWORD</a> <hr></hr> </li>
				<li><a href = "cp.php">CHANGE PASSWORD</a> <hr></hr> </li>
				<li><a href = "index.php">LOGOUT</a> <hr></hr> </li>
				
				
				
			
				</td>
				
		</tr>
			
			
		</table>
	</body>
</html>

