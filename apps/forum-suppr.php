<?php
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user){
	if (isset($id_sujet)) {
		$tab = $db->query("SELECT * FROM forum WHERE forum.id= ".$id_sujet)->fetchAll(PDO::FETCH_ASSOC);
					$db->exec("DELETE FROM forum WHERE id=".$id_sujet);
	}
	else {
	$commentaire="Erreur numéro de sujet. ";
	require('./views/erreur.phtml');
}
}

else {
		$commentaire="Erreur vous n'avez pas les droits. ";
		require('./views/erreur.phtml');
}

?>