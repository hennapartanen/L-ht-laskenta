<?php 

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "votedb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch(PDOExpection $e) {
    echo "Error: " . $e->getMessage();
}
