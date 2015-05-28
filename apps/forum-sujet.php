<?php
if (isset($id_sujet)){
	$id_sujet=$db->quote($id_sujet);
	$tab = $db->query("SELECT forum.*, user.login
	FROM forum
	JOIN user ON user.id=forum.id_user
	WHERE forum.id= ".$id_sujet )->fetch(PDO::FETCH_ASSOC);
	if (isset($tab) && !empty($tab)) {

	
		$id_sujet = $tab['id'];
		$user_pseudo = htmlentities($tab['login']);
		$sujet = htmlentities($tab['sujet']);
		$date = $tab['date'];

		$description = balise($tab['description']);
		$id_user = $tab['id_user'];
	}
	else {
	$commentaire="Sujet non trouvé. ";
	require('./views/erreur.phtml');
	die();
	}
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