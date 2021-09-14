<?php
  session_start();

if (!isset($_POST['username']) || !isset($_POST['passwd'])){
    $data = array(
    'error' => 'POST-dataa ei ole saatavilla'
    );

}

$username = htmlspecialchars($_POST['username']);
$passwd = $_POST['passwd'];

include_once 'pdo_connect.php';


try {
    $stmt = $conn->prepare("SELECT id, username, pwd FROM user WHERE username = :username");
$stmt->bindParam(':username', $username);



if($stmt->execute() == false){
    $data = array(
        'error' => 'Tapahtui joku virhe lel'
    );

} else {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($passwd, $result['pwd'])) {
            $data = array(
                'success' => 'Kirjautuminen onnistui!'
            );

            $_SESSION['logged_in'] = true;
            $_SESSION['used_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];

        } else {
            $data = array(
                'error'=> 'Salasana on väärä!'
            );
         }
    }
} catch(PDOException $e) {
 
      $data = array(
          'error' => 'Tapahtui joku virhe'
      );
  } 



header("Content-type: application/json;charset=utf-8");
echo json_encode($data);





