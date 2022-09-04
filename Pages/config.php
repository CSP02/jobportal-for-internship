<?php
error_reporting(E_ALL & ~E_NOTICE);
try {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'jobs';
    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
        $mobile = $_POST['mobile'];

        $sql = "INSERT INTO `users`(`Name`, `email`, `password`, `usertype`, `mobile`) VALUES ('$name', '$email', '$password', '$usertype', '$mobile')";
        if (mysqli_query($conn, $sql)) {
            echo "<div class='infoHolder'><p class='info'>Registered successfully.</p></div>";
        }
    }
    if (isset($_POST['cancel'])) {
        header('location:/index.php');
    }
    if (isset($_POST['postJob'])) {
        $companyName = $_POST['companyName'];
        $position = $_POST['position'];
        $description = $_POST['description'];
        $ctc = $_POST['ctc'];
        $skills = $_POST['skills'];
        $location = $_POST['location'];
        $author = $_COOKIE['username'];

        $sqlJobs = "INSERT INTO `jobpostings`(`companyName`, `position`, `description`, `skills`, `location`, `ctc`, `author`) VALUES ('$companyName', '$position', '$description', '$skills', '$location', '$ctc', '$author')";
        if (mysqli_query($conn, $sqlJobs)) {
            echo "<div class='infoHolder'><p class='info'>Posted successfully.</p></div>";
            setcookie('company', $companyName, time() + (86400 * 30), "/");
            setcookie('position', $position, time() + (86400 * 30), "/");
            setcookie('location', $location, time() + (86400 * 30), "/");
        }
    }
    session_start();
    if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $uname = $row['name'];

        if (mysqli_num_rows($result) == 1) {
            $cookie_name = 'username';
            $cookie_value = $uname;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            setcookie('usertype', $row['usertype'], time() + (86400 * 30), "/");
            setcookie('email', $row['email'], time() + (86400 * 30), "/");
            if ($row['usertype'] == 'Admin') {
                header("location:/Pages/adminDashboard.php");
            }
            else {
                header("location:/Pages/applicantDashboard.php");
            }
        }
        else {
            echo "<div class='infoHolder'><p class='info'>emailid or password is incorrect</p></div>";
        }
    }
    if (isset($_POST['refresh']) || isset($_POST['cancelAndRefresh']) || isset($_POST['postJob'])) {
        $author = $_COOKIE['username'];

        $query = "SELECT * FROM `jobPostings` WHERE `author` = '$author'";
        $result = mysqli_query($conn, $query);
        $all = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if (mysqli_num_rows($result) > 0) {
            foreach ($all as $row) {
                $jobId = $row['jobId'];
                $company = $row['companyName'];
                $position = $row['position'];
                $description = $row['description'];
                $skills = $row['skills'];
                $location = $row['location'];
                $ctc = $row['ctc'];

                echo "<tr>
            <td>$jobId</td>
            <td>$company</td>
            <td>$position</td>
            <td>$description</td>
            <td>$skills</td>
            <td>$location</td>
            <td>$ctc</td>
        </tr>";
            }
        }
        else {
            echo "<tr>
        <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>";
        }
    }
    mysqli_close($conn);

}
catch (\Throwable $th) {
}
?>