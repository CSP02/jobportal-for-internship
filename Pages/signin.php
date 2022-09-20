<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styles/signin.css">
    <link rel="icon" href="/Images/Job portal-logos_white.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/Scripts/index.js" type="module"></script>
    <script src="/Scripts/signin.js"></script>
    <title>Sign in</title>
</head>
<body>
    <?php include "navbar.php"?>
    <?php include 'config.php'?>
    <div id="signin">
        <form id="form" method="POST">
            <label for="username">E-mail:</label></br>
            <input type="email" name="email" id="userName" required autocomplete="off"></br>
            <label for="password">Password:</label></br>
            <input type="password" name="password" id="password" required autocomplete="off"></br>
            <div id="links">
                <a href="" id="forget">Forgot password</a>
                <a href="/Pages/register.php" id="newuser">New User?</a>
            </div>
            <button type="submit" id="signInButt" name="signin">Sign In</button>
        </form>
    </div>
</body>
</html>