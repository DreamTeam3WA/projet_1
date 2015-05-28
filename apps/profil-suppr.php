<?php

if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
{
	$db->exec("DELETE FROM user WHERE id=".$id_user);
	$_SESSION = array();
	session_destroy();
	header('Location: index.php?page=home');
}
else {
	$commentaire="Erreur, vous n'avez pas les droits pour supprimer ce profil";
	require('./views/erreur.phtml');	
}
?>