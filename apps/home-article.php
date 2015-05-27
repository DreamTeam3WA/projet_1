 <?php
$tab = $db->query("SELECT * FROM articles ORDER BY id DESC ")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while ($i<2 && isset($tab[$i])){

	$titre = $tab[$i]['titre'];
	$date = $tab[$i]['date'];
	$user = $tab[$i]['user'];
	$lien = $tab[$i]['lien'];
	$description = substr($tab[$i]['description'], 0, 250);
	$id_article = $tab[$i]['id'];
	require('views/home-article.phtml');
	$i++;
}

?>