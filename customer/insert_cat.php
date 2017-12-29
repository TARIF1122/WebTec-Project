<html>
<head>
<body>
	<form action = "" method ="post">
		<b>Insert New Category</b>
		<input type ="text" name ="cat_title"/>
		<input type="submit" name="insert_cat" value="Insert Category"/>
		
	
	</form>
	
	
	<?php
		include("includes/db.php");
		
		if(isset($_POST['insert_cat']))
		{
			$cat_title = $_POST['cat_title'];
			
			$insert_cat = "insert into categories (cat_title) values ('$cat_title')";
			
			$run_cat =mysqli_query($con, $insert_cat);
			
			if($run_cat)
			{
				echo "<script>alart('New category has been inserted')</script>";
				echo "<script>window.open('index.php?view_cats','_self')</script>";
			}
		}
		
	
	?>
	

</body>

</head>

</html>