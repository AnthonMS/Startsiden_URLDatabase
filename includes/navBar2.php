<?php
$logoutBtn = "";
session_start();
if ($_SESSION['password'] == false)
{
    // password empty
    //echo "password empty";
} else {
    //echo "password not empty";
    $logoutBtn = "Logout";
}
?>

<html>
<head>
    <title>navigation bar startsiden</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styleNav.css">
</head>
<body>

<div id="nav">
    <ul class="mainBtns">
        <li class="nav_button">
            <a href="?page=home">Home</a>
        </li>
        <li class="nav_button">
            <a href="?page=addURL">Add URL</a>
        </li>
        <li class="nav_button">
            <a href="?page=admin">Admin</a>
        </li>
        <li class="nav_button">
            <a href="?page=logout"><?php echo $logoutBtn ?></a>
        </li>
    </ul>
</div>

</body>
</html>