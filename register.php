<?php 
    // connect to database
    include_once('connection.php');

    // collect all records
    $full_name      = $_POST['name'];
    $email_address  = $_POST['email'];
    $password       = $_POST['password'];
    $phone_number   = $_POST['phone'];
    $gender         = $_POST['gender'];
    $address        = $_POST['address'];

    // validation

    // insert into table
    $sql = "INSERT INTO users (`full_name`, `email_address`, `password`, `phone_number`, `gender`, `address`) VALUES ('$full_name', '$email_address', '$password', '$phone_number', '$gender', '$address')";
    $db->exec($sql);

    // redirect to login page
    header('Location: login.php');
?>