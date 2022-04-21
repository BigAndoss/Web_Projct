<?php
  include_once "connection.php";
  if (isset($_POST['sendMsg'])){
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $email = $_POST['Email'];
    $tel = $_POST['Tel'];
    $message = $_POST['Message'];
    if (empty($name) || empty($surname) || empty($email) || empty($tel) || empty($message)) {
      header("../contact.php?error=emptyfields");
      exit();
    } else {
      $sql = "INSERT INTO messages (Name, Surname, Email, Tel, Message)
                          VALUES (:Name, :Surname, :Email, :Tel, :Message)";
      $sqlQuery = $conn->prepare($sql);
      $sqlQuery->execute([
        'Name' => $name,
        'Surname' => $surname,
        'Email' => $email,
        'Tel' => $tel,
        'Message' => $message
      ]);
      header("location: ../contact.php?success=message+sent");
    }
  }
?>
