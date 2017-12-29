<?php
@session_start();
	//include("includes/db.php");
	$con = mysqli_connect("localhost","root","","myshop");
	include("functions/functions.php");
?>

<html>
<body>
	<table>
		<tr>
		
			<td colspan="2">
			<?php
			if(isset($_SESSION['customer_email']))
			{
				echo "<b>Welcome:". "</b>&nbsp;" . $_SESSION['customer_email'];
				
			}
			
		
		?>
		<a href="../index.php">Go to Home</a>
		<br>
			<h1>Manage Account <h1></td>
			
			<?php 
			if(isset($_SESSION['customer_email']))
			{
				echo"<span style='display:none;'><li><a href='../customer_register.php'>Sign Up</a></li>";
				
			
		    
			}
			else
			{
				echo "<li><a href = '../customer_register.php'>Sign Up</a></li>";
			}
		
			?>
		
		</tr>
		<tr>
			<td width="80%">
			<?php getDefault(); ?>
			<?php
			if (isset($_GET['my_orders']))
			{
				include("my_orders.php");
			}
			if (isset($_GET['edit_account']))
			{
				include("edit_account.php");
			}
			if (isset($_GET['change_pass']))
			{
				include("change_pass.php");
			}
			if (isset($_GET['delete_account']))
			{
				include("delete_c.php");
			}
			
			?>
			</td>
			<td valign="top">
				<h2 align = "center">Manage Your Account Here </h2>
				<?php
            $con = mysqli_connect("localhost","root","","myshop");
			$customer_session = $_SESSION['customer_email'];
			
			$get_customer_pic = "select * from customer where customer_email='$customer_session'";
			
			$run_customer = mysqli_query($con, $get_customer_pic);
			
			$row_customer = mysqli_fetch_array($run_customer);
			
			$customer_pic = $row_customer['customer_image'];
			
			echo "<img src='customer_photos/$customer_pic' width='150' height='150'>";
			
				
		?>
	
				<ul>
				<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>
				<li><a href="../logout.php">Logout</a></li>
				</ul>
			</td> 
		</tr>
	</table>
	
	
				
			
		

</body>

</html>