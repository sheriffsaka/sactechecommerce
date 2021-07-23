<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages
$uid = $_SESSION['Userid'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Personal Area</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>Welcome to your dashboard <?php echo $_SESSION['username']; ?>.</p>
<p><a href="index.php">Home</a></p>
<p><a href="additem.php">Add Item</a></p>
<a href="logout.php">Logout</a>
</div>
<div align="center">

        <div>
                <table width='80%' border=1>

                <tr>
                <th>User ID</th><th>Product Name</th> <th>Price</th> <th>Description</th> <th>Quantity</th><th>Date Added</th> <th>Update</th>
                </tr>
                <?php
                //$result = mysqli_query($con, "SELECT * FROM product ORDER BY productid WHERE userid='$uid' DESC");
                //$result = mysqli_query($con, "SELECT * FROM product ORDER BY productid DESC"); 1
                $result = mysqli_query($con, "SELECT * FROM product WHERE userid='$uid'"); //2
                while($product_data = mysqli_fetch_array($result)) {
                    //echo $product_data['userid'];
                    echo "<tr>";
                    echo "<td>".$product_data['userid']."</td>";
                    echo "<td>".$product_data['product_name']."</td>";
                    echo "<td>".$product_data['price']."</td>";
                    echo "<td>".$product_data['pdescription']."</td>";
                    echo "<td>".$product_data['quantity']."</td>";
                    echo "<td>".$product_data['date_add']."</td>";
                    echo "<td><a href='edit.php?id=$product_data[productid]'>Edit</a> | <a href='delete.php?id=$product_data[productid]'>Delete</a></td></tr>";
                }
                ?>
                </table>
        </div>



<br /><br /><br /><br />
<a href="https://www.sactechcomputers.com.ng/">Official Website</a> <br /><br />
For More ICT related services: <a href="http://www.sactechcomputers.com.ng/">SacTech Computers</a>
</div>
</body>
</html>
