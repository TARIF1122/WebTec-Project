<?php
@session_start();
	include("includes/db.php");
	$con = mysqli_connect("localhost","root","","myshop");
	//include("functions/functions.php");
?>

<html>
<head></head>
<body>
	
	<?php
	$ip=getRealIpAddr();
	$get_customer="select * from customer where customer_ip='$ip'";
	
	$run_customer=mysqli_query($con,$get_customer);
	$customer=mysqli_fetch_array($run_customer);
	$c_id=$customer['customer_id'];
	
	
	?>
	


</body>

</html>
<h2>PAYMENT OPTIONS FOR YOU</h2>
<b>Pay With</b><img src="images/paypal.jpg" width="200" height="80"><b>Or<a href="order.php?c_id=<?php echo $c_id;?>">PAY OFFLINE</a></b>
