<?php
$host = "localhost";
$username = "root";
$pw = "";
$db = "reproductor";

$conn = @new mysqli($host, $username, $pw, $db);
if(!$conn){
    die("Database Connection Failed. Error: ".$conn->error);
}
