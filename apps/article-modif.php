<?php
if (droits() == 1 || droits() == 2){
	if (isset($_POST['action']) && $_POST['action']=="modifarticle"){ 
		if(isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_SESSION['login']) && !empty($_SESSION['login']) && isset($_POST['lien']) && isset($_POST['id_article']) && !empty($_POST['id_article'])){
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
		require('./views/article-modif.phtml');
}
else {
	$commentaire="Vous n'avez pas les droits." ;
	require('./views/erreur.phtml');
}
?>