<?php include 'apply.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/Chandra-sekhar-pilla/Toggler@main/Toggler.js"></script>
    <script src="/Scripts/index.js" type="module"></script>
    <script src="/Scripts/drawer.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/Scripts/signin.js"></script>
    <title>Job Portal</title>
</head>
<body>
    <div id="hiddenMenu"></div>
    <nav id="navBar">
        <button id="mobMenu"><i class="fa-solid fa-bars" id="menuOpener"></i></button>
        <div id="menu">
        <ul id="quickLinks">
            <li><a href="/index.php">Home <i class="fa-solid fa-house"></i></a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Pricing</a></li>
            <li><a href="/Pages/about.php">About</a></li>
        </ul>
        </div>
        <div id="user">
            <?php 
                if(!isset($_COOKIE['username'])){
                    echo '<ul id="newUser"><li><a href="/Pages/signin.php">Sign in</a></li>
                            <li><a href="/Pages/register.php">Register</a></li></ul>';
                }else{
                    if($_COOKIE['usertype'] == 'Admin'){
                        echo '<a href="/Pages/adminDashboard.php">'.$_COOKIE['username'].'</a><a href="/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>';
                    }else{
                        echo '<a href="/Pages/applicantDashboard.php">'.$_COOKIE['username'].'</a><a href="/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>';
                    }
                }
            ?>
        </div>
    </nav>
    <div id="header">
        <section id="slogan">
            <h1>Job Portal</h1>
            <p>Search for jobs</p>
            <div id="links">
                <a href="#jobCards"><button id="explore">Explore <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
        </section>
    </div>
    <div id="jobCards">
        <?php include 'jobs.php'?>
    </div>
</body>
</html>