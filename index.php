<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logga In</title>
	<style>
		main{
			width: 80%;
			margin:0px auto;
		}
	</style>
</head>
<body>
	<main>
		<h1>Logga In!!</h1>
		<form action="login.php" method="POST">
			<fieldset>
				<legend>Logga in</legend>
				<p>
					<label for="username">Användarnamn</label>
					<input type="text" name="username" id="username">
				</p>
				<p>
					<label for="password">Lösenord</label>
					<input type="password" name="password" id="password">
				</p>
				<p>
					<input type="submit" name="submit" id="submit" value="Logga in">
				</p>
			</fieldset>
		</form>
		<?php 

		 ?>
	</main>
</body>
</html>