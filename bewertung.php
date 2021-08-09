<?php

	define("TITLE", "Bewertung | Health Palace");

	include('includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Bewerten Sie Ihre Bestellung!</h1>

	<br>

	<form action="insert2.php" method="post" id="contact-form">

		<label for="gerichtBewertung">Gericht:</label>
		<input type="text" name="gerichtBewertung" id="gerichtBewertung">

		<br><br>
		<label for="sterne">Sterne-Bewertung (1 miserabel, 5 bestens):</label>
		<img src="img/star1.png" alt="">
		<input type="radio" name="sterne" id="sterne" value="1">
		<br>

		<img src="img/star2.png" alt="">
		<input type="radio" name="sterne" id="sterne" value="2">
		<br>

		<img src="img/star3.png" alt="">
		<input type="radio" name="sterne" id="sterne" value="3">
		<br>

		<img src="img/star4.png" alt="">
		<input type="radio" name="sterne" id="sterne" value="4">
		<br>

		<img src="img/star5.png" alt="">
		<input type="radio" name="sterne" id="sterne" value="5">

		<br><br>
		<label for="nachricht">Nachricht:</label>
		<textarea name="nachricht" id="message"></textarea>

		<br>

		<input type="submit" class="button next" value="Absenden">

	</form>

</body>
</html>

<?php include('includes/footer.php'); ?>