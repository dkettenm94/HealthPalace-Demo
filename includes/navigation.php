<ul>

	<?php
		foreach ($navItems as $item) {
			echo "<li><a href=\"$item[seite]\">$item[title]</a></li>";
		}
	?>
</ul>