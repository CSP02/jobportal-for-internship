<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Images/Job portal-logos_white.png" type="image/png">
    <link rel="stylesheet" href="/Styles/adminDashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/Scripts/Dashboard.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <?php include "navbar.php"?>
    <?php 
        if(!isset($_COOKIE['usertype']) || $_COOKIE['usertype'] == 'Applicant'){
            echo "Unauthorised";
            exit();
        }
    ?>
    <div style="display:flex;">
        <button id="admin_menu"><i class="fa-solid fa-chevron-right" id="sidebarMenu"></i></button>
        <nav id="sidebar">
            <ul id="menu">
                <li class="active buttons refresh" id="yourJobs">Your Jobs</li>
                <li id="applicants" class="inactive buttons">Applicants</li>
                <li><a href="mailto:chandrapilla2002@gmail.com"><p class="inactive buttons">Contact</p></a></li>
                <li><a href="/Pages/about.php"><p class="inactive buttons">About</p></a></li>
            </ul>
        </nav>
        <div id="content">
            <div style="width:80vw; display: flex; justify-content:space-between;">
                <button id="postJob">Post Job</button>
                <form action="" method="POST">
                    <button type="submit" name="refresh" id="refresh"><i class="fa-solid fa-arrows-rotate"></i></button>
                </form>
            </div>
            <form action="" method="post" id="postJobForm">
                <label for="companyName">Company name:</label><br>
                <input type="text" name="companyName"><br>
                <label for="position">Position:</label><br>
                <input type="text" name="position"><br>
                <label for="description">Description:</label><br>
                <textarea name="description" id="description"></textarea>
                <label for="skills">Skills required:</label><br>
                <input type="text" name="skills"><br>
                <label for="location">Location:</label><br>
                <input type="text" name="location"><br>
                <label for="ctc">CTC:</label><br>
                <input type="text" name="ctc"><br>
                <div id="formButtons">
                    <button id="cancelAndRefresh" name="cancelAndRefresh">Cancel</button>
                    <button type="submit" name="postJob" id="postJobButt">Post</button>
                </div>
            </form>
            <div id="detailsHolder" class="tableHolder">
            <table id="details">
                <tr>
                    <th>Job ID</th>
                    <th>Company name</th>
                    <th>Position</th>
                    <th>Description</th>
                    <th>Skills</th>
                    <th>Location</th>
                    <th>CTC</th>
                </tr>
            <?php include 'config.php'?>
            </table>
            </div>
            <div id="appliedHolder" class="tableHolder">
            <table id="appliedDetails">
                <tr>
                    <th>#</th>
                    <th>Applied for</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone number</th>
                </tr>
                <?php include 'fetchAllApps.php'?>
            </table></div>
        </div>
    </div>
</body>

</html>