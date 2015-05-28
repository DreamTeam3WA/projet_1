<?php
if (isset($_POST['action']) && $_POST['action']=="reponseCommentaire"){ 
	if(isset($_POST['description']) && !empty($_POST['description']) && isset($_SESSION['id']) && !empty($_SESSION['id'])){
			$id_user = $db->quote($_SESSION['id']);
			$id_forum = $db->quote($_POST['id_forum']);
			$description = $db->quote($_POST['description']);	
			$db-> exec("INSERT INTO commentaires SET id_user=".$id_user.", id_forum=".$id_forum.", description=".$description);
			require('./views/forum-base.phtml');
	}

	else {
		$commentaire="Il n'y a pas de description !";
		require('./views/erreur.phtml');
		}
}
else if (droits() == 1 || droits() == 2 || droits() == 3){
	require('./views/forum-reponse.phtml');
}
else {	
	require('views/forum-base.phtml');
}
?>