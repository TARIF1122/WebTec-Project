<?php
@session_start();
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
					
					<?php
						if (!isset($_SESSION['customer_email']))
						{
							echo "<a href='checkout.php'><font size='5' color='red'>Login</font></a>";
							
						}
						else{
							echo "<a href='logout.php'><font size='5' color='red'>Logout</font></a>";
							
						}
						
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
				<form method="POST" >

					  <select id="cmbMake" name="Make" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
						 <option value="0">MOBILE</option>
						 <option value="1">IPHONEE</option>
						 <option value="2">SAMSUNG</option>
						 <option value="3">OPPO</option>
					</select>
					<input type="hidden" name="selected_text" id="selected_text" value="" />
					<input type="submit" name="search" value="Search"/>
				</form>


			
					<br/>
					<img src="images/picture/iphone.png" alt="" width="180px" height="240px">
				</td>
				<td colspan="4" height="150px" align="center" valign="top">
					<?php
						if (!isset($_SESSION['customer_email'])){
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
					<form method="POST" >

					  <select id="cmbMake" name="Make" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
						 <option value="0">COMPUTER</option>
						 <option value="1">IPHONEE</option>
						 <option value="2">SAMSUNG</option>
						 <option value="3">OPPO</option>
					</select>
					<input type="hidden" name="selected_text" id="selected_text" value="" />
					<input type="submit" name="search" value="Search"/>
				</form>
					<br/>
					<img src="images/picture/laptop.jpg" alt="" width="180px" height="240px">
				</td>
				<td colspan="3" valign="top"  align="center" rowspan="2">
				<?php
					
				if (!isset($_SESSION['customer_email']))
				{
					
					include("customer/customer_login.php");
					
				}
				else{
					include("payment_options.php");
					
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
  	