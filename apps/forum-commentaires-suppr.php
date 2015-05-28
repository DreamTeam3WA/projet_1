<?php
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user ){
	$db->exec("DELETE FROM commentaires WHERE id=".$id_commentaire);
}
else {
	$commentaire="Vous n'avez pas les droits.";
	require('./views/erreur.phtml');
}
?>