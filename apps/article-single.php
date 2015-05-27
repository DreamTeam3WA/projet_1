<?php

$tab = $db->query("SELECT * FROM articles WHERE id=".$id_article)->fetch(PDO::FETCH_ASSOC);
	if (isset($tab['titre']) && $tab['titre']!= NULL &&
		 isset($tab['date']) && $tab['date']!= NULL && 
		 isset($tab['user']) && $tab['user']!= NULL &&
		 isset($tab['description']) && $tab['description']!= NULL && isset($tab['lien'])){
		$titre = $tab['titre'];
		$date = $tab['date'];
		$user = $tab['user'];
		$lien = $tab['lien'];
		$description = $tab['description'];
	}
	else {
		$commentaire = "Erreur lecture base de données";
		require('./views/erreur.phtml');
	}
	
	if (droits() == 1 || droits() == 2)
	{
		require('apps/article-modif.php');
		require('views/article-suppr.phtml');
	}


require('views/article-single.phtml');
?>