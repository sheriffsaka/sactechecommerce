<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$fname = stripslashes($_REQUEST['fname']); // removes backslashes
		$fname = mysqli_real_escape_string($con,$fname); //escapes special characters in a string

        $username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string

        $phone = stripslashes($_REQUEST['phone']); // removes backslashes
		$phone = mysqli_real_escape_string($con,$phone); //escapes special characters in a string

		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (fullName, username, email, phone, password, registerAt) VALUES ('$fname', 
        '$username', '$email', '$phone', '".md5($password)."', date('Y-m-d'))";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="fname" placeholder="Fullname" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="phone" placeholder="Telephone Number" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
<a href="https://www.sactechcomputers.com.ng/">Official Website</a> <br /><br />
For More ICT related services: <a href="http://www.sactechcomputers.com.ng/">SacTech Computers</a>
</div>
<?php } ?>
</body>
</html>
