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

	$Name = $_POST['username'];
	$Email = $_POST['email'];
	$Nachricht = $_POST['nachricht'];

	$sql = "INSERT INTO kontaktformular (Name, Email, Nachricht) VALUES ('$Name', '$Email', '$Nachricht')";

	if(!mysqli_query($con, $sql)){
		echo "Not Inserted";
	}else{
		echo "Erfolgreich abgesendet";
	}

	header("refresh:2; url=contact.php");
 ?>