<?php
	
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
					
					function getiphone()
					{
						global $db;
						
						$get_products="select * from products where brand_id=4";
						
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
					function getsamsung()
					{
						global $db;
						
						$get_products="select * from products where brand_id=5";
						
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
					function getoppo()
					{
						global $db;
						
						$get_products="select * from products where brand_id=6";
						
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
						
						
function getdell()
					{
						global $db;
						
						$get_products="select * from products where brand_id=2";
						
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
					
function gethp()
					{
						global $db;
						
						$get_products="select * from products where brand_id=1";
						
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
					
	function getasus()
					{
						global $db;
						
						$get_products="select * from products where brand_id=11";
						
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
					
					
function getlg()
					{
						global $db;
						
						$get_products="select * from products where brand_id=7";
						
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
					
	function getsony()
					{
						global $db;
						
						$get_products="select * from products where brand_id=8";
						
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
					
					
	function gettosiba()
					{
						global $db;
						
						$get_products="select * from products where brand_id=9";
						
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
		
	
