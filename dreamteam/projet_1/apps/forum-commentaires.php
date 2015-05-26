<?php 
/** Pascal : CONCATENATION §§§§§§§ **/
	$tab = $db->query("SELECT commentaires.*, user.login
	 FROM commentaires 
	JOIN user ON user.id=commentaires.id_user
	 WHERE id_forum=$id_sujet ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $tab2) {
	$id_commentaire=$tab2['id'];
	$id_user=$tab2['id_user'];
	$user_pseudo = $tab2['login'];
	$date = $tab2['date'];
	$description = $tab2['description'];
	

	require('views/forum-commentaires.phtml');
	if (droits() == 1 || droits() == 2 || droits() == 4)
	{
		require('apps/forum-commentaires-modif.php');
		require('views/forum-commentaires-suppr.phtml');
	}
	}

 ?>