<?php
    session_start();
    if( ! count($_SESSION)) header("Location: login.php");
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $class = $_SESSION['class'];
?>

<?php include "partials/header.php"; ?>

<h1>Home</h1>
<p>Hello <?=$name?> this is your home screen. Your current class is <?=$class?></p>

<?php include "partials/footer.php"; ?>
