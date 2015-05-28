<?php
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user ){
	if (isset($_POST['action']) && $_POST['action']=="modifCommentaire"){ 
		if(isset($_POST['description']) && !empty($_POST['description']) && isset($_SESSION['id']) && !empty($_SESSION['id']) && isset($_POST['id']) && !empty($_POST['id'])){
			$id_commentaire = $db->quote($_POST['id']);
			$description = $db->quote($_POST['description']);

			$tab = $db->query("SELECT *	FROM commentaires 
			 WHERE id=".$id_commentaire)->fetch(PDO::FETCH_ASSOC);
			
			if(isset($tab['id_user'])){
				$id_user_commentaire = $tab['id_user'];
			}
			else{
				$id_user_commentaire;
			}

			if (droits() == 1 || droits() == 2 || $_SESSION['id']== $id_user_commentaire ){

				$db-> exec("UPDATE commentaires SET description=".$description." WHERE id=".$id_commentaire);
				require('./views/forum-base.phtml');
			}
		}

		else {
			$commentaire="Il n'y a pas de description !";
			require('./views/erreur.phtml');
			}
	}
		require('./views/forum-commentaires-modif.phtml');
}
else {	
	$commentaire="Vous n'avez pas les droits. ";
	require('views/erreur.phtml');
}

?>