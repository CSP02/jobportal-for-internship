<script src="https://cdn.jsdelivr.net/gh/Chandra-sekhar-pilla/Toggler@main/Toggler.js"></script>
<script src="/Scripts/drawer.js"></script>
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
    
#mobMenu, #hiddenMenu {
    display: none;
}

@media screen and (max-width: 900px) {
    #navBar {
        top: 0;
        position: sticky;
        padding: .7rem 0rem .7rem 0rem;
        z-index: 2;
    }

    #hiddenMenu a {
        color: black;
        text-decoration: none;
        padding: 0.4rem;
        border-radius: 0.5rem;
    }
    
    #hiddenMenu a:hover {
        color: rgb(61, 61, 61);
    }

    #hiddenMenu {
        display: inline;
        height: 100vh;
        width: 50vw;
        position: fixed;
        margin-left: -60vw;
        background-color: rgb(206, 206, 206, 0.6);
        backdrop-filter: blur(24px);
        margin-top: 7vh;
        z-index: 2;
    }

    #mobMenu {
        display: inline;
        background-color: transparent;
        color: black;
        cursor: pointer;
        border-radius: .6rem;
        font-size: 18pt;
        margin-left: 3vw;
    }
    #menu #quickLinks{
        width: inherit;
        display: grid;
        justify-content: center;
        align-items: center;
        margin: .7rem;
    }
    #menu #quickLinks li{
        list-style-type: none;
        padding: .7rem;
    }
    #jobCards{
        display: grid;
        width: fit-content;
    }
}
</style>
<div id="hiddenMenu"></div>
<nav id="navBar">
<button id="mobMenu"><i class="fa-solid fa-bars" id="menuOpener"></i></button>
<div id="menu">
    <ul id="quickLinks">
        <li><a href="/index.php">Home <i class="fa-solid fa-house"></i></a></li>
        <li><a href="">Features</a></li>
        <li><a href="">Pricing</a></li>
        <li><a href="/Pages/about.php">About</a></li>
    </ul>
    </div>

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