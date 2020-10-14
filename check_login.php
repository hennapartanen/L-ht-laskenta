<?php

$username = $_POST['username'];
$passwd = $_POST['passwd'];

include_once 'pdo_connect.php';

try {
    $stmt = $conn->prepare("SELECT `passwd` FROM `users` WHERE `username` = :username;");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $data = $stmt->fetch();

    if ($data == false) {
        echo 'Käyttäjää ei löytynyt';
    }

} catch(PDOException $e) {
    echo "Error: ". $e->getMessage();

}

$conn = null;