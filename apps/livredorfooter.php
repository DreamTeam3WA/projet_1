<?php
$tab = $db->query("SELECT * FROM livredor ORDER BY date DESC")->fetch(PDO::FETCH_ASSOC);

if (isset($tab)){
	$titre = htmlentities($tab['titre']);
	$description = htmlentities($tab['description']);
	require('views/livredorfooter.phtml');
}

?>