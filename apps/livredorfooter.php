<?php
	$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
	$db->exec("SET CHARACTER SET utf8");
	$tab = $db->query("SELECT * FROM livredor ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);
	
	$titre = $tab[0]['titre'];
	$description = $tab[0]['description'];

	require('views/livredorfooter.phtml');
?>