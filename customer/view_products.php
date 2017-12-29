<html>
<head>

</head>

<body>

<?php
	if(isset($_GET['view_products'])){
	?>
	<table border="1" width="100%" cellpadding="10" cellspacing="0" align = "center" >
	
		<tr height="50"align="center">
		<td colspan= "10" > <h2> View All Products </h2> </td>
		</tr>
		
		<tr height ="50">
 		<th> Product ID </th>
		<th> Title of The Product </th>
		<th> Image </th>
		<th> Price </th>
		<th> Total Sold </th>
		<th> Status</th>
		<th> Edit </th>
		<th> Delete </th>
		
		</tr>
		
	<?php 
	$con = mysqli_connect("localhost","root","","myshop");
		
		$con = mysqli_connect("localhost","root","","myshop");
		$get_pro="select * from products";
		$run_pro=mysqli_query($con, $get_pro);
		$i=0;
		
		
		while($row_pro = mysqli_fetch_array($run_pro))
		{
			$p_id=$row_pro['product_id'];
			$p_title = $row_pro['product_title'];
			$p_img =$row_pro['product_img1'];
			$p_price = $row_pro['product_price'];
			$status = $row_pro['status'];
			
			$i++;
		
	?>
		
		
		
		
		

		
		
	<tr height ="100 align="center">
		
		<td colspan=""> <?php echo $i;?></td>
		<td><?php echo $p_title;?></td>
		<td><img src="product_images/<?php echo $p_img;?>"width="60" height="60"</td>
		<td><?php echo $p_price;?></td>
		<td>
		    <?php
				$get_sold="select * from pending_order where product_id='1'";
				$run_sold=mysqli_query($con, $get_sold);
				$count=mysqli_num_rows($run_sold);
				
				echo $count;
		    ?>
		</td>
		
		<td><?php echo $status;?></td>	
		<td><a href="index.php?edit_pro=<?php echo $p_id;?>">Edit</a></td>
		<td><a href="delete_pro.php?delete_pro=<?php echo $p_id; ?>">Delete</td>
		
	</tr>
		<?php } ?>
	
	</table>
	
	<?php } 
	
	
	?>



</body>
</html>