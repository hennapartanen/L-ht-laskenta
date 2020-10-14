<?php 

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db = "countdownapp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $db_username, $db_password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Location: kissa.php");
    echo "Connected succesfully";
}   catch (PDOExpection $e) {
    echo "Connection failed: " . $e->getMessage();
}
