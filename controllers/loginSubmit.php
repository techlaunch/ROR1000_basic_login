<?php
    // get values from the url
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    // validate user values
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

    // check if email/pass are valid
    if($email == 'salvi@techlaunch.io' && $pass == 'e10adc3949ba59abbe56e057f20f883e')
    {
        // pull user info from the file
        $session = ['name'=>'', 'email'=>$email, 'class'=>''];
        if(file_exists('../data.db')) {
            $session = unserialize(file_get_contents('../data.db'));
        }

        // start the session
        session_start();
        $_SESSION = $session;

        // send to home
        header("Location: ../home.php");
    } else {
        // send back with error
        header('Location: ../login.php?error=1');
    }
?>
