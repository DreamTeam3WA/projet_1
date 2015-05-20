 <?php

$tab = $db->query("SELECT * FROM articles ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);


$i=0;
while ($i<4){
	$titre = $tab[$i]['titre'];
	$date = $tab[$i]['date'];
	$user = $tab[$i]['user'];
	$lien = $tab[$i]['lien'];
	$description = $tab[$i]['description'];
	require('views/article-single.phtml');
	$i++;
}

?>