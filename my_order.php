<?php
session_start();
	include("includes/db.php");
	$con = mysqli_connect("localhost","root","","myshop");
	include("functions/functions.php");
?>
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
			<td   valign="top">
					
				<form action="my_order.php" method="post" enctype="multipart/form-data"> 
					<table >
						<tr align="center">
							<td>Remove</td>
							<td>Product</td>
							<td>Quantity</td>
							<td>Total Price</td>
						</tr>
		<?php
		          
					$ip_add=getRealIpAddr();
					$total=0;
					$sel_price="select * from cart where ip_add='$ip_add'";
					
					$run_price=mysqli_query($con,$sel_price);
					while($record=mysqli_fetch_array($run_price)){
						$pro_id=$record['p_id'];
						$pro_price="select * from products where product_id='$pro_id'";
						$run_pro_price=mysqli_query($con,$pro_price);
						
					while($p_price=mysqli_fetch_array($run_pro_price)){
						$product_price=array($p_price['product_price']);
						$product_title=$p_price['product_title'];
						$product_image=$p_price['product_img1'];
						$only_price=$p_price['product_price'];
						
						$values=array_sum($product_price);
						$total+=$values;
					
					
						
					
					
				
	    ?>
						<tr>
							<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"></td>
							<td><?php echo $product_title;?><br><img src="admin_area/product_images/<?php echo $product_image;?>"height="80" width="80"></td>
							<td><input type="text" name="qty" value="" size="3"/></td>
							<?php
								if (isset($_POST['update'])){
									$qty=$_POST['qty'];
									$insert_qty="update cart set qty='$qty' where ip_add='$ip_add'";
									$run_qty=mysqli_query($con,$insert_qty);
									$total=$total*$qty;
								}
							?>
							<td><?php echo $only_price;?></td>
						
						</tr>
						<?php }} ?>
						<tr align="right">
							<td>sub total</td>
							<td><?php echo $total;?></td>
							
						</tr> <tr>
						
							
						</tr>
						<tr>
							<td><input type="submit" name="update" value="update cart"></td>
							<td><input type="submit" name="continue" value="Continue Shopping"></td>
							<td><button><a href="checkout.php">check out</a></button></td>
						</tr>
					
				</form>
				<?php
				function updatecart(){
					global $con;
					if (isset($_POST['update'])){
							foreach($_POST['remove'] as $remove_id)
							{
								$delete_products="delete from cart where p_id='$remove_id'";
								$run_delete=mysqli_query($con,$delete_products);
								if($run_delete){
									echo "<script>window.open('my_order.php','_self')</script>";
									
								}
							}
							
						
					}
					if (isset($_POST['continue'])){
								
								echo "<script>window.open('index.php','_self')</script>";
							}
				}
				echo @$up_cart =updatecart();
				?>
				
			</table>
			</td>
			
			
				<td valign="top">
			
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

