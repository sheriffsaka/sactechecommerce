<?php

$con = mysqli_connect('localhost', 'sheriff', 'Adetunji12', 'sactechdb');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>