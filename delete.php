<?php
// include database connection file
include_once("db.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM product WHERE productid=$id");
if($result){
    // After delete redirect to Home, so that latest user list will be displayed.
    echo "Product deleted successfully";

    header("Location:index.php");
    
}else{
    echo "Something went wrong";
}


?>