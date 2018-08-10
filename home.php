<?php
    session_start();
    if( ! count($_SESSION)) header("Location: login.php");
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $class = $_SESSION['class']
?>

<h1>Home</h1>
<p>Hello <?=$name?> this is your home screen. Your current class is <?=$class?></p>

<a href="profile.php">Profile</a><br/>
<a href="logoutSubmit.php">Logout</a>