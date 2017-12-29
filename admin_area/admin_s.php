<html>
<?php
	if(isset($_GET['admin_s'])){
	?>
<?php

	if (isset($_POST['submit'])){
		$con= NEW Mysqli("localhost","root","","myshop");
		$search=$con->real_escape_string($_POST['search']);
		$res=$con->query("select * from products where cat_id like'$search%' OR brand_id like'$search%' OR product_title like'$search%' OR product_title like'$search%'");
		if ($res->num_rows>0)
		{
			while($row_products=$res->fetch_assoc()){
							
							$pro_id=$row_products['product_id'];
							$pro_title=$row_products['product_title'];
							$pro_desc=$row_products['product_desc'];
							$pro_price=$row_products['product_price'];
							$pro_image=$row_products['product_img1'];
							
			?>				
					<table align="center">
					
						<tr>
							<td><?php echo $pro_id?></td>
							<td><?php echo $pro_title?></td>
							<td><?php echo $pro_price?></td>
							<td><?php echo $pro_image?></td>
							
						</tr>
			<?php }?>
					</table>		
					<?php }?>		
							
			
		
</html>