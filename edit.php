<?php
// include database connection file
include_once("db.php");

// Check if form is submitted for product update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['productid'];
    $uid = $_POST['userid'];

	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $date_add = date("Y-m-d H-i-s");

	// update product data
	$result = mysqli_query($con, "UPDATE product SET product_name='$product_name',price='$price',pdescription='$description' WHERE productid=$id");

	// Redirect to homepage to display updated product in list
	header("Location: dashboard.php");
}
?>
<?php
// Display selected product data based on id
// Getting id from url
$id = $_GET['id'];
$uid = $_GET['uid'];

// Fetech product data based on id
$result = mysqli_query($con, "SELECT * FROM product WHERE productid=$id and userid=$uid");

while($product_data = mysqli_fetch_array($result))
{
	
    $product_name = $product_data['product_name'];
	$price = $product_data['price'];
	$description = $product_data['pdescription'];
    $quantity = $product_data['quantity'];
    $date_add = date("Y-m-d H-i-s");
}
?>
<html>
<head>
	<title>Edit Product Details</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div align="center">
	<p><h1>SacTech Stores Mart</h1></p>
    <p>
        <hr>
    </p>
</div>
        <div align="center">
            <a href="index.php">Home</a>
            <br/><br/>

            <form name="update_product" method="post" action="edit.php">
                <table border="0">
                    <tr>
                        <td>Product Name</td>
                        <td><input type="text" name="product_name" value=<?php echo $product_name;?>></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="price" value=<?php echo $price;?>></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><input type="text" name="description" value=<?php echo $description;?>></td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="text" name="quantity" value=<?php echo $quantity;?>></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>