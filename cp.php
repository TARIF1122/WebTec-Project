
<html>
	<head>
		<title>Admin Panel</title>
	</head>
	<body>
		<table border="1" width="100%" cellpadding="10" cellspacing="0">
			<tr height=50>
				
				<td colspan="5" align = "center"><h2>MY ACCOUNT</h2></td>
				
				
			</tr>
			
				
	
			<tr  height="420px" align="top">
			<td  width="80%" valign="top">
				<table>
						<?php
 session_start();
?>
<form action = "" method="Post">

	<table width="500" align="center">
	
	<tr align ="center">
	<td><h2>Change your password:</h2> </td>
	</tr>
	
	<tr>
	<td align ="right">Enter Current Password: </td>
	<td><input type="password" name= "old_pass" required/></td>
	</tr>
	
	<tr>
	<td align ="right">Enter New Password:</td>
	<td><input type="password" name= "new_pass" required/></td>
	</tr>

	<tr>
	<td align ="right">Enter New Password Again: </td>
	<td><input type="password" name= "new_pass_again" required/></td>
	</tr>
	
	<tr align="center">
	<td colspan="4"><input type="submit" name="change_pass" value="Change Password"> </td>
	</tr>
	

</form>
</table>
<?php
include("includes/db.php");
$con = mysqli_connect("localhost","root","","myshop");
$c = $_SESSION['customer_email'];

if(isset($POST['change_pass']))
{
	$old_pass=$_POST['old_pass'];
	$new_pass=$_POST['new_pass'];
	$new_pass_again=$_POST['new_pass_again'];
	
	$get_real_pass = "select * from customer where customer_pass ='$old_pass'";
	$run_real_pass = mysqli_query($con, $get_real_pass);
	
	$check_pass = mysqli_num_rows($run_real_pass);
	
	
	if($check_pass==0)
	{
		echo"<script>alart('Your current password is not valid, try again')</script>";
		exit();
		
	}
	if($new_pass!=$new_pass_again)
	{
		echo"<script>alart('New password did not match, try again')</script>";
		exit();
		
	}
	else{
		$update_pass="update customer set customer_pass= '$new_pass' where customer_email='$c'";
		$run_pass= mysqli_query($con, $update_pass);
		
		echo"<script>alart('Your password has been successfully changed')</script>";
		echo"<script>window.open('my_account.php','_self')</script>";
		
	}
	
	
	
}




?>
				
			</td>
			
			
				<td align="left" valign="top" >
			
				<h2>Manage Content</h2>
				<li><a href = "my_order.php">MY_ORDER</a> <hr></hr> </li>
				<li><a href = "my_profile.php">MY PROFILE</a> <hr></hr> </li>
				<li><a href = "cp.php">CHANGE PASSWORD</a> <hr></hr> </li>
				<li><a href = "cp.php">CHANGE PASSWORD</a> <hr></hr> </li>
				<li><a href = "index.php">LOGOUT</a> <hr></hr> </li>
				
				
				
			
				</td>
				
			</tr>
			
			
		</table>
	</body>
</html>

