<html>
<head>
<body>
	<table border="2" width = "100%" align="center" >
	
		<tr>
			<td colspan="4" align="center"> <h2>View All Categories<h2> </td>
		
		</tr>
		
		<tr>
			<th>Category ID</th>
			<th>Category Title</th>
			
			<th>Edit</th>
			<th>Delete</th>
			
		</tr>
		
		<?php
		include("includes/db.php");
		
		$get_cats="select * from categories";
		$run_cats = mysqli_query($con, $get_cats);
		
		while($row_cats=mysqli_fetch_array($run_cats))
		{
			$cat_id = $row_cats['cat_id'];
			$cat_title = $row_cats['cat_title'];
			
		
		?>
		
		<tr align ="center">
			<td><?php echo $cat_id;?></td>
			<td><?php echo $cat_title;?></td>
			<td><a href="index.php?edit_cat=<?php echo $cat_id;?>">Edit</a></td>
			<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
		</tr>
		
		<?php } ?>
	
	</table>

</body>
</head>

</html>
