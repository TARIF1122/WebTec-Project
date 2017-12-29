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
					
				getdell();
			
				
				
			?>
					
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