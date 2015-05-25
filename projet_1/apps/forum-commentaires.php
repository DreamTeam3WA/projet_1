<?php 
	$tab = $db->query("SELECT commentaires.*, user.login
	 FROM commentaires 
	JOIN user ON user.id=commentaires.id_user
	 WHERE id_forum=$id_sujet ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $tab2) {
	$user_pseudo = $tab2['login'];
	$date = $tab2['date'];
	$description = $tab2['description'];
	
	require('views/forum-commentaires.phtml');
}

 ?>