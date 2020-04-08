<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{
        $id = $_POST['id'];
		$emri = $_POST['emri'];
		$username = $_POST['username'];
		$email = $_POST['email'];

		$tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);



		$tempConfirm = $_POST['confirm_password'];
		$confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);


		if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password))
		{
			echo "Nuk i ke plotesu te gjitha fushat.";
		}
		else
		{

			if($tempPass == $tempConfirm)
			{

				$sql = "INSERT INTO user(id,emri,username,email,password, confirm_password) VALUES (:id,:emri, :username, :email, :password, :confirm_password)";

				$insertSql = $conn->prepare($sql);

				
				$insertSql->bindParam(':id', $id);
				

				$insertSql->bindParam(':emri', $emri);
				$insertSql->bindParam(':username', $username);
				$insertSql->bindParam(':email', $email);
				$insertSql->bindParam(':password', $password);
				$insertSql->bindParam(':confirm_password', $confirm_password);

				$insertSql->execute();

				echo "Te dhenat jan shtuar me sukses...";
				header( "Location: login.php");


			}
			else
			{
				echo "Password doesn't match!!";
			}




		}



	}


?>