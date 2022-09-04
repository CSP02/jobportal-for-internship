<?php
try {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'jobs';
    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
    echo "";
    $user = $_COOKIE['username'];
    $query = "SELECT * FROM `applications` WHERE `name` = '$user'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $company = $row['company'];
        $position = $row['position'];
        $location = $row['location'];

        echo "
    <tr>
        <td>$company</td>
        <td>$position</td>
        <td>$location</td>
    </tr>
    ";
    }
    mysqli_close($conn);
}
catch (\Throwable $th) {
//throw $th;
}
?>