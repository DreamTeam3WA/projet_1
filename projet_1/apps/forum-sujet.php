<?php
$tab = $db->query("SELECT * FROM forum WHERE id= '$sujetid' ")->fetchAll(PDO::FETCH_ASSOC);
	$id = $tab[0]['id'];
	$sujet = $tab[0]['sujet'];
	$date = $tab[0]['date'];
	$description = $tab[0]['description'];
	
	require('views/forum-sujet.phtml');

?>