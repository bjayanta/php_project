<?php
    session_start();

    // connect to database
    include_once('connection.php');

    // collect all records from form
    $email  = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);

    // find user
    $query = $db->prepare("SELECT * FROM users WHERE email_address='$email' && password='$password'");
    $query->execute();

    if ($query->rowCount() > 0) {
        // store user data
        $_SESSION['user'] = $query->fetch(PDO::FETCH_ASSOC);

        // redirect to dashboard
        header('Location: dashboard.php');
    } else {
        // error message
        $_SESSION['message'] = "Invalid Email address or, Password.";

        // redirect to login
        header('Location: login.php');
    }
?>