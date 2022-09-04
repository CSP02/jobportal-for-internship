<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styles/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/Scripts/register.js"></script>
    <title>Register</title>
</head>

<body>
    <?php include "navbar.php"?>
    <div id="registerForm">
        <?php include "config.php"?>
        <form method="post" id="form">
            <div class="fieldHolder">
                <div class="field">
                    <label for="username">Full name:</label>
                    <input type="text" name="name" id="username" required>
                </div>
                <div class="field">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" required>
                </div>
            </div>
            <div class="fieldHolder">
                <div class="field">
                    <label for="mobile">Mobile number:</label>
                    <input type="text" name="mobile" id="mobile" required>
                </div>
                <div class="field">
                    <label for="usertype">User type:</label>
                    <select name="usertype" id="select" required>
                        <option value="Admin">Admin</option>
                        <option value="Applicant">Applicant</option>
                    </select>
                </div>
            </div>
            <div class="fieldHolder">
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="field">
                    <label for="confirmPassword">Confirm password:</label>
                    <input type="password" name="confirmpassword" id="confirmPass">
                </div>
            </div>
            <div id="field">
            <button type="submit" id="register" name="register">Register</button>
            <button id="cancel" name="cancle">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>