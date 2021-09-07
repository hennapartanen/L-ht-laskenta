<?php
session_start();

if(!isset($_SESSION['user_id'])){
    $data = array(
        'error' => 'You are not allowed here!'
    );
 
}


if (!isset($_POST['name']) || !isset($_POST['date']) || !isset($_POST['time'])){
    $data = array(
        'error' => 'POST-dataa ei ole saatavilla'
    );
   
   
}

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$user_id = $_SESSION['user_id'];

include_once 'pdo-connect.php';

try {
    $stmt = $conn->prepare("INSERT INTO poll (name, date, time, user_id)
                            VALUES (:name, :date, :time, :user_id);");
   $stmt->bindParam(':name', $name);
   $stmt->bindParam(':date', $date);
   $stmt->bindParam(':time', $time);
   $stmt->bindParam(':user_id', $user_id);

   

if($stmt->execute() == false){
    $data = array(
        'error' => 'Error!'
    );

} else {
    $data = array(
        'success' => 'New counter added!'
         );
    }
} catch(PDOException $e) {
 $data = array(
     'error' => 'Error occured!'
 );
    


header("Content-type: application/json;charset=utf-8");
echo json_encode($data);

}