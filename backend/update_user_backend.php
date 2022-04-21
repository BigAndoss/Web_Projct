<?php
	include_once "../backend/connection.php";
	if (isset($_POST['updateBtn'])) {
		$id	= $_POST['id'];
		$name = $_POST['Name'];
		$surname = $_POST['Surname'];
		$username = $_POST['Username'];
		$email = $_POST['Email'];

		if (empty($name) || empty($surname) || empty($username) || empty($email)) {
			header("Location: ../admin/update_user.php?error=emptyfields&id=$id");
			exit();
		}
		else {
			$sql = "UPDATE users SET Name=:Name, Surname=:Surname, Username=:Username, Email=:Email WHERE id=:id";
			$sqlQuery = $conn->prepare($sql);
			$sqlQuery->bindParam(':id',$id);
			$sqlQuery->bindParam(':Name',$name);
			$sqlQuery->bindParam(':Surname',$surname);
			$sqlQuery->bindParam(':Username',$username);
			$sqlQuery->bindParam(':Email',$email);
			$sqlQuery->execute();
			header("Location: ../admin/dashboard.php?update=success");
		}
	}
?>
