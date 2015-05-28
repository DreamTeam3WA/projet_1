<?php
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user ){
	if (isset($_POST['action']) && $_POST['action']=="modifSujet"){ 
		if(isset($_POST['sujet']) && !empty($_POST['sujet']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_SESSION['id']) && !empty($_SESSION['id'])){
				$sujet = $db->quote($_POST['sujet']);
				$id_user = $db->quote($_SESSION['id']);
				$description = $db->quote($_POST['description']);	
				$db-> exec("UPDATE forum SET sujet=".$sujet.", id_user=".$id_user.", description=".$description."WHERE id=".$id_sujet);
				require('./views/forum-base.phtml');
		}

		else {
			$commentaire="Il n'y a pas de sujet ou de description !";
			require('./views/erreur.phtml');
			}
	}
		require('./views/forum-modif.phtml');
}
else {	
	$commentaire="Vous n'avez pas les droits.";
	require('views/erreur.phtml');
}
?>