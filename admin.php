<?php
session_start();
if ($_SESSION['password'] == false)
{
    // password empty
    //echo "password empty";
    include ("admin_login.php");
} else {
    //echo "password not empty";
    include ("admin_panel.php");
}

?>

<html>
<head>
    <title>Startsiden AdminLogin</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

</body>
</html>