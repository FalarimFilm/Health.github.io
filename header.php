<?php session_start(); ?>
    <?php
    if (isset($_SESSION['username'])) {
    echo '<a href="logout.php">Logout - </a>';
    echo "<span class='user-desc'>&nbsp;[";
    echo $_SESSION['username']
    ." - Level: ".$_SESSION['level'];
    echo "]</span>";
    }
    else {
    echo '<a href="login.php">LOGIN</a>';
    }
?>