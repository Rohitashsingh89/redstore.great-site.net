<?php
session_start();
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'loginsystem';

$dbconn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(!$dbconn) {
    echo "Connection failed";
}

session_start();
    if(!isset($_SESSION["uname"])) {
        header("Location: login.php");
        exit();
    }

?>