<?php

$tab = $db->query("SELECT * FROM articles WHERE id=".$id_article)->fetch(PDO::FETCH_ASSOC);
	if (isset($tab['titre']) && !empty($tab['titre']) &&
		 isset($tab['date']) && !empty($tab['date']) && 
		 isset($tab['user']) && !empty($tab['user']) &&
		 isset($tab['description']) && !empty($tab['description']) && isset($tab['lien'])){
		$titre = htmlentities($tab['titre']);
		$date = $tab['date'];
		$user = $tab['user'];
		$lien = htmlentities($tab['lien']);
		$description = balise($tab['description']);
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