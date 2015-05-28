<?php


$tab = $db->query("SELECT * FROM livredor ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);
$i=0;
while (isset($tab[$i])){
	$titre = htmlentities($tab[$i]['titre']);
	$date = $tab[$i]['date'];
	$nom = htmlentities($tab[$i]['nom']);
	$description = htmlentities($tab[$i]['description']);
	require('views/livredor-single.phtml');
	$i++;
}

?>