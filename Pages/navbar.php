<style>
    #navbar {
        z-index: 10;
    }

    #navBar a {
        color: black;
        text-decoration: none;
        padding: 0.4rem;
        border-radius: 0.5rem;
    }

    #navBar a:hover {
        color: rgb(61, 61, 61);
    }

    #navBar {
        display: flex;
        position: sticky;
        top: 0;
        justify-content: space-between;
        background-color: rgb(206, 206, 206, 0.6);
        backdrop-filter: blur(24px);
        padding: 1rem;
    }

    #navBar ul li {
        list-style-type: none;
        display: inline-block;
    }

    #user {
        color: rgb(223, 223, 223);
    }
</style>
<nav id="navBar">
    <ul id="quickLinks">
        <li><a href="/index.php">Home</a></li>
        <li><a href="">Features</a></li>
        <li><a href="">Pricing</a></li>
    </ul>
    <div id="user">
        <?php
if (!isset($_COOKIE['username'])) {
    echo '<ul id="newUser"><li><a href="/Pages/signin.php">Sign in</a></li>
                        <li><a href="/Pages/register.php">Register</a></li></ul>';
}
else {
    if ($_COOKIE['usertype'] == 'Admin') {
        echo '<a href="/Pages/adminDashboard.php">' . $_COOKIE['username'] . '</a><a href="/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>';
    }
    else {
        echo '<a href="/Pages/applicantDashboard.php">' . $_COOKIE['username'] . '</a><a href="/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>';
        echo '';
    }
}
?>
    </div>
</nav>