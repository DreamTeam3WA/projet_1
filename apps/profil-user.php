<?php
if (isset($id_user) && !empty($id_user)) {
	$tab = $db->query("SELECT user.*, COUNT(forum.id_user) as NbrSujets FROM user JOIN forum ON user.id = forum.id_user WHERE user.id= ".$id_user)->fetch(PDO::FETCH_ASSOC);
		
		$login = htmlentities($tab['login']);
		$email = htmlentities($tab['email']);
		$date_register = $tab['date_register'];
		$nom = htmlentities($tab['nom']);
		$prenom = htmlentities($tab['prenom']);
		$date_naissance = $tab['date_naissance'];
		$nbr_sujets = $tab['nbr_sujets'];
		$avatar = htmlentities($tab['avatar']);
		$nbr_sujets= $tab['NbrSujets'];

	if (empty($nom) == true ) {
		$nom = 'Pas renseigné';
	}
	if (empty($prenom) == true ) {
		$prenom = 'Pas renseigné';
	}
	if (empty($avatar) == true ) {
		$avatar = 'http://www.google.fr/url?source=imglanding&ct=img&q=http://2.bp.blogspot.com/-omUBwmauN5o/UzVo2kr-NaI/AAAAAAAAAD0/lHpilGBoKoU/s1600/profileholder.gif&sa=X&ei=19hgVbCyF8T6UvjFgNAF&ved=0CAkQ8wc&usg=AFQjCNEjhQzaRNZcHzHLJHf7vq7CJAZDlw';
	}
}
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
{
	require('apps/profil-modif.php');
	
}
require('./views/profil-user.phtml');
?>