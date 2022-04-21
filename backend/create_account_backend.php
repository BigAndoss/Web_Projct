<?php
  include_once "connection.php";
  if (isset($_POST['createAccountBtn'])) {
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['confirmPassword'];
    if (empty($name) || empty($surname) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      header("location: ../login.php?error=emptyfields");
      exit();
    } elseif ($password !== $confirmPassword) {
      header("location: ../login.php?error=password+does+not+match");
      exit();
    } else {
      $sql = "INSERT INTO users (Name, Surname, Username, Email, Password)
                        VALUES (:Name, :Surname, :Username, :Email, :Password)";
      $sqlQuery = $conn->prepare($sql);
      $sqlQuery->execute([
        'Name' => $name,
        'Surname' => $surname,
        'Username' => $username,
        'Email' => $email,
        'Password' => $password
      ]);
      header("location: ../login.php?register=success");
    }
  }
?>
