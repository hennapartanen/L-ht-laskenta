<?php


if (!isset($_POST['username']) || !isset($_POST['passwd']) || !isset($_POST['passwd2']) || !isset($_POST['email'])) {
    die('You did not fill in the form!');
    
}

if ($_POST['passwd']!= $_POST['passwd2'])
 {
     die ('Password did not match');
 }



$username = htmlspecialchars($_POST['username']);
$passwd = htmlspecialchars($_POST['passwd']);
$passwd2 = htmlspecialchars($_POST['passwd2']);
$email = htmlspecialchars($_POST['email']);



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
