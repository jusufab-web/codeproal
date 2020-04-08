<?php 

// include_once('config.php');
require 'config.php';

if(isset($_POST['submit']))
{
	$error = "";


	$username = $_POST['username'];
	$password = $_POST['password'];


	if(empty($username) || empty($password))
	{
		
	 	echo "Ploteso krejt!";
	}
	else
	{

		$sql = "SELECT  emri, username, password FROM user WHERE username=:username";

		$insertSql = $conn->prepare($sql);

		$insertSql->bindParam(':username', $username);

		$insertSql->execute();


		$data = $insertSql->fetch();



		if($data == false)
		{
			echo "Username <strong> $username </strong> not found!";
		}
		else
		{
			if(password_verify($password, $data['password']))
			{

				$_SESSION['emri'] = $data['emri'];
				$_SESSION['username'] = $data['username'];
				$_SESSION['password'] = $data['password'];
				
				header('Location:dashboard.php');
			}
			else
			{
				echo "Password not match!";
			}
		}




	}

}
	
?>