<html>
<head>
    <title>Startsiden Add URL</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php
$urlTitle = $urlLink = $category = $submitURLError = "";

getinput();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (!empty($urlTitle) && !empty($urlLink) && !empty($category))
    {
        // no empty fields
        $urlTitle = mysqli_real_escape_string($connect, $urlTitle);
        $urlLink = mysqli_real_escape_string($connect, $urlLink);
        $category = mysqli_real_escape_string($connect, $category);

        $sql = "INSERT INTO url_table (urlID, title, url, category, datetime) 
                  VALUES (NULL, '" . $urlTitle . "', '" . $urlLink . "', '" . $category . "', '2017-10-31 13:28:22')";

        if ($connect->query($sql) === TRUE)
        {
            // successfully added url to database
            $submitURLError = "Successfully added URL to database...";
        } else {
            // unsuccessfull
            $submitURLError = "Unsuccessful in adding URL to database...";
        }
    }
}
?>

<h3 class="error"> <?php echo $submitURLError; ?> </h3>

<form method="post" action="?page=addURL">
    <table border="0">
        <tr>
            <td>Title: </td>
            <td><input id="urlTitle" type="text" name="urlTitle" placeholder="Title of URL"></td>
        </tr>
        <tr>
            <td>URL: </td>
            <td><input id="urlLink" type="url" name="urlLink" placeholder="URL / Link"></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td><input id="category" type="text" name="category" placeholder="Category"></td>
        </tr>
        <tr>
            <td><input type="submit" class="submitUrlBtn" class="submitUrl" name="submitUrl" value="Save URL"></td>
        </tr>
    </table>
</form>

<?php

function getinput()
{
    if (!empty($_POST["urlTitle"]))
    {
        // note title is not empty
        $urlTitle = checkInput($_POST["urlTitle"]);
    }
    if (!empty($_POST["urlLink"]))
    {
        // note title is not empty
        $urlLink = checkInput($_POST["urlLink"]);
    }
    if (!empty($_POST["category"]))
    {
        // note title is not empty
        $category = checkInput($_POST["category"]);
    }
}
function checkInput($data)
{
$data = trim($data);
$data = stripcslashes($data);
$data = strip_tags($data);
$data = htmlspecialchars($data);
return $data;
}
?>

</body>
</html>