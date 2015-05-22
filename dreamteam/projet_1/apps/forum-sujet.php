<?php
$tab = $db->query("SELECT * FROM forum WHERE id= '$id_sujet' ")->fetchAll(PDO::FETCH_ASSOC);
	$id_sujet = $tab[0]['id'];
	$sujet = $tab[0]['sujet'];
	$date = $tab[0]['date'];
	$description = $tab[0]['description'];
	
	require('views/forum-sujet.phtml');

?>