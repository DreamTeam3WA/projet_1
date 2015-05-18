 <?php

$tab = $db->query("SELECT * FROM articles ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);
>>>>>>> f2fa2841654d1e56bcc1df7fa089981edf71d31a

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