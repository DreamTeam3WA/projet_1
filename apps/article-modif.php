<?php
if (isset($_POST['action']) && $_POST['action']=="modifarticle"){ 
	if(isset($_POST['titre']) && $_POST['titre']!= NULL && isset($_POST['description']) && $_POST['description']!= NULL && isset($_SESSION['login']) && $_SESSION['login']!= NULL && isset($_POST['lien']) && isset($_POST['id_article']) && $_POST['id_article']!=NULL){
			$titre = $db->quote($_POST['titre']);
			$user = $db->quote($_SESSION['login']);
			$description = $db->quote($_POST['description']);
			$lien = $db->quote($_POST['lien']);
			if (droits() == 1 || droits() ==2){
			$db-> exec("UPDATE articles SET titre=".$titre.", lien=".$lien.", user=".$user.", description=".$description." WHERE id=".
				$id_article);	
			require('./views/article.phtml');
		}
		else {
			$commentaire= "Vous n'avez pas les droits !";
			require('./views/erreur.phtml');
		}
	}
	else {
		$commentaire="Il n'y a pas de titre ou de description !";
		require('./views/erreur.phtml');
		}
}
if (droits() == 1 || droits() == 2)
{
	require('./views/article-modif.phtml');
}
else {
	require('./views/home.phtml');
}
?>