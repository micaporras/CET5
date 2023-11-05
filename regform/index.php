<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <input type="checkbox" id="check" aria-hidden="true">

        <div class="register-wrapper">
            <form action="includes/signup.inc.php" method="post">
                <label for="check" aria-hidden="true">Register</label>
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <button type="submit" name="submit">Register</button>
            </form>
        </div>

        <div class="login-wrapper">
            <form action="includes/login.inc.php" method="post">
                <label for="check" aria-hidden="true">Login</label>
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>

</body>
</html>