<?php
if (isset($_POST['action']) && $_POST['action']=="modifCommentaire"){ 
	if(isset($_POST['description']) && $_POST['description']!= NULL && isset($_SESSION['id']) && $_SESSION['id']!= NULL && isset($_POST['id']) && $_POST['id']!= NULL){
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
else if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user ){
	require('./views/forum-commentaires-modif.phtml');
}
else {	
	require('views/forum-base.phtml');
}

?>