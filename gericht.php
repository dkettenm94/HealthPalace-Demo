<?php

	define("TITLE", "Menu Item | Health Palace");

	include('includes/header.php');


	function strip_bad_chars( $input ) {
		$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
		return $output;
	}

	if(isset($_GET['item'])) {

		$menuItem = strip_bad_chars( $_GET['item'] );

		$gericht = $menuItems[$menuItem];

	}

?>

	<hr>

	<div id="gericht">

		<h1><?php echo $gericht['title']; ?> <span class="preis"><?php echo $gericht['preis']; ?><sup>€</sup></span></h1>

		<p><?php echo $gericht['beschreibung']; ?></p>

		<br>

		<img src="img/<?php echo $gericht['img']; ?>.png">

		<br><br>

		<p><strong>Empfohlenes Getränk: <?php echo $gericht['drink']; ?> </strong></p>

		<br>
	</div><!-- gericht -->

	<hr>

	<a href="menu.php" class="button previous">&laquo; Zurück zum Menü</a>

	<?php include('includes/footer.php');