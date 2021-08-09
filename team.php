<?php
	define("TITLE", "Team | Health Palace");

	include('includes/header.php');
?>

	<div id="team-members" class="cf">
		
		<h1>Unser Team</h1>
		<p>Wir sind klein, aber oho.

		<br><br>

		Health Palace ist seit 30 Jahren im Familienbetrieb und darauf sind wir stolz!

		<br>

		Wenn diese 3 Mitarbeiter Schicht haben, weiß man nie, was einen an diesem Tag erwartet.

		<br>

		Sie können jedoch eines erwarten: <strong>Das beste Essen das sie jemals gegessen haben. Wirklich.</strong></p>

		<hr>

		<?php
			foreach($teamMembers as $member){
		?>

		<div class="member">
			<img src="img/<?php echo $member['img']; ?>.png" alt"<?php echo $member['name']; ?>">
			<h2><?php echo $member['name']; ?></h2>
			<p><?php echo $member['position']; ?></p>
			<p><?php echo $member['bio']; ?></p>
		</div><!-- member -->

		<?php
			}
		?>

	</div><!-- team-members -->

<?php include('includes/footer.php'); ?>