<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styles/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/Scripts/register.js"></script>
    <title>Register</title>
</head>
<body>
    <?php include "navbar.php"?>
    <div id="registerForm">
        <form method="post" id="form">
            <label for="username">Name</label><br>
            <input type="text" name="name" id="username"><br>
            <label for="email">E-mail</label><br>
            <input type="text" name="email" id="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <label for="confirmPassword">Confirm password</label><br>
            <input type="password" name="confirmpassword" id="confirmPass"><br>
            <select name="usertype" id="select">
                <option value="Admin">Admin</option>
                <option value="Applicant">Applicant</option>
            </select>
            <button type="submit" id="register" name="register">Register</button>
        </form>
    </div>
</body>
</html>