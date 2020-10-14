<?php

if (!isset($_POST['username']) || !isset($_POST['passwd']) || !isset($_POST['email'])) {
    die('You did not fill in the form!');
}

$username = $_POST['username'];
$passwd = $_POST['passwd'];
$passwd2 = $_POST['passwd2'];
$email = $_POST['email'];

if ($passwd == $passwd2){
    $hash = password_hash($passwd2, PASSWORD_DEFAULT);
}


include_once 'pdo_connect.php';

try {
    $stmt = $conn->prepare("INSERT INTO `users`(`username`, `passwd`, `email`) 
             VALUES (:username, :passwd, :email); ");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':passwd', $passwd);
$stmt->bindParam(':email', $email);

$stmt->execute();
} catch(PDOException $e) {
    echo "Error: ". $e->getMessage();

}

$conn = null;