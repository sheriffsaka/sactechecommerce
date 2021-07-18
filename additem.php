<?php
    require('db.php');
	session_start();

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$product_name = $_POST['product_name'];
		$price = $_POST['price'];
		$description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $date_add = date("Y-m-d H-i-s");

		// include database connection file
		include_once("db.php");

		// Insert item data into table
		$result = mysqli_query($con, "INSERT INTO product(product_name, price, pdescription, quantity, date_add) VALUES('$product_name','$price','$description','$quantity','$date_add')");

        if($result){
            echo "Item added successfully. <a href='dashboard.php'>View Products</a>";
        }else{
            echo "Something went wrong. <a href='additem.php'>Try Again</a>";
        }

		// Show message when item added
		//echo "Item added successfully. <a href='index.php'>View Products</a>";
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SacTech Mart | Add Item</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
    

    <section class="">
    
    <form class="form" action="additem.php" method="POST">
        <h4 class="center">Add a Product / Item</h4>
        <label>Product Name:</label>
        <input type="text" name="product_name" required = "required"><p>
        <label>Product Price:</label>
        <input type="text" name="price" required = "required"><p>
        <label>Product Description:</label>
        <input type="text" name="description" required = "required"><p>
        <label>Product Quantity:</label>
        <input type="text" name="quantity" required = "required"><p>
        <div class="center">
            <input type="submit" name="submit" value="Add Item" class="btn brand">
        </div>
    </form>





</body>
</html>