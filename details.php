
<?php
session_start();
	//include("includes/db.php");
	$con = mysqli_connect("localhost","root","","myshop");
	include("functions/functions.php");
?>
<?php 
	cart();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
</head>
<body >
<font size="2" face="Consolas" >
    <table align="center"  width="90%" cellspacing="0" border="1" cellpadding="0" > 
			<tr>
				<td  align="left">
					<a href="index.php"><img valign="top" src="images/picture/HB2.jpg" height="50px" width="80px"></a>
				</td>
				<td width="30px">
					<font size="10" color="green">HUMMING</font><font size="5" color="green">bird</font>
				</td>
				<td align="center" colspan="2">
					<form method="post" action="results.php" >
					<input type="text" name="search" size="40px" placeholder="Sreach a Product"/>
					<input type="submit" value="search" name="submit"/>
					</form>
				</td>
				<td align="center" colspan="2">
					<select onchange="la(this.value)">
						<option  disabled selected >Menu</option>
						<option value="customer_register.php">About</option>
						<option value="condition.php">Conditions</option>
						<option value="storesinfo.php">Stores info</option>
					</select>|
					<a href="index.php"><font size="5" color="red">Home</font></a> |
					<a href="afterlog.php"><font size="5" color="red">Login</font></a> |
					<?php
						/*if (!isset($_SESSION['customer_eamil']))
						{
							echo "<a href='afterlog.php'><font size='5' color='red'>Login</font></a>";
							
						}
						else{
							echo "<a href='logoutt.php'>LOGOUT</a>";
							
						}*/
						
					?>
				    |
					<a href="customer_register.php"><font size="5" color="red">Registration</font></a>|
					<a href="Registration.php"><font size="5" color="red">My Account</font></a> |
					<a href="cart.php"><font size="5" color="red">Go to Cart</font></a>
					<br>
					<h2>- Items:-<?php items();?>   ||  Total price:<?php total_price();?></h2><h2></h2>
					
					
				</td>
			</tr>
			<tr height="200px" >
				<td colspan="2" align="center" width="50px" valign="top">
				
				<select onchange="la(this.value)">
						<option  disabled selected >MOBILE</option>
						<option value="iphone.php">iPhone</option>
						<option value="samsung.php">Samsung</option>
						<option value="oppo.php">Oppo</option>
					</select>|
				


			
					<br/>
					<img src="images/picture/iphone.png" alt="" width="180px" height="240px">
				</td>
				<td colspan="4" height="150px" align="center" valign="top">
					<?php
						if (!isset($_SESSION['customer_eamil'])){
							echo "<h1>Welcom To HUMMING world..<h1>";
						}
						else{
							echo"<b>WELCOME:".$_SESSION['customer_email']."</b>";
							
						}

						?>

					<div>
						<img class="images/picture1" src="images/picture1/0.jpg" width="900px" height="200px">
						<img class="images/picture1" src="images/picture1/1.jpg" width="900px" height="200px">
						<img class="images/picture1" src="images/picture1/2.jpg" width="900px" height="200px">
						<img class="images/picture1" src="images/picture1/3.jpg" width="900px" height="200px">
						<img class="images/picture1" src="images/picture1/4.jpg" width="900px" height="200px">
						<img class="images/picture1" src="images/picture1/5.jpg" width="900px" height="200px">
					</div>

					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
						var i;
						var x = document.getElementsByClassName("images/picture1");
						for (i = 0; i < x.length; i++) {
						   x[i].style.display = "none";  
						}
						myIndex++;
						if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
						setTimeout(carousel, 3000); 
					}
					</script>
					<br/>
					<font color="orange" size="50">WHATS NEW ???....</font>
				</td>
			</tr>
			<tr >
				<td colspan="2" align="center" width="50px" valign="top">
				<select onchange="la(this.value)">
						<option  disabled selected >COMPUTERS</option>
						<option value="dell.php">DELL</option>
						<option value="hp.php">HP</option>
						<option value="asus.php">ASUS</option>
					</select>|

					<br/>
					<img src="images/picture/laptop.jpg" alt="" width="180px" height="240px">
				</td>
				<td colspan="3" valign="top"  rowspan="2">
				<?php
					
				//here codoing
						if(isset($_GET['pro_id'])){
							$product_id=$_GET['pro_id'];
						$get_products="select * from products where product_id='$product_id'";
						
						$run_products= mysqli_query($db,$get_products);
						
						while($row_products=mysqli_fetch_array($run_products)){
							
							$pro_id=$row_products['product_id'];
							$pro_title=$row_products['product_title'];
							$pro_desc=$row_products['product_desc'];
							$pro_price=$row_products['product_price'];
							$pro_image=$row_products['product_img1'];
							$pro_image2=$row_products['product_img2'];
							$pro_image3=$row_products['product_img3'];
							
							
							echo  "
							<div style='float:left'>
							<id='single_product'>
							<h3 >$pro_title</h3>
							<img align='left' src='admin_area/product_images/$pro_image' width='180' height='300' >
							<img align='left' src='admin_area/product_images/$pro_image2' width='180' height='300' >
							<img align='left' src='admin_area/product_images/$pro_image3' width='180' height='300' ><br>
							<p><b>price: $pro_price</b></p>
							<h6>$pro_desc</h6>
							<a href='index.php?pro_id=$pro_id'style='float:left'>Go back</a>
							<a href='index.php?add_id=$pro_id'style='float:left'><button style='float:right;'>ADD to Cart</button></a>
							</div>
						";
						}
						}
				
				?>
					
				</td>	
				
			</tr>
			<tr height="250px" >
				<td colspan="2" align="center" width="50px" valign="top">
					<select onchange="la(this.value)">
						<option size="10px" disabled selected ><b>TELEVISION</b></font></option>
						<option  value="">LG</option>
						<option value="">SONY</option>
						<option value="">TOSIBA</option>
				
					</select>
					<br/>
					<img src="images/picture/TV_BAR.jpg" alt="" width="240px" height="240px">
				</td>
				
			</tr >
			<tr>
				<td align="center" colspan="5">Copyright&copy; 2017</td>
			</tr>
			
		
	</table>
	<script>
						function la(src)
						{
							window.location=src;
						}
					</script>
  	