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

$author = $_COOKIE['username'];

$query = "SELECT * FROM `jobPostings`";
$result = mysqli_query($conn, $query);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (mysqli_num_rows($result) > 0) {
    foreach ($all as $row) {
        $jobId = $row['jobId'];
        $company = $row['companyName'];
        $position = $row['position'];
        $description = $row['description'];
        $ctc = $row['ctc'];

        echo "<button class='jobCard'>
        <h1 class='jobTitle'>$position</h1>
        <h3 class='companyName'>$company</h3>
        <div class='jobDes'>
            <p class='des'>$description</p>
        </div>
        <div class='skillsReq'>
            <h4>Skills Required: </h4><p class='skills'>Skills</p>
            <h4>Job Location: </h4><p class='jobLoc'>Job Location</p>
            <h4>CTC: </h4><p class='ctc'>$ctc</p>
        </div>
    </button>";
    }
}
else {
    echo "<h1>There are no Jobs posted yet.</h1>";
}
mysqli_close($conn);
?>