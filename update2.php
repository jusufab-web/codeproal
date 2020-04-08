<?php 

	include_once('config.php');


	if(isset($_POST['submit']))
	{
	
		$id = $_POST['id'];
		$username = $_POST['username'];
		$name = $_POST['emri'];
        $email = $_POST['email'];
        $tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);
       


		if(empty($username) || empty($name) || empty($email))
		{
			echo "Nuk i ke plotesu te gjitha fushat.";
		}
		else
		{

			$sql = "UPDATE user SET id = :id, emri = :name, username = :username,  email = :email , password = :password WHERE id=$id";
            
			$UpdateSql= $conn->prepare($sql);

		
            
			$UpdateSql->bindParam(':id', $id);
			$UpdateSql->bindParam(':username', $username);
			$UpdateSql->bindParam(':name', $name);
            $UpdateSql->bindParam(':email', $email);
			$UpdateSql->bindParam(':password', $password);

			$UpdateSql->execute();

			echo "Te dhenat jan shtuar me sukses...";
            header('Location:logout.php');
            

		}

}


?>