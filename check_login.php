<?php

$username = $_POST['username'];
$passwd = $_POST['passwd'];
$hash = password_hash($passwd, PASSWORD_DEFAULT);
var_dump($hash);

include_once 'pdo_connect.php';

try {
    $stmt = $conn->prepare("SELECT `passwd` FROM `users` WHERE `username` = '".$username."'");
    $stmt->execute();
  
    
    if (password_verify('passwd', $hash)) {
        header("Location: kissa.php") ;
    }

     else {
        echo 'ei haluu ei toimi';
    }
       
    
    } catch(PDOException $e) {
    echo "Error: ". $e->getMessage();
    
    }
