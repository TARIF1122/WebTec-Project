
<html>
	<head>
		<title>Admin Panel</title>
	</head>
	<body>
		<table border="1" width="100%" cellpadding="10" cellspacing="0">
			<tr height=50>
				
				<td colspan="5" align = "center"><h2>Admin Panel</h2></td>
				
				
			</tr>
			
				
	
			<tr  height="420px" align="top">
			<td  width="80%" valign="top">
				<?php
include("includes/db.php");

if(isset($_GET['insert_product']))
{
	include("insert_product.php");
	
}

if(isset($_GET['view_products']))
{
	include("view_products.php");
	
}

if(isset($_GET['edit_pro']))
{
	include("edit_pro.php");
	
}
if(isset($_GET['insert_cat']))
{
	include("insert_cat.php");
	
}

if(isset($_GET['view_cats']))
{
	include("view_cats.php");
	
}

if(isset($_GET['edit_cat']))
{
	include("edit_cat.php");
	
}

if(isset($_GET['insert_brand']))
{
	include("insert_brand.php");
	
}
if(isset($_GET['view_brands']))
{
	include("view_brands.php");
	
}

if(isset($_GET['edit_brand']))
{
	include("edit_brand.php");
	
}

if(isset($_GET['view_customers']))
{
	include("view_customers.php");
	
}

if(isset($_GET['view_orders']))
{
	include("view_orders.php");
	
}
if(isset($_GET['view_payments']))
{
	include("view_payments.php");
	
}


?>
			</td>
			
			
				<td align="left" valign="top" >
			
				<h2>Manage Content</h2>
				<li><a href = "index.php?insert_product">Insert New Product</a> <hr></hr> </li>
				<li><a href = "index.php?view_products">View All Products</a> <hr></hr> </li>
				<li><a href = "index.php?insert_cat">Insert New Category</a> <hr></hr> </li>
				<li><a href = "index.php?view_cats">View All Categories</a> <hr></hr> </li>
				<li><a href = "index.php?insert_brand">Insert New Brand</a> <hr></hr> </li>
				<li><a href = "index.php?view_brands">View All Brands</a> <hr></hr> </li>
				<li><a href = "index.php?view_customers">View Customers</a> <hr></hr> </li>
				<li><a href = "index.php?view_orders">View Orders</a> <hr></hr> </li>
				<li><a href = "index.php?view_payments">View Payments</a> <hr></hr> </li>
				<li><form><a href = "logout.php">Admin Logout</a></li>
				
			
				</td>
				
			</tr>
			
			
		</table>
	</body>
</html>

