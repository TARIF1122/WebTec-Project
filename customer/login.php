<?php
session_start();
include("includes/db.php");
?>

<html>
<head>
	<body>
		<h1>Admin Login</h1>
		<form method = "post">
		
		<input type="text" name="admin_email" value="Email" required="required" />
		<input type="password" name="admin_name" value="Password" required="required" />
		<input type="submit" name="login" value="Admin Login"/>
		
		</form>
		
		<h2><?php echo $_GET['logout']; ?></h2>
		
	</body>


</head>

</html>

<?php
	if(isset($_POST['login']))
	{
		$user_email = $_POST['admin_email'];
		$user_pass = $_POST['admin_name'];
		
		$sel_admin = "select * from admins where admin_email='$user_email' 
		AND admin_pass='$user_pass'";
		
		$run_admin = mysqli_query($con, $sel_admin);
		$check_admin = mysqli_num_rows($run_admin);
		
		if($check_admin==1)
		{
			$_SESSION['admin_email'] = $user_email;
			
			echo "<script>window.open('index.php?logged_in= You successfully Logged in!','_self')</script>";
		}
		else
		{
			echo "<script>alart('Admin Email or Password is incorrect, try again')</script>";
			
		}
		
	}



?>