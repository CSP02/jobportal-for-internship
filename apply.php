<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
echo "";
if (isset($_POST['apply'])) {
    $user = $_COOKIE['username'];
    $position = $_POST['position'];
    $location = $_POST['location'];
    $company = $_POST['company'];
    $email = $_COOKIE['email'];
    $author = $_POST['author'];

    $applQuery = "SELECT * FROM `applications` WHERE `name` = '$user' AND `position` = '$position' AND `location` = '$location' AND `company` = '$company' AND `author` = '$author'";
    $result = mysqli_query($conn, $applQuery);

    if (mysqli_num_rows($result) == 0) {
        $sqlApplied = "INSERT INTO `applications`(`name`, `email`, `position`, `company`, `location`, `author`) VALUES ('$user', '$email', '$position', '$company', '$location', '$author')";
        if (mysqli_query($conn, $sqlApplied)) {
            echo "<div class='infoHolder'><p class='info'>Posted successfully.</p></div>";
        }
    }
    else {
        echo "<div class='infoHolder'><p class='info'>You have already applied for this post go to applicant dashboard to view applied jobs.</p></div>";
    }
}
mysqli_close($conn);
?>