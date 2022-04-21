<?php
  include_once "../backend/connection.php";
  $id = $_GET['id'];
  $sql = "DELETE FROM messages WHERE id=:id";
  $sqlQuery = $conn->prepare($sql);
  $sqlQuery->bindParam(':id',$id);
  $sqlQuery->execute();
  header("location: contact_dashboard.php?message=deleted+successfuly");
?>
