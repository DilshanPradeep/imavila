<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ima_villa";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection to the database failed due to" . mysqli_connect_error());
}
?>