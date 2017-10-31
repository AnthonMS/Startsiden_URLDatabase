<html>
<head>
    <title>Startsiden AdminPanel</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php
echo "<table id='adminTable'>";
echo "<tr><th class='adminTH'>Title</th><th class='adminTH'>URL</th><th class='adminTH'>Category</th><th class='adminTH'>Date added</th><th class='adminTH'>Delete</th></tr>";

$sql = "SELECT * FROM url_table ORDER BY datetime DESC";

$result = $connect->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td class='homeTD'>" . $row["title"] . "</td>";
        echo "<td class='homeTD'><a href='" . $row["url"] . "'>" . $row["url"] . "</a></td>";
        echo "<td class='homeTD'>" . $row["category"] . "</td>";
        echo "<td class='homeTD'>" . $row["datetime"] . "</td>";
        echo "<td class='homeTD'><a href='?page=delete_id&id=" . $row['urlID'] . "'>Delete</a></td>";
        echo "</tr>";
    }
}

echo "</table>";

?>
</body>
</html>