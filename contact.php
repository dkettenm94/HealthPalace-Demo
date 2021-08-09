<?php

	define("TITLE", "Kontakt | Health Palace");

	include('includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Kontaktieren Sie uns!</h1>

	<br>

	<form action="insert.php" method="post" id="contact-form">

		<label for="username">Name:</label>
		<input type="text" name="username" id="name">

		<br>
		<label for="email">E-Mail:</label>
		<input type="text" name="email" id="email">

		<br>
		<label for="nachricht">Nachricht:</label>
		<textarea name="nachricht" id="message"></textarea>

		<br>

		<input type="submit" class="button next" value="Absenden">

	</form>

</body>
</html>

<?php include('includes/footer.php'); ?>