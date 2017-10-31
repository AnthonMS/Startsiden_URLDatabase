<html>
<head>
    <title>Startsiden home</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php
$sql = "SELECT * FROM url_table ORDER BY datetime DESC";

$result = $connect->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while ($row = $result->fetch_assoc())
    {
        //echo "Title: " . $row["title"];
        echo "<a class='urlList' href='" . $row["url"] . "'>" . $row["title"] . "</a><br>";
    }
}

?>


</body>
</html>