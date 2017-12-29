<?php
	include("includes/db.php");
	$con = mysqli_connect("localhost","root","","myshop");
?>
<html>
<head>
    <title>Home</title>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
		tinymce.init({selector:'textarea'});
	</script>
</head>
<body >
<font size="2" face="Consolas" >
	<form method="post" action="insert_product.php" enctype="multipart/form-data">
    <table align="center"  width="90%" cellspacing="0" border="1" cellpadding="0" > 
			<tr>
			
				<td colspan="3" align="center">
					
					<h2>INSERT NEW PRODUCT:</h2><br/>
					PRODUCT NAME: <input type="text" name="product_title" required><br/>
					
					SELECT PRODUCT CATEGORY:<select  name="product_cat" >
						<option value="" ><b>COMPUTER</b></font></option>
						<?php
							$get_cats="select * from categories";
							$run_cats=mysqli_query($con,$get_cats);
							while($row_cats=mysqli_fetch_array($run_cats)){
								$cat_id=$row_cats['cat_id'];
								$cat_title=$row_cats['cat_title'];
								
								echo"<option value='$cat_id'>$cat_title</option>";					
							}
						?>
							
					</select><br/>
					SELECT BRAND:<select  name="product_brand">
						<option value="" ><b>Select Brand</b></font></option>
						<?php
							$get_brands="select * from brands";
							$run_brands=mysqli_query($con,$get_brands);
							while($row_cats=mysqli_fetch_array($run_brands)){
								$brand_id=$row_cats['brand_id'];
								$brand_title=$row_cats['brand_title'];
								
								echo"<option value='$brand_id'>$brand_title</option>";					
							}
						?>
							
					</select><br/>
					
					UPLOAD IMAGE 1:<input type="file" name="product_img1"required><br/>
					UPLOAD IMAGE 2:<input type="file" name="product_img2"><br/>
					UPLOAD IMAGE 3:<input type="file" name="product_img3"><br/>
					PRICE:<input type="text" name="product_price" required><br/>
					DECRIPTION:<textarea name="product_desc" cols="20 row="10"></textarea><br/>
					PRODUCT KEY:<input type="text" name="product_keyword" size="50"required><br/>
					<input type="submit" name="insert_product" value="Insert Product"><br/>
					
				
				</td>	
				
			</tr>
			
				
			<tr>
				<td align="center" colspan="5">Copyright&copy; 2017</td>
			</tr>
			
		
	</table>
	
  	</body>
</html>
<?php
if(isset($_POST['insert_product'])){
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$product_brand=$_POST['product_brand'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$status='on';
	$product_keywords=$_POST['product_keyword'];
	
	
	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
	
		$temp_name1=$_FILES['product_img1']['tmp_name'];
		$temp_name2=$_FILES['product_img2']['tmp_name'];
		$temp_name3=$_FILES['product_img3']['tmp_name'];
		
		
		
			
			move_uploaded_file($temp_name1,"product_images/$product_img1");
			move_uploaded_file($temp_name2,"product_images/$product_img2");
			move_uploaded_file($temp_name3,"product_images/$product_img3");
			
			$insert_product="insert into products(cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,status,product_keyword)
									values('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$status','$product_keywords')";
			$run_product=mysqli_query($con,$insert_product);
			if($run_product){
				
				echo"<script>alert('product insert successfully')</script>";
				echo"<script>window.open('index.php?insert_product','_self')</script>";
			
		}
	
}

?>