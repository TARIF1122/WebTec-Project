<html>

<head></head>

	<body>
	<?php
	if(isset($_GET['view_orders'])){
	?>
		<table border ="1" width = "100%" align="center" cellpadding="10", cellspacing="0">
		
			<tr height="50" align="center">
				<td colspan= "7"> <h2>View All Orders</h2> </td>
			</tr>
			
			<tr height ="50" align="center">
				<th>Order No</th>
				<th>Customer</th>
				<th>Invoice</th>
				<th>Product ID</th>
				<th>QTY</th>
				<th>Status</th>
				<th>Delete</th>
			</tr>
		<?php	
			
			$con = mysqli_connect("localhost","root","","myshop");
			$get_orders = "select * from pending_order";
			
			$run_orders = mysqli_query($con, $get_orders);
			
			$i = 0;
			
			while($row_orders = mysqli_fetch_array($run_orders))
			{
				
				$order_id= $row_orders['order_id'];
				$c_id= $row_orders['customer_id'];
				$invoice = $row_orders['invoice_no'];
				$p_id= $row_orders['product_id'];
				$qty= $row_orders['qty'];
				$status = $row_orders['order_status'];
				
				$i++;
			
		
		?>
			
			<tr align="center">
				<td><?php echo $i; ?></td>  
				<td>
					<?php
						$get_customer = "select * from customer where customer_id='$c_id'";
						$run_customer = mysqli_query($con, $get_customer);
						$row_customer = mysqli_fetch_array($run_customer);
						
						$customer_email = $row_customer['customer_email'];
						
						echo $customer_email;
					?>
				
				</td>  
				<td><?php echo $invoice; ?></td>  
				<td><?php echo $p_id; ?></td>  
				<td><?php echo $qty; ?></td>  
				
				<td>
				<?php 
				
					if($status=='Pending')
					{
						echo $status = 'Pending';
	
					}
					
					else
					{
						echo $status = 'Complete';
					}
				
				
				?>
				</td> 
				<td><a href = "delete_order.php?delete_order=<?php echo $order_id; ?>">Delete</a></td>
			</tr>
			
			<?php }?>
		
		
		</table>
		<?php } ?>
