<?php
	
	$db = mysqli_connect("localhost","root","","myshop");
?>
<?php

	$db=mysqli_connect("localhost","root","","myshop");
	//function for getting the ip address
	function getRealIpAddr()
	{
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
			//check ip form share internet
			{
				$ip=$_SERVER['HTTP_CLIENT_IP'];
				
			}
			elseif(!empty($_SERVER['HTTP_X_FORWARD_FOR']))
			{
				$ip=$_SERVER['HTTP_X_FORWARD_FOR'];
				
			}
			else{
				$ip=$_SERVER['REMOTE_ADDR'];
			}
	       return $ip;
	}
	
	function getDefault()
	{
		global $db;
		if(!isset($_GET['my_orders'])){
				if(!isset($_GET['edit_account'])){
					if(!isset($_GET['change_pass'])){
						if(!isset($_GET['delete_account'])){
		
		$c = $_SESSION['customer_email'];
		
		$get_c = "select * from customer where customer_email = '$c'";
		
		$run_c = mysqli_query($db, $get_c);
		
		$row_c = mysqli_fetch_array[$run_c];
		
			$customer_id = $row_c['customer_id'];
			
			
							
					$get_orders = "select * from customer_order where customer_id='$customer_id' AND order_status='pending'";
					
					$run_orders = mysqli_query($db, $get_orders);
					
					$count_orders = mysqli_num_rows($run_orders);
					
					if($count_orders>0)
					{
						echo"<h1>Important!</h1>
						<h2>You have ($count_orders) pending orders</h2>
						<h3>Please see your orders details by clicking this <a href='my_account.php?my_orders'>Links</a>
						<br> Or you can <a href='pay_offline.php'>Pay Offline</a></h3>";
						
					}
					
					else{
						echo"<h1>Important!</h1>;
						<h2>You have no pending orders</h2>
						<h3>You can see your orders details by clicking this <a href='my_account.php?my_orders'>Links</a>
						</h3>";
					}
						
			
		
	}
	}
	}
	}
		
		
	}
	
	//creating the cart
	function cart(){
		if (isset($_GET['add_cart'])){
			global $db;
			$ip_add=getRealIpAddr();
			$p_id=$_GET['add_cart'];
			$check_pro="select * from cart where ip_add='$ip_add'AND p_id='$p_id'";
			
			$run_check=mysqli_query($db,$check_pro);
			if(mysqli_num_rows($run_check)>0){
				
				echo "";
			}
			else{
				$q="insert into cart(p_id,ip_add) values ('$p_id','$ip_add')";
				$run_q=mysqli_query($db,$q);
				echo"<script>window.open('index.php','_self')</script>";
				
				
			}
		}
		
	}
	//total imteam
	
	function items(){
		if (isset($_GET['add_cart'])){
			global $db;
			$ip_add=getRealIpAddr();
			$get_items="select * from cart where ip_add='$ip_add'";
			
			$run_items=mysqli_query($db,$get_items);
			$count_items=mysqli_num_rows($run_items);
			
		}
		else{
			$ip_add=getRealIpAddr();
			global $db;
			$get_items="select * from cart where ip_add='$ip_add'";
			
			$run_items=mysqli_query($db,$get_items);
			$count_items=mysqli_num_rows($run_items);
			
		}
		echo $count_items;
		
		
	}
	// getting the total price
	
	function total_price(){
		global $db;
		$ip_add=getRealIpAddr();
		$total=0;
		$sel_price="select * from cart where ip_add='$ip_add'";
		
		$run_price=mysqli_query($db,$sel_price);
		while($record=mysqli_fetch_array($run_price)){
			$pro_id=$record['p_id'];
			$pro_price="select * from products where product_id='$pro_id'";
			$run_pro_price=mysqli_query($db,$pro_price);
			
		while($p_price=mysqli_fetch_array($run_pro_price)){
			$product_price=array($p_price['product_price']);
			
			$values=array_sum($product_price);
			$total+=$values;
		}
			
			
		}
		echo $total;
		
		
	}
	
	
	//product get
	function getPro()
					{
						global $db;
						
						$get_products="select * from products ORDER BY RAND() LIMIT 0,6";
						
						$run_products= mysqli_query($db,$get_products);
						
						while($row_products=mysqli_fetch_array($run_products)){
							
							$pro_id=$row_products['product_id'];
							$pro_title=$row_products['product_title'];
							$pro_desc=$row_products['product_desc'];
							$pro_price=$row_products['product_price'];
							$pro_image=$row_products['product_img1'];
							
							
							echo  "
							<div style='float:left'>
							<id='single_product'>
							<h3 >$pro_title</h3>
							<img align='left' src='admin_area/product_images/$pro_image' width='180' height='300' ><br>
							<p><b>price: $pro_price</b></p>
							<a href='details.php?pro_id=$pro_id'style='float:left'>DETAILS</a>
							<a href='index.php?add_cart=$pro_id'style='float:left'><button style='float:right;'>ADD to Cart</button></a>
							</div>
							";
						}
					}
	function getCatPro()
					{
						global $db;
						
						$get_products="select * from products where cat_id='1' ";
						
						$run_products= mysqli_query($db,$get_products);
						
						while($row_products=mysqli_fetch_array($run_products)){
							
							$pro_id=$row_products['product_id'];
							$pro_title=$row_products['product_title'];
							$pro_desc=$row_products['product_desc'];
							$pro_price=$row_products['product_price'];
							$pro_image=$row_products['product_img1'];
							
							
							echo  "
							<div style='float:left'>
							<id='single_product'>
							<h3 >$pro_title</h3>
							<img align='left' src='admin_area/product_images/$pro_image' width='180' height='300' ><br>
							<p><b>price: $pro_price</b></p>
							<a href='details.php?pro_id=$pro_id'style='float:left'>DETAILS</a>
							<a href='index.php?add_cart=$pro_id'style='float:left'><button style='float:right;'>ADD to Cart</button></a>
							</div>
							";
						}
					}
	function getCats()
					{
						global $db;
							$get_cats="select * from categories where cat_id='$cat_id'";
							$run_cats=mysqli_query($db,$get_cats);
							while($row_cats=mysqli_fetch_array($run_cats)){
								$cat_id=$row_cats['cat_id'];
								$cat_title=$row_cats['cat_title'];
								
							echo"<option value='$cat_id'>$cat_title</option>";					
							}
					}
							
						
	
?>