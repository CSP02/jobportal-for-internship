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
    $query = "SELECT * FROM `applications` WHERE `author` = '$user'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $id = $row['id'];
        $job = $row['position'];
        $company = $row['company'];
        $location = $row['location'];
        $user = $row['name'];
        $email = $row['email'];

        $userSql = "SELECT * FROM `users` WHERE `name` = '$user' AND `email` = '$email'";
        $res = mysqli_query($conn, $userSql);
        $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
        if (mysqli_num_rows($res) == 1)
            $mobile = $userRow['mobile'];

        echo "
    <tr>
        <td>$id</td>
        <td>$job</td>
        <td>$company</td>
        <td>$location</td>
        <td>$user</td>
        <td>$email</td>
        <td>$mobile</td>
    </tr>
    ";
    }
    mysqli_close($conn);
}
catch (\Throwable $th) {
//throw $th;
}

?>