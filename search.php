	<?php

	if (isset($_POST['submit'])){
		$con= NEW Mysqli("localhost","root","","myshop");
		$search=$con->real_escape_string($_POST['search']);
		$res=$con->query("select * from products where cat_id='$search'");
		if ($res->num_rows>0)
		{
			while($row_products=$res->fetch_assoc()){
							
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
							<a href='index.php?add_id=$pro_id'style='float:left'><button style='float:right;'>ADD to Cart</button></a>
							</div>
							";
			}
		}
		else{
			echo "no result";
			
		}
		
	}
?>

<form method="POST">
<input type="TEXT" name="search"/>
<input type="submit" name="submit"/>

</form>