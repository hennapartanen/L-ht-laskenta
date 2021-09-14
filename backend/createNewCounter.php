<?php
session_start();

if (!isset($_SESSION['user_id'])){
    $data = array(
        'error' => 'ei'
    );
 die();
}

if (!isset($_POST['topic']) || !isset($_POST['date']) || !isset($_POST['time'])){
    $data = array(
        'error' => 'POST-dataa ei ole saatavilla'
    );
}

$topic = htmlspecialchars($_POST['topic']);
$date = $_POST['date'];
$time = $_POST['time'];
$user_id = $_SESSION['user_id'];

include_once 'pdo-connect.php';

try {
    $stmt = $conn->prepare("INSERT INTO poll (topic, date, time, user_id)
                            VALUES (:topic, :date, :time, :user_id);");
   $stmt->bindParam(':topic', $topic);
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
     'error' => $e->getMessage()
 );
}


header("Content-type: application/json;charset=utf-8");
echo json_encode($data);

