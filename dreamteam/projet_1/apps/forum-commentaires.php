<?php 
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
	if(isset($_SESSION['droits']) && (($_SESSION['droits'] == 1 || $_SESSION['droits'] == 2) || ($id_user==$_SESSION['id'])))
	{
		require('apps/forum-commentaires-modif.php');
		require('views/forum-commentaires-suppr.phtml');
	}
	}

 ?>