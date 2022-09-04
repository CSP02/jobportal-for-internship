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

$query = "SELECT * FROM `jobPostings`";
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
        $author = $row['author'];

        echo "<form method='POST'>
        <button class='jobCard' name='apply'>
        <h1 class='jobTitle'><input type='disabled' name='position' value='$position'>$position</h1>
        <h3 class='companyName'><input type='disabled' name='company' value='$company'>$company</h3>
        <div class='jobDes'>
            <p class='des'>$description</p>
        </div>
        <div class='skillsReq'>
            <span class='otherDetails'><h4>Skills Required: </h4><p class='skills'>&nbsp;$skills</p></span>
            <span class='otherDetails'><h4>Job Location: </h4><p class='location'><input type='disabled' name='location' value='$location'>&nbsp;$location</p></span>
            <span class='otherDetails'><h4>CTC: </h4><p class='ctc'>&nbsp;$ctc</p></span>
            <span class='otherDetails'><h4>Author: </h4><p class='author'><input type='disabled' name='author' value='$author'>&nbsp;$author</p></span>
        </div>
    </button></form><?php include 'apply.php'?>";
    } 
}
else {
    echo "<h1>There are no Jobs posted yet.</h1>";
}
mysqli_close($conn);
?>