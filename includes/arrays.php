<?php

	// Navigationsleiste
	
	$navItems = array(

			array(
				'seite' 		=> "index.php",
				'title' 		=> "Home"
			),

			array(
				'seite' 		=> "team.php",
				'title' 		=> "Team"
			),

			array(
				'seite' 		=> "menu.php",
				'title' 		=> "Menü"
			),

			array(
				'seite' 		=> "contact.php",
				'title' 		=> "Kontakt"
			),

			array(
				'seite' 		=> "bewertung.php",
				'title' 		=> "Bewertung"
			),

				);

	// Mitarbeiter

	$teamMembers = array(

					array(

						'name' 		=> "Hugh",
						'position' 	=> "<b>Geschäftsführer</b>",
						'bio' 		=> "Das ist Hugh.<br>Er ist der Geschäftsführer.<br> Sein Name ist Hugh und er ist der Geschäftsführer, sein Nachname ist ein Geheimnis.",
						'img' 		=> "hugh"
						
						),

					array(

						'name' 		=> "George",
						'position' 	=> "<b>Koch</b>",
						'bio' 		=> " Das ist George.<br>Er ist seit Jahren der Koch unseres Restaurants.<br>Obwohl er privat öfter mal missverstanden wird, genießt er hohes Vertrauen bei unseren Stammkunden.",
						'img' 		=> "george"

						),

					array(

						'name' 		=> "Sean",
						'position' 	=> "<b>Lieferant</b>",
						'bio' 		=> "Das ist Sean.<br> Er ist das charismatische Gesicht unseres Restaurants, denn er bringt Ihnen die frische Ware schnellstmöglich nach Hause.",
						'img' 		=> "sean"
						
						)

					);


	// Gerichte

	$menuItems = array(

					'mexican-barbacoa' => array(

						'title' 		=> "Nachos á la Hugh Mungus",
						'preis' 		=> 8,
						'beschreibung' 	=> "Die <b> Nachos á la Hugh Mungus</b> eignen sich perfekt als Vorspeise oder als Snack zwischendurch.<br><br> Die Nachos werden nach einem Familienrezept vom Geschäftsführer Hugh persönlich zubereitet.<br>Das komplette Rezept bleibt natürlich ein Geheimnis, aber Sie können sich auf folgendes einstellen: <br><br> perfekt geröstete Nachos überbacken mit köstlichem Gouda, verfeinert mit mundgerecht geschnittenen Jalapeno- & Paprika-Würfelchen und dazu einen von 3 auswählbaren Dips (Chilli, Käse oder Avoado)",
						'drink' 		=> "Bier mit Zitronenscheibe",
						'img'			=> "nachos"

					),

					'healthy-palace-bowl' => array(

						'title' 		=> "Healthy Palace Bowl<sup>&reg;</sup>",
						'preis' 		=> 12,
						'beschreibung' 	=> "Die <b>Healthy Palace Bowl<sup>&reg;</sup></b> ist das namensgebende Gericht unseres Restaurants.<br><br> Zarte Streifen der Hühnerbrust, saftige Scheiben der Gurke, knackiger Eisbergsalat, winzige Spuren von Karotten und das ganze abgerundet mit der Spezialsauce von unserem Koch George lässt Sie in ein unvergessliches Geschmackserlebnis eintauchen, an das Sie sich noch lange erinnern werden.<br><br> <b>also, worauf warten Sie noch?!</b>",
						'drink' 		=> "Weisswein",
						'img'			=> "healthypalacebowl"

					),

					'weekly-fruit-basket-deluxe'	=> array(

						'title' 		=> "Weekly Fruit Basket Deluxe",
						'preis' 		=> 17,
						'beschreibung' 	=> "Der <b>Weekly Fruit Basket Deluxe Random</b> deckt den Vitaminbedarf für die ganze Familie. <br> Jede Woche wird der Fruit Basket mit neuen Früchten bestückt - jede Woche ein neues Erlebnis!
							<br>
							<br>

							<b>Diese Woche mit:</b> Äpfeln, Birnen, Ananas, Orangen, Trauben, Blaubeeren & Kiwis",
						'drink' 		=> "Bionade",
						'img'			=> "fruitbasket"

					),

					'weekly-vegetable-basket-supreme' 	=> array(

						'title' 		=> "Weekly Vegetable Basket Supreme",
						'preis' 		=> 22,
						'beschreibung' 	=> "Der <b>Weekly Vegetable Basket Supreme</b> deckt den Gemüsebedarf für die ganze Familie. <br> Jede Woche wird der Vegetable Basket mit neuen Früchten bestückt - jede Woche ein neues Erlebnis!
							<br>
							<br>

							<b>Diese Woche mit:</b> Brokkoli, Tomaten, Zwiebeln, Avocado, Lauch, Karotten & Aubergine",
						'drink' 		=> "Multivitaminsaft",
						'img'			=> "vegetablebasket"

					),


				);
?>