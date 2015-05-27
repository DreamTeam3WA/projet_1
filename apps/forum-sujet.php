<?php
if (isset($id_sujet)){
	$tab = $db->query("SELECT forum.*, user.login
	FROM forum
	JOIN user ON user.id=forum.id_user
	WHERE forum.id= ".$id_sujet )->fetchAll(PDO::FETCH_ASSOC);
		$id_sujet = $tab[0]['id'];
		$user_pseudo = $tab[0]['login'];
		$sujet = $tab[0]['sujet'];
		$date = $tab[0]['date'];
		$description = $tab[0]['description'];
		$id_user = $tab[0]['id_user'];
}
else {
	$commentaire="Vous n'avez pas le droit d'accéder directement sans passer par la page d'accueil en haut à gauche, angle 180° à droite de là bas, en haut enfin tu vois ce que je veux dire non ?";
	require('./views/erreur.phtml');
}

	if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
	{
		require('apps/forum-modif.php');
		require('views/forum-suppr.phtml');
	}


	require('views/forum-sujet.phtml');

?>