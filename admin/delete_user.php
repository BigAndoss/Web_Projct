<?php
  include_once "../backend/connection.php";
  $id = $_GET['id'];
  $sql = "DELETE FROM users WHERE id=:id";
  $sqlQuery = $conn->prepare($sql);
  $sqlQuery->bindParam(':id',$id);
  $sqlQuery->execute();
  header("location: dashboard.php?user=deleted+successfuly");
?>
