 <?php
$tab = $db->query("SELECT * FROM articles ORDER BY id DESC ")->fetchAll(PDO::FETCH_ASSOC);
/** Pascal : Et si y'a moins de deux articles ? **/
$i=0;
while ($i<2){
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