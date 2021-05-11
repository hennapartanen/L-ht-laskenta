<?php



if (!isset($_POST['username']) || !isset($_POST['passwd']) || !isset($_POST['passwd2']) || !isset($_POST['email'])){
    $data = array(
    'error' => 'POST-dataa ei ole saatavilla'
    );

}

$username = htmlspecialchars($_POST['username']);
$passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
$email = htmlspecialchars($_POST['email']);


include_once 'pdo_connect.php';


try {
    $stmt = $conn->prepare("INSERT INTO user (username, pwd, email) 
             VALUES (:username, :pwd, :email); ");

$stmt->bindParam(':username', $username);
$stmt->bindParam(':pwd', $passwd);
$stmt->bindParam(':email', $email);


if($stmt->execute() == false){
    $data = array(
        'error' => 'Tapahtui joku virhe lel'
    );

} else {
    $data = array(
        'success' => 'Uusi käyttäjä tallennettu'
         );
    }
} catch(PDOException $e) {
  if (strpos($e->getMessage(), '1062 Duplicate entry')){
      $data = array(
          'error' => 'Käyttäjänimi tai sähköpostiosoite on jo olemassa'
      );
  } 
}


header("Content-type: application/json;charset=utf-8");
echo json_encode($data);

