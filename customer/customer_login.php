<?php
//session_start();	
include("includes/db.php");

$con = mysqli_connect("localhost","root","","myshop");


?>

<h2>LOGIN OR REGISTER<h2>
<form action="checkout.php" method="post">
<b>YOUR EMAIL :</b><input type="text" name="c_email" value="enter your email"/><br>
<b>YOUR PASSWORD :</b><input type="password" name="c_pass" value="enter your password"/><br>
<a href="forgot_pass.php">Forgot PASSWORD</a><br>
<input type="submit" name="c_login" value="login"/>
<a href="customer_register.php"><h2>NEW REGISTER HERE</h2></a>
</form>
<?php
	if (isset($_POST['c_login']))
	{
		
		$customer_email=$_REQUEST['c_email'];
		$customer_pass=$_REQUEST['c_pass'];
		if ($customer_email=='admin@gmail.com')
		{$con = mysqli_connect("localhost","root","","myshop");
			$admin="select * from admins where admin_pass='".$customer_pass."' and admin_email='".$customer_email."'";
			$run_admin=mysqli_query($con,$admin);
			//$check_admin=mysqli_num_rows($run_admin);
			while($row=mysqli_fetch_assoc($run_admin))
			{
			if ($customer_pass==$row['admin_pass'])
			{
				
				echo "<script>window.open('../final project/admin_area/index.php','_self')</script>";
			}
			else{
				
				echo "<script>alert('password or email add is not correct, try again !')</script>";
			
			}
			}
			
		}
		else{
		$sel_customer="select * from customer where customer_email='$customer_email'AND customer_pass='$customer_pass'";
		$run_customer=mysqli_query($con,$sel_customer);
		$check_customer=mysqli_num_rows($run_customer);
		$get_ip=getRealIpAddr();
		
		$sel_cart="select * from cart where ip_add='$get_ip'";
		
		$run_cart=mysqli_query($con,$sel_cart);
		
		$check_cart=mysqli_num_rows($run_cart);
		if ($check_customer==0){
			echo "<script>alert('password or email add is not correct, try again !')</script>";
			exit();
			
		}
		if ($check_customer==1 AND $check_cart==0)
		{
			$_SESSION['customer_email']=$customer_email;
			
			echo "<script>window.open('customer/my_account.php','_self')</script>";
		}
		else{
			$_SESSION['customer_email']=$customer_email;
			include ("payment_options.php");
			
		}
		}
		
		
	}

?>