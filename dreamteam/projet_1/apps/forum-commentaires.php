<?php 
	$tab = $db->query("SELECT * FROM commentaires WHERE id_forum=$id_sujet ORDER BY id")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $tab2) {
	$date = $tab2['date'];
	$description = $tab2['description'];
	
	require('views/forum-commentaires.phtml');
}

 ?>