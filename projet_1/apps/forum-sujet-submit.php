<?php
if (isset($_POST['action']) && $_POST['action']=="addSujet"){ 
	if(isset($_POST['sujet']) && $_POST['sujet']!= NULL && isset($_POST['description']) && $_POST['description']!= NULL && isset($_SESSION['id']) && $_SESSION['id']!= NULL){
			$sujet = $db->quote($_POST['sujet']);
			$id_user = $db->quote($_SESSION['id']);
			$description = $db->quote($_POST['description']);	
			$db-> exec("INSERT INTO forum SET sujet=".$sujet.", id_user=".$id_user.", description=".$description);
			require('./views/forum-base.phtml');
	}

	else {
		$commentaire="Il n'y a pas de titre ou de description !";
		require('./views/erreur.phtml');
		}
}
else if (droits() == 1 || droits() == 2 || droits() == 3){
	require('./views/forum-sujet-submit.phtml');
}
else {	
	require('views/forum-base.phtml');
}
?>