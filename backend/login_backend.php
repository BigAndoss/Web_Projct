<?php
  session_start();
  include_once "connection.php";
  if (isset($_POST['loginBtn'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    if (empty($username) || empty($password)) {
      header("location: ../login.php?error=emptyfields");
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE Username=:Username AND Password=:Password";
      $sqlQuery = $conn->prepare($sql);
      $sqlQuery->execute([
        'Username' => $username,
        'Password' => $password
      ]);

      $count = $sqlQuery->rowCount();
      if ($count > 0) {
        $_SESSION['Username'] = $username;
        header("location: ../index.php?login=success");
      } else {
        header("location: ../login.php?error=nouser");
        exit();
      }
    }
  } elseif (isset($_POST['adminLoginBtn'])) {
    $username = $_POST['Useradmin'];
    $password = $_POST['Password'];
    if (empty($username) || empty($password)) {
      header("location: ../admin/admin_login.php?error=emptyfields");
      exit();
    } else {
      $sql = "SELECT * FROM admin WHERE Username=:Useradmin AND Password=:Password";
      $sqlQuery = $conn->prepare($sql);
      $sqlQuery->execute([
        'Useradmin' => $username,
        'Password' => $password
      ]);

      $count = $sqlQuery->rowCount();
      if ($count > 0) {
        $_SESSION['Useradmin'] = $username;
        header("location: ../index.php?login=success");
      } else {
        header("location: ../admin/admin_login.php?error=noadmin");
        exit();
      }
    }
  }
?>
