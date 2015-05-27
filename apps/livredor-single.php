<?php


$tab = $db->query("SELECT * FROM livredor ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);
/** Pascal : Petite question, il se passe quoi si il y a moins de 4 lignes dans la db livredor ? :) **/
$i=0;
while ($i<4){
	$titre = htmlentities($tab[$i]['titre']);
	$date = $tab[$i]['date'];
	$nom = htmlentities($tab[$i]['nom']);
	$description = htmlentities($tab[$i]['description']);
	require('views/livredor-single.phtml');
	$i++;
}

?>