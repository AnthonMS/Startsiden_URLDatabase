<html>
<head>
    <title>Startsiden index</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php

if (!isset($_GET["id"])) {
    echo "Error.. No ID was sent with it";
} else {

    $urlID = $_GET["id"];

    $sql = "DELETE FROM url_table WHERE urlID = '" . $urlID . "'";

    if ($connect->query($sql) === TRUE)
    {
        echo "URL deleted successfully";
    } else {
        echo "Error deleting URL: " . $connect->error;
    }




    switch ($_GET["id"])
    {
        case "1":
            echo "Testing case 1";
            break;
        case "2":
            echo "Testing case 2";
            break;
        case "3":
            echo "Testing case 3";
            break;
        case "4":
            echo "Testing case 4";
            break;
    }
}

?>



</body>
</html>