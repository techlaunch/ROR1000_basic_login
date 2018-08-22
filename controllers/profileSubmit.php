<?php

// get values from the post 
$name=$_POST['name'];
$email=$_POST['email'];
$class=$_POST['class'];

// do not allow invalid emails
if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

// change the session data
session_start();
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['class'] = $class;

// save the changes in a file
$session = serialize($_SESSION);
file_put_contents('../data.db', $session);

// redirect to the view
header("Location: ../profile.php");

?>
