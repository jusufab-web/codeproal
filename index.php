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
	
	<form action="register.php" method="post">
		
		<input type="text" name="emri" placeholder="Emri"><br>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="password" name="confirm_password" placeholder="Confirm Password"><br>
		<br>
		<button type="submit" name="submit">Register</button>

	</form>

</body>
</html>