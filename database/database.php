<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "internship";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>