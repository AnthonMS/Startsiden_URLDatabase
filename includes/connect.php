<?php
$serverName = "localhost";
$username = "root";
$password = "root";
$dbName = "url_database";

$connect = new mysqli($serverName, $username, $password, $dbName);

if ($connect->connect_error)
{
    die("Connection failed... " + $connect->connect_error);
}
echo "Connection succesful";
?>