<?php
    // get values from the url
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // validate user values
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

    // check if email/pass are valid
    if($email == 'salvi@techlaunch.io' && $pass == '123456') {
        // pull user info from the database
        $name = 'Salvi';
        $class = 'ROR1000';

        // start the session
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['class'] = $class;

        // send to home
        header("Location: home.php");
    } else {
        // send back with error
        header('Location: login.php?error=1');
    }
?>
