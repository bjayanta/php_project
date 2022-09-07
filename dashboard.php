<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello <?php echo $_SESSION['user']['full_name']; ?>! Welcome to dashboard.</h1>
    <pre>
        <?php print_r($_SESSION['user']); ?>
    </pre>

</body>
</html>