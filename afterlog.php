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
					<a href="testshopno.php"><img valign="top" src="images/picture/HB2.jpg" height="50px" width="80px"></a>
				</td>
				<td align="center">
					<font size="10" color="green">HUMMING</font><font size="5" color="green">bird</font>
				</td>
				<td width="10">
					<a href="index.php"><input type="button" value="Back to Home"></a>
				</td>
				
			
			</tr>
			
					
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
					<font color="orange" size="50">Manage Account :</font>
				</td>
			</tr>
			<tr height="200" align="center">
				<td valign="top" colspan="4">
		<fieldset>	
       <legend>LOGIN</legend>		
	    <form method = "post">
		
		<input type="text" name="uname" value="username" required="required" /><br><br>
		<input type="password" name="name" value="Password" required="required" /><br><br>
		<input type="submit" name="login" value="Login"/>
		
		</form>
		</fieldset>
		<?php
		if (isset($_POST['login'])){
			$log=$_POST['name'];
			$uname=$_POST['uname'];
			if ($uname=='1' and $log=='2')
			{
				echo"<script>window.open('admin_area/index.php','_self')</script>";
				if(session_id() == "")session_start();
				$_SESSION["loggedIn"] = true;
				
			}
			else if ($uname=='2' and $log=='1')
			{
				echo"<script>window.open('my_account.php','_self')</script>";
				if(session_id() == "")session_start();
				$_SESSION["loggedIn"] = true;
			}
			else{
				
				echo"<script>alert('please login..!')</script>";
			}
		}
		?>
			    <td>
			</tr>
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