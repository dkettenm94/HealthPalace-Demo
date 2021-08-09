<?php
	define("TITLE", "Menü | Health Palace");

	include('includes/header.php');
?>

	<div id="menu-items">

		<h1>Unser köstliches Menü</h1>
		<p>Wie schon unser Team, ist auch unser Menü klein (aber oho) geraten</p>
		<p><em>Klicken Sie auf ein Gericht, um mehr darüber zu erfahren.</em></p>

		<hr>

		<ul>
			<?php foreach($menuItems as $gericht => $item) { ?>

			<li><a href="gericht.php?item=<?php echo $gericht; ?>"><?php echo $item['title']; ?> </a><?php echo $item['preis']; ?><sup>€</sup>
			</li>

			<?php } ?>
		</ul>

	</div><!-- menu-items -->

<?php
	include('includes/footer.php');
?>