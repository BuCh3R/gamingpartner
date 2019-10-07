<?php

$dbServername = "localhost";
$dbUsername = "****";
$dbPassword = "****";
$dbName = "forum_login";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// $conn = mysqli_connect('localhost', 'root', '', 'forum_login');

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
?>
