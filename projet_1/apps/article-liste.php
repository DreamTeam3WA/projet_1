 <?php

$tab = $db->query("SELECT * FROM articles ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $key => $value) {
	$titre = $tab[$key]['titre'];
	$date = $tab[$key]['date'];
	$user = $tab[$key]['user'];
	$lien = $tab[$key]['lien'];
	$description = $tab[$key]['description'];
	$id_article = $tab[$key]['id'];
	require('views/article-liste.phtml');
}

?>