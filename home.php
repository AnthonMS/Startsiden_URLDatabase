<html>
<head>
    <title>Startsiden home</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!--<table>
    <tr>
        <th>First th</th>
        <th>Second th</th>
        <th>Third th</th>
    </tr>
    <tr>
        <td>First td</td>
        <td>Second td</td>
        <td>Third td</td>
    </tr>
    <tr>
        <td>First td2</td>
        <td>Second td2</td>
        <td>Third td2</td>
    </tr>
</table>

<a href="google.dk">Helloo</a>

-->

    <?php
    echo "<table id='homeTable'>";
    echo "<tr><th class='homeTH'>Title</th><th class='homeTH'>URL</th><th class='homeTH'>Category</th><th class='homeTH'>Date added</th></tr>";

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
            echo "</tr>";
        }
    }

    echo "</table>";

    ?>

</body>
</html>