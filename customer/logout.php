<?php
	session_start();
	
	session_destroy();
	
	echo "<script>window.open('login.php?logout= You seccessfully logged out','_self')</script>";

?>