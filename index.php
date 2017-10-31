<html>
<head>
    <title>Startsiden index</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php
include ("includes/header.php");
include ("includes/navBar2.php");
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
            include("admin.php");
            break;
        case "delete_id":
            include ("deleteID.php");
            //echo "Testing 123";
            break;
        case "logout":
            //$_SESSION['password'] = "";
            session_unset();
            session_destroy();
            include ("home.php");
    }
}

?>



</body>
</html>