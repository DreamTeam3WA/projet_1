<?php
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user){
	if (isset($_POST['action']) && $_POST['action']=="modifProfil"){
		if(isset($_POST['date_naissance']) && !empty($_POST['date_naissance']) && isset($_POST['avatar']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['id_user']) && !empty($_POST['id_user'])){

				$nom = $db->quote($_POST['nom']);
				$prenom = $db->quote($_POST['prenom']);
				$date_naissance = $db->quote($_POST['date_naissance']);
				$avatar = $db->quote($_POST['avatar']);
				
				if (droits() == 1 || droits() ==2 || $_SESSION['id']==$id_user){
					$db-> exec("UPDATE user SET nom=".$nom.", prenom=".$prenom.", date_naissance=".$date_naissance.", avatar=".$avatar." WHERE id=".$id_user);	
					
				}
				else {
					$commentaire= "Vous n'avez pas les droits !";
					require('./views/erreur.phtml');
				}
			}
		else {
			$commentaire="Formulaire incomplet !";
			require('./views/erreur.phtml');
			}
	}
		require('./views/profil-modif.phtml');
}
else {
	$commentaire="Vous n'avez pas les droits.";
	require('./views/erreur.phtml');
}

	

?>