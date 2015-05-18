 <?php
/*
La connection à la base de données ici n'est pas une bonne idée, faites le plutôt dans l'index.php
*/
$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$db->exec("SET CHARACTER SET utf8");
$tab = $db->query("SELECT * FROM articles ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while ($i<2){
	$titre = $tab[$i]['titre'];
	$date = $tab[$i]['date'];
	$user = $tab[$i]['user'];
	$lien = $tab[$i]['lien'];
	$description = $tab[$i]['description'];
	require('views/home-article.phtml');
	$i++;
}

?>