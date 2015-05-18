 <?php
/* connection a la db dans index.php plutot qu'ici, ca évitera de la faire pour chaque page :o */
$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$db->exec("SET CHARACTER SET utf8");
$tab = $db->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while ($i<3){
	$titre = $tab[$i]['titre'];
	$date = $tab[$i]['date'];
	$user = $tab[$i]['user'];
	$lien = $tab[$i]['lien'];
	$description = $tab[$i]['description'];
	require('views/article-single.phtml');
	$i++;
}

?>