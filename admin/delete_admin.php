<?php
  include_once "../backend/connection.php";
  $id = $_GET['id'];
  $sql = "DELETE FROM admin WHERE id=:id";
  $sqlQuery = $conn->prepare($sql);
  $sqlQuery->bindParam(':id',$id);
  $sqlQuery->execute();
  header("location: admin_dashboard.php?admin=deleted+successfuly");
?>
