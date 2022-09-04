<?php
try {
    setcookie('username', $_COOKIE['username'], time() - (86400 * 30), '/');
    setcookie('usertype', $_COOKIE['usertype'], time() - (86400 * 30), '/');

    header('location:/index.php');
}
catch (\Throwable $th) {
//throw $th;
}
?>