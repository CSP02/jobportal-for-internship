<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styles/applicantDashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/Scripts/Dashboard.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <?php include "navbar.php"?>
    <?php 
        if(!isset($_COOKIE['usertype']) || $_COOKIE['usertype'] == 'Admin'){
            echo "Unauthorised";
            exit();
        }
    ?>
    <div style="display:flex;">
        <nav id="sidebar">
            <ul id="menu">
                <li class="active">Applied Jobs</li>
                <li class="inactive"><a href="mailto:chandrapilla2002@gmail.com">Contact</a></li>
                <li class="inactive"><a href="/Pages/about.php">About</a></li>
            </ul>
        </nav>
        <div id="content">
            <table id="details">
                <tr>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Location</th>
                </tr>
                <?php include 'fetchApplied.php'?>
            </table>
        </div>
    </div>
</body>
</html>