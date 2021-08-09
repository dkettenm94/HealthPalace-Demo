<?php 

	$con = mysqli_connect('127.0.0.1', 'root', '');

	if(!$con)
	{
		echo "Not Connected To Server";
	}

	if(!mysqli_select_db($con, 'projekt'))
	{
		echo "Database Not Selected";
	}

	$Gericht = $_POST['gerichtBewertung'];
	$Sterne = $_POST['sterne'];
	$Nachricht = $_POST['nachricht'];

	$sql = "INSERT INTO bewertung (Gericht, Bewertung, Nachricht) VALUES ('$Gericht', '$Sterne', '$Nachricht')";

	if(!mysqli_query($con, $sql)){
		echo "Not Inserted";
	}else{
		echo "Erfolgreich abgesendet";
	}

	header("refresh:2; url=bewertung.php");
 ?>