<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Auth</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="wrapper">
        <form method="post" action="login_process.php">
            <h3>Login Form</h3>
            <?php echo $_SESSION['message'] ?? ''; ?>

            <div>
                <label for="email-address" class="required">Email address</label>
                <input type="email" placeholder="person@maxsop.com" value="bjayanta.neo@gmail.com" name="email" id="email-address" required />
            </div>

            <div>
                <label for="password" class="required">Password</label>
                <input type="password" name="password" value="password" id="password" required />
            </div>

            <input type="submit" name="submit" value="Login" />

            <div>
                <p><a href="#">Forgot your password?</a></p>
                <hr>
                <p>New to this platform? <a href="index.html">Sign up</a></p>
            </div>
        </form>
    </div>

</body>
</html>

<?php 
    if(isset($_SESSION['message'])) {
        unset($_SESSION['message']);
    }
?>