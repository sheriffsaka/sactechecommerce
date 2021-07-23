<?php

include("auth.php"); //include auth.php file on all secure pages 
$uid = $_SESSION['Userid'];
$uname = $_SESSION['username'];
// Create database connection using config file
include_once("db.php");

//$id = 

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM product ORDER BY productid DESC");

?>

<?php
    $result1 = mysqli_query($con, "SELECT * FROM users WHERE username='$uname'");
    $count = mysqli_num_rows($result1);
    if($count == 1){
        $row = mysqli_fetch_assoc($result1);
        $uid = $row['userid'];
    
        $_SESSION['Userid'] = $uid;
    
    }else{
        echo "No username detected!!!";
    }
    
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To SACTECH MART | Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div align="center">
	<p><h1>SacTech Stores Mart</h1></p>
    <p>
        <hr>
    </p>
</div>
<div class="form">
    
    <!-- <p><h1>Welcome to SacTech Stores Mart</h1></p>
    <p>
        <hr>
    </p> -->
    <p>Welcome <?php echo $_SESSION['username'] . " | " ."User ID - ". $uid;?>!</p>
    <p><a href="dashboard.php">Dashboard</a></p>
    <a href="logout.php">Logout</a>
</div>
<div>
    <p>
        <hr>
    </p>
</div>
    <section id="newsletter">
		<div align="center">
							<div class="row">
								<div class="column">
									<div class="card">
										<img src ="images\pc1.jpg" alt="Computers" stlye="width:10%">
										<h4><b>HP Desktop 2GB RAM, 500GB HDD</b></h4>
										<p class="price">N100,000.00</p>
										<p><button>Add to Cart</button></p>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src ="images\pc2.jpg" alt="Computers" stlye="width:10%">
										<h4><b>HP Desktop 4GB RAM, 500GB HDD</b></h4>
										<p class="price">N165,000.00</p>
										<p><button>Add to Cart</button></p>
									</div>
								</div>
								
								
							</div>
							<!-- <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> -->
                            <table width='80%' border=1>

                                <tr>
                                    <th>Product Name</th> <th>Price</th> <th>Description</th> <th>Quantity</th>
                                </tr>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM product ORDER BY productid DESC");
                                while($product_data = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>".$product_data['product_name']."</td>";
                                    echo "<td>".$product_data['price']."</td>";
                                    echo "<td>".$product_data['pdescription']."</td>";
                                    echo "<td>".$product_data['quantity']."</td>";
                                    //echo "<td>".$product_data['date_add']."</td>";
                                    //echo "<td><a href='edit.php?id=$product_data[productid]'>Edit</a> | <a href='delete.php?id=$product_data[productid]'>Delete</a></td></tr>";
                                }
                                ?>
                                </table>
						    </div>
										
											<div align="center">
											Already Registered? <a href="login.php">Login Here</a>
											</div>
										
		</div>
    </section >


<br /><br /><br /><br />
<a href="https://www.sactechcomputers.com.ng/">Official Website</a> <br /><br />
For More ICT related services: <a href="http://www.sactechcomputers.com.ng/">SacTech Computers</a>
</div>
</body>
</html>
