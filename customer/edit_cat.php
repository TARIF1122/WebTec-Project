<?php
	$con = mysqli_connect("localhost","root","","myshop");
		$con = mysqli_connect("localhost","root","","myshop");
		if(isset($_GETT['edit_cat']))
		{
			$cat_id = $_GET['edit_cat'];
			
			$edit_cat = "select * from categories where cat_id='$cat_id'";
			
			$run_edit =mysqli_query($con, $edit_cat);
			
			$row_edit = mysqli_fetch_array($run_edit);
			
			$c = $row_edit['cat_id'];
			
			$cat_title =$row_edit['cat_title'];
			
		}
		
	
	?>

<html>
<head>
<body>
	<form action = "" method ="post" >
		<b>Edit this Category</b>
		<input type ="text" name ="cat_title" value="<?php echo $cat_title; ?>"/>
		<input type="submit" name="update_cat" value="Update Category"/>
		
	
	</form>
	
	
</body>

</head>

</html>

<?php
if(isset($_POST['update_cat']))
{
	$cat_title =$_POST['cat_title'];
	
	$update_cat = "update categories set cat_title = '$cat_title' where cat_id = '$c'";
	
	$run_update =mysqli_query($con, $update_cat);
	
	if($update_cat)
	{
		echo "<script>alert('Category has been updated')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
		
	}
	
}


?>



