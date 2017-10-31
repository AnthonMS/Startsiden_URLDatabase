<?php
$adminPass = "";
$cookie_name = "startsiden Cookie";
$cookie_value = "";
$submitErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (!empty($_POST["adminPass"]))
    {
        // title is not empty
        $adminPass = checkInput($_POST["adminPass"]);
    } else {
        $submitErr = "Password cannot be empty";
    }

    if (!empty($adminPass))
    {
        // no empty fields
        $adminPass = mysqli_real_escape_string($connect, $adminPass);

        $sql = "SELECT * FROM password_table WHERE password='$adminPass' LIMIT 1";
        $query = mysqli_query($connect, $sql);
        $rows = mysqli_num_rows($query);
        if ($rows == 1)
        {
            // password correct
            $rowArr = mysqli_fetch_array($query);
            $dbPass = $rowArr['password'];

            //setcookie($cookie_name, $dbPass, time() + (86400 * 14), "/"); // 86400 = 1 day
            session_start();
            $_SESSION['password'] = $dbPass;
            //$submitErr = $_SESSION['password'];
            $submitErr = "Login Successful";
            header("Location: index.php?page=admin");
        }
        else {
            // password INcorrect
            $submitErr = "Password incorrect";
        }
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

<html>
<head>
    <title>Startsiden AdminLogin</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<form method="post" action="?page=admin">
    <table id="adminLoginTable">
        <tr>
            <th class="adminLoginTH">Password</th>
        </tr>
        <tr>
            <td class="adminLoginTD"><input id="adminInput" type="password" name="adminPass" placeholder="Administrator password"></td>
        </tr>
        <tr>
            <td class="adminLoginTD"><input type="submit" class="submitPassBtn" name="submitPass" value="Login"></td>
        </tr>
        <tr>
            <td class="adminLoginTD"><h3 class="error"><?php echo $submitErr ?></h3></td>
        </tr>
    </table>
</form>

</body>
</html>