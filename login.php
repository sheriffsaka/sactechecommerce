<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SacTech Mart | User Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, send values to the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$uid = $rows['userid'];
			$_SESSION['username'] = $username;
			$_SESSION['Userid'] = $uid;
			

			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div  align="center">
	<p><h1>SacTech Stores Mart</h1></p>
    <p>
        <hr>
    </p>
</div>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />
<a href="https://www.sactechcomputers.com.ng/">Official Website</a> <br /><br />
For More ICT related services: <a href="http://www.sactechcomputers.com.ng/">SacTech Computers</a>
</div>
<?php } ?>


</body>
</html>
