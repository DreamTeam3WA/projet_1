<?php
if (isset($_POST['action']) && $_POST['action']=="addarticle"){ 
	if(isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_SESSION['login']) && !empty($_SESSION['login'])){
			$titre = $db->quote($_POST['titre']);
			$user = $db->quote($_SESSION['login']);
			$description = $db->quote($_POST['description']);	
			$lien = $db->quote($_POST['lien']);
			$db-> exec("INSERT INTO articles SET titre=".$titre.", lien=".$lien.", user=".$user.", description=".$description);
			require('./views/article.phtml');
	}
	else {
		$commentaire="Il n'y a pas de titre ou de description !";
		require('./views/erreur.phtml');
		}
}
else if (droits() == 1 || droits() == 2){
	require('./views/add-article.phtml');
}
else {
	require('./views/home.phtml');
}
?>

