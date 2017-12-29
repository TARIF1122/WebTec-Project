<?php
session_start();
	include("includes/db.php");
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
				<form action="customer_register.php" method="post" enctype="multipart/form-data">
				<table align="center" valign="top">
				<tr>
					<td><h2>CREATE AN ACCOUNT</h2></td>
				</tr>
				<tr>
					<td align="right"><b>Customer Name:</b></td>
					<td><input type="text" name="c_name" required></td>
				</tr>
				
				<tr>
					<td align="right"><b>Customer Email:</b></td>
					<td><input type="text" name="c_email" required></td>
				</tr>
				<tr>
					<td align="right"><b>Customer password:</b></td>
					<td><input type="password" name="c_pass" required></td>
				</tr>
				<tr>
					<td align="right"><b>Customer Country:</b></td>
					<td>
						<select name="c_country">
							<option>Select a Country</option>
							<option>Bangladesh</option>
							<option>India</option>
							<option>Nepal</option>
							<option>China</option>
							<option>USA</option>
							<option>UK</option>
							<option>CANADA</option>
						
						</select>
					</td>
				</tr>
				<tr>
					<td align="right"><b>Customer city:</b></td>
					<td><input type="text" name="c_city" required></td>
					
				</tr>
				<tr>
					<td align="right"><b>Customer mobile no:</b></td>
					<td><input type="text" name="c_contact" required></td>
				</tr>
				<tr>
					<td align="right"><b>Customer Address:</b></td>
					<td><input type="text" name="c_address" required></td>
				</tr>
				<tr>
					<td align="right"><b>Customer image:</b></td>
					<td><input type="file" name="c_image" required><br><br><input type="submit" name="register" value="Submit" /></td><br>
					
				</tr>
				
				
				</table>	
				</form>
				
					
				</td>	
				
		</tr>
			<tr height="250px" >
				<td colspan="2" align="center" width="50px" valign="top">
					<select onchange="la(this.value)">
						<option  disabled selected >T.V.</option>
						<option value="sony.php">Sony</option>
						<option value="lg.php">LG</option>
						<option value="tosiba.php">Tosiba</option>
					</select>|
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
					</body>
</html>  	
<?php
 if (isset($_POST['register']))
 {
	 $c_name=$_POST['c_name'];
	 $c_email=$_POST['c_email'];
	 $c_pass=$_POST['c_pass'];
	 $c_country=$_POST['c_country'];
	 $c_city=$_POST['c_city'];
	 $c_contact=$_POST['c_contact'];
	 $c_address=$_POST['c_address'];
	 $c_image=$_FILES['c_image']['name'];
	 $c_image_tmp=$_FILES['c_image']['tmp_name'];
	 $c_ip=getRealIpAddr();
	
	move_uploaded_file($c_image_tmp,"customer/customer_photos/$c_image");
	$insert_customer="insert into customer(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
	
		$run_customer=mysqli_query($con,$insert_customer);
		
		$sel_cart="select * from cart where ip_add='$c_ip'";
		$run_cart=mysqli_query($con,$sel_cart);
		$check_cart=mysqli_num_rows($run_cart);
		
		if ($check_cart>0)
		{
			$_SESSION['customer_email']=$c_email;
			echo"<script>alert('Account Created Successfully,Thank you!')</script>";
			echo"<script>window.open('checkout.php','_self')</script>";
			
		}
		else{
			$_SESSION['customer_email']=$c_email;
			echo"<script>alert('Account Created Successfully,Thank you')</script>";
			echo"<script>window.open('index.php','_self')</script>";
			
		}
 }

?>
  	