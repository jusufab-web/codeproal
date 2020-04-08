<?php 
	include_once('config.php'); 

	if(empty($_SESSION['username']))
	{
		header('Location: login.php');
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
		table
		{
			border: 1px solid black;
		}

		tr,td,th
		{
			border: 1px solid black;
			
		}
		table,tr,td
		{
			border-collapse: collapse;
		}
		td
		{
			padding: 10px;
		}

	</style>
</head>
<body>


	<?php 

		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM user");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>


	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Email</th>
                <th>password</th>
                <th>Confirm_password</th>
				<th>Update</th>
			</tr>

	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['emri']  ?> </td> 
				<td> <?= $user['email']  ?> </td>

				<td> <?= $user['password'] ?> </td>

				<td> <?= $user['confirm_password']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete </a> | <a href='update.php?id=$user[id]'> Update </a> " ?></td>
			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>
	
</body>
</html>