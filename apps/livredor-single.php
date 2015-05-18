<?php

$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$db->exec("SET CHARACTER SET utf8");
$tab = $db->query("SELECT * FROM livredor ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while ($i<4){
	$titre = $tab[$i]['titre'];
	$date = $tab[$i]['date'];
	$nom = $tab[$i]['nom'];
	$description = $tab[$i]['description'];
	require('views/livredor-single.phtml');
	$i++;
}

?>