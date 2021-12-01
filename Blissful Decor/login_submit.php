<?php

require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$pwd = mysqli_real_escape_string($con, $password);


// Query checks if the email and password are present in the database.
// $query = "SELECT id,email FROM users WHERE email= '$email' AND password='$pwd'";
$query = "SELECT id,email,password FROM users WHERE email= '$email'";
$result = mysqli_query($con, $query)  or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {

  $error ="<span class='red'>Please enter correct E-mail id</span>";
  header('location: login.php?error=' . $error);
} else {

  $row = mysqli_fetch_array($result);

  if(base64_decode($row['password']) != $pwd)
  {
  	$error ="<span class='red'>Please enter correct Password</span>";
  	header('location: login.php?error=' . $error);
  }
  else
  {
  	$_SESSION['email'] = $row['email'];
  	$_SESSION['user_id'] = $row['id'];

  	header('location: products.php');
    

  }
  
}
?>
