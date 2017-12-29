<html>

<head>

	<body>
	<?php
	if(isset($_GET['view_payments'])){
	?>
		<table border ="1" width = "100%" align="center" cellpadding="10", cellspacing="0">
		
			<tr height="50" align="center">
				<td colspan= "7"> <h2>View All Payments</h2> </td>
			</tr>
			
			<tr height ="50" align="center">
				<th>Payment No</th>
				<th>Invoice No</th>
				<th>Amount Paid</th>
				<th>Payment Method</th>
				<th>Ref No</th>
				<th>Code</th>
				<th>Payment Date</th>
			</tr>
		<?php	
			include("includes/db.php");
			
			$get_payments = "select * from payment";
			
			$run_payments = mysqli_query($con, $get_payments);
			
			$i = 0;
			
			while($row_payments = mysqli_fetch_array($run_payments))
			{
				$payment_id =$row_payments['payments_id'];
				$invoice= $row_payments['invoice_no'];
				$amount = $row_payments['amount'];
				$payment_m = $row_payments['payment_mode'];
				$ref_no = $row_payments['ref_no'];
				$code = $row_payments['code'];
				$date = $row_payments['payment_date'];
				
				$i++;
		
		
		      ?>
			
			<tr align="center">
				<td><?php echo $i; ?></td>   
				<td><?php echo $invoice; ?></td>  
				<td><?php echo $amount; ?></td>  
				<td><?php echo $payment_m; ?></td> 
				<td><?php echo $ref_no; ?></td>
				<td><?php echo $code; ?></td>
				<td><?php echo $date; ?></td>
			</tr>
			
			<?php } ?>
		
		
		</table>
		<?php } ?>
	
	
