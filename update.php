<?php

	include_once('config.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM user WHERE id=$id";
	$getUsers = $conn->prepare($sql);
	$getUsers->execute();
	$users = $getUsers->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
	<form action="update2.php" method="POST">
		
		<input type="text" value="<?= $users[0]['id'] ?>" name="id" placeholder="id"><br>
		<input type="text" value="<?= $users[0]['username'] ?>" name="username" placeholder="Username"><br>
		<input type="text" value="<?= $users[0]['emri'] ?>" name="emri" placeholder="Emri"><br>
		<input type="email" value="<?= $users[0]['email'] ?>" name="email" placeholder="Email"><br><br>
		<input type="text"  name="password" placeholder="Passowrd"><br><br>

		<input type="text" name="confirm_password" placeholder="Passowrd"><br><br>
	


		<button type="submit" name="submit">Update</button>

	</form>

</body>
</html>