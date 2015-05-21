<?php
$tab = $db->query("SELECT 
	forum.*, 
	user.login, 
	user.id AS user_id 
	FROM forum
	JOIN user ON user.id = forum.id_user
	ORDER BY forum.id DESC
	")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $tab2) {
	$id_user = $tab2['user_id'];
	$user_pseudo = $tab2['login'];
	$id_sujet = $tab2['id'];
	$sujet = $tab2['sujet'];
	$date = $tab2['date'];
	$description = $tab2['description'];
	
	require('views/forum-liste.phtml');
}

?>