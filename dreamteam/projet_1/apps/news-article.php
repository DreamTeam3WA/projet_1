<?php
$tab = $db->query("SELECT * FROM articles WHERE id= '$articleid' ")->fetchAll(PDO::FETCH_ASSOC);
	$id = $tab[0]['id'];
	$titre = $tab[0]['titre'];
	$date = $tab[0]['date'];
	$user = $tab[0]['user'];
	$lien = $lien[0]['lien'];
	$description = $tab[0]['description'];
	
	require('views/article-single.phtml');

?>