<html>
<head>
    <title>Startsiden index</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php
include ("includes/header.php");
include ("includes/navBar.php");
include ("includes/footer.php");

if (!isset($_GET["page"])) {
    include ("home.php");
} else {
    switch ($_GET["page"])
    {
        case "home":
            include ("home.php");
            break;
        case "addURL":
            include ("add_url.php");
            break;
        case "admin":
            include ("admin.php");
            break;
    }
}

?>



</body>
</html>