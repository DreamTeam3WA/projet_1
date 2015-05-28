 <?php

$tab = $db->query("SELECT * FROM articles ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $key => $value) {
	$titre = htmlentities($tab[$key]['titre']);
	$date = $tab[$key]['date'];
	$user = htmlentities($tab[$key]['user']);
	$lien = htmlentities($tab[$key]['lien']);
	$description = htmlentities($tab[$key]['description']);
	$id_article = $tab[$key]['id'];
	require('views/article-liste.phtml');
}

?>