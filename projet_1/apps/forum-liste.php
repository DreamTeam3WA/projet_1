<?php
$tab = $db->query("SELECT * FROM forum ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $tab2) {
	$id = $tab2['id'];
	$sujet = $tab2['sujet'];
	$date = $tab2['date'];
	$description = $tab2['description'];
	$commentaire = $tab2['commentaire'];
	
	require('views/forum-liste.phtml');
}

?>